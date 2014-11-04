@extends('urlSites.main')

@section('content')

    <div class="single-widget-container">
        <section class="widget login-widget">
            <header class="text-align-center">
                <h4>{{Lang::get('login.email')}}</h4>
                        <div class="widget-controls">
                            <a data-widgster="close" title="Close" href="/login"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
            </header>
            <span class="error">{{ $errors->first('msg') }}</span>
            <div class="body">

            {{Form::open(array('method' => 'POST', 'url' => 'emailPass/confirmemail'))}}

                <fieldset>                  
                    <div class="form-group">
                        <label>{{Lang::get('login.email_placeholder')}}</label>
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon">
                                <i class="fa fa-envelope-o"></i>
                            </span>
                            {{Form::text('email', '', array('class' => 'form-control input-lg', 'placeholder'=> Lang::get('login.email_placeholder')))}}
                        </div>
                        <span class="error" style='color:red;padding-left: 4em;font-weight: bold'>
                            {{ $errors->first('email') }}
                        </span>
                    </div>
                </fieldset>

                <div class="form-actions">
                        <button type="submit" class="btn btn-block btn-danger">
                            <small>{{Lang::get('login.email_request')}}</small>
                        </button>
                        <div class="forgot">
                        </div>
                </div>
            {{Form::close()}}

                </div>

        </section>
    </div>

@stop


@section('scripts')
 @parent

    @if(Session::has('msg')) 
       <script type="text/javascript">

            window.onload = function() {

                msg = "Debes esperar al menos 5 minutos para volver a solicitar la contraseña";

                alert(msg)
            }
          </script>    
    @endif
    @if(Session::has('msgAviso')) 
          <script type="text/javascript">

           window.onload = function() {

            msgAviso = "Ya solicitaste cambio de contraseña favor de checar tu correo";
                alert(msgAviso)
                window.location.href = "/welcome";
            }
          </script>      
    @endif


    @if(Session::has('msgEnviado')) 
          <script type="text/javascript">

            window.onload = function() {

            msgEnviado = "Se te han enviado instrucciones para cambiar la contraseña en tu correo";

                alert(msgEnviado)
                window.location.href = "/welcome";
            }

            
          </script>      
    @endif
    @if(Session::has('msgError')) 
          <script type="text/javascript">

             window.onload = function() {

                msgError = "No se encuentra el usuario";

                alert(msgError)
            }

          </script>      
    @endif

@stop


