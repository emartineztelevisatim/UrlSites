<?php

class UsersController extends BaseController {
    public function index() {
        $users = User::all();
        return View::make('users.index')->with('users', $users);
    }
    public function show($id) {
        $user = User::find($id);
        return View::make('users.show')->with('user', $user);
    }
    public function create() {
        $user = new User();
        return View::make('users.save')->with('user', $user);
    }
    public function store() {
        $user = new User();
        $user->real_name = Input::get('real_name');
        $user->email = Input::get('email');
        $user->password = Hash::make(Input::get('password'));
        $user->level = Input::get('level');
        $user->active = true;
        $user->save();
        return Redirect::to('users')->with('notice', 'El usuario ha sido creado correctamente.');
    }
    public function edit($id) {
        $user = User::find($id);
        return View::make('users.save')->with('user', $user);
    }
    public function update($id) {
        $user = User::find($id);
        $user->real_name = Input::get('real_name');
        $user->email = Input::get('email');
        $user->level = Input::get('level');
        $user->save();
        return Redirect::to('users')->with('notice', 'El usuario ha sido modificado correctamente.');
    }
    public function destroy($id) {
        $user = User::find($id);
        $user->delete();
        return Redirect::to('users')->with('notice', 'El usuario ha sido eliminado correctamente.');
    }

    public function login() {
        try
            {

                // Login credentials
                $credentials = array(
                    'email'    => Input::get('email'),
                    'password' => Input::get('password'),
                );
                
                // Authenticate the user
                $user = Sentry::authenticate($credentials, false);

                $adminGroup = Sentry::findGroupById($user->id);

                    if ($user->addGroup($adminGroup)){
                            //echo "<br>Group assigned successfully";
                    }else{
                            //echo "<br>Group was not assigned";
                            if (Sentry::check()){
                               Sentry::logout();
                            }
                            return Redirect::back()->withErrors(array('msg'=>'Group was not assigned'));
                    }
                    
                return  View::make('urlSites.prueba');
                
            }
            catch (Cartalyst\Sentry\Users\LoginRequiredException $e){
                return Redirect::back()->withErrors(array('login'=>'Login field is required.'));
            }
            catch (Cartalyst\Sentry\Users\PasswordRequiredException $e){
                return Redirect::back()->withErrors(array('password'=>'Password field is required.'));
            }
            catch (Cartalyst\Sentry\Users\WrongPasswordException $e){
                return Redirect::back()->withErrors(array('password'=>'Wrong password, try again.'));
            }
            catch (Cartalyst\Sentry\Users\UserNotFoundException $e){
                return Redirect::back()->withErrors(array('msg'=>'User was not found.'));
            }
            catch (Cartalyst\Sentry\Users\UserNotActivatedException $e){
                return Redirect::back()->withErrors(array('msg'=>'User is not activated.'));
            }
            // The following is only required if the throttling is enabled
            catch (Cartalyst\Sentry\Throttling\UserSuspendedException $e){
                return Redirect::back()->withErrors(array('msg'=>'User is suspended.'));
            }
            catch (Cartalyst\Sentry\Throttling\UserBannedException $e){
                return Redirect::back()->withErrors(array('msg'=>'User is banned.'));
            }
            catch (Cartalyst\Sentry\Groups\GroupNotFoundException $e){
                return Redirect::back()->withErrors(array('msg'=>'Group was not found.'));
            }
    }
}
?>