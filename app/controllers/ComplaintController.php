<?php

class ComplaintController extends BaseController {

    public function verHola() { 
    }

    public function action_index() { 
        $complaints = Complaint::all();
        return View::make('home')->with('complaints', $complaints);
    }

    public function destroy($complaint_id) {

        $complaint = Complaint::find($complaint_id);
        $complaint->complaint_active = '0';
        $complaint->save();
    }

    public function show($complaint_id) {

        $complaints = Complaint::find($complaint_id);
        return View::make('show')
                        ->with('complaints', $complaints);
    }

    public function edit($complaint_id) {

        $complaints = Complaint::find($complaint_id);
        return View::make('edit')->with('complaints', $complaints);
    }


public function update($complaint_id)
    {
                                
        $rules = array(
            'notificationType' => 'required',
            'Type' => 'required',
            'SubType' => 'required',
            'emailAddress' => 'required|email',
            'timestamp' => 'required',
            'arrivalDate' => 'required',
            'complaint_active' => 'required',
        );



        $messages = array(
            'required' => 'El campo es obligatorio.',
            'min' => 'El campo :attribute no puede tener menos de :min carácteres.',
            'email' => 'El campo :attribute debe ser un email válido.',
            'max' => 'El campo :attribute no puede tener más de :min carácteres.',
            'unique' => 'El email ingresado ya existe en la base de datos'
        );

        $validation = Validator::make(Input::all(), $rules, $messages);
        if ($validation->fails()) {
           return Redirect::to('index/')->withErrors($validation)->withInput();
          
    
        } else {
            $complaint = Complaint::find($complaint_id);
            $complaint->notificationType = Input::get('notificationType');
            $complaint->Type = Input::get('Type');
            $complaint->SubType = Input::get('SubType');
            $complaint->emailAddress = Input::get('emailAddress');
            $complaint->timestamp = Input::get('timestamp');
            $complaint->arrivalDate = Input::get('arrivalDate');
            $complaint->complaint_active = Input::get('complaint_active');
            $complaint->Save();
        } 
    }

    public function store() {
        date_default_timezone_set("Mexico/General");
        $dates= date("Y-m-d H:i:s");

        $unixtime = time();
         $unixtime;
        $rules = array(
            'notificationType' => 'required',
            'Type' => 'required',
            'SubType' => 'required',
            'emailAddress' => 'required|email',
            'complaint_active' => 'required',
        );

        $messages = array(
            'required' => 'El campo es obligatorio.',
            'min' => 'El campo :attribute no puede tener menos de :min carácteres.',
            'email' => 'El campo :attribute debe ser un email válido.',
            'max' => 'El campo :attribute no puede tener más de :min carácteres.',
            'unique' => 'El email ingresado ya existe en la base de datos'
        );

        $validation = Validator::make(Input::all(), $rules, $messages);

        if ($validation->fails()) {
            return Redirect::to('home')->withErrors($validation)->withInput();
        } else {

            $complaint = new Complaint();
            $complaint->notificationType = Input::get('notificationType');
            $complaint->Type = Input::get('Type');
            $complaint->SubType = Input::get('SubType');
            $complaint->emailAddress = Input::get('emailAddress');
            $complaint->timestamp = $dates;
            $complaint->arrivalDate = $unixtime;
            $complaint->complaint_active = Input::get('complaint_active');
            $complaint->Save();
            $complaints = Complaint::all();
            return View::make('home')->with('complaints', $complaints);
        }
    }

}

?>