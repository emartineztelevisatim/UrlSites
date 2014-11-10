<!-- app/views/nerds/show.blade.php -->

<!DOCTYPE html>
<html>
    <head>
        <title>Notificaciones</title>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">

            <nav class="navbar navbar-inverse">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ URL::to('index') }}">Notificaciones</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="{{ URL::to('index') }}">Ver Notificaciones</a></li>
                  
                </ul>
            </nav>

            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="span2" > <img src="https://secure.gravatar.com/avatar/de9b11d0f9c0569ba917393ed5e5b3ab?s=140&r=g&d=mm" class="img-circle">
                        </div>

                        <div class="span8">
                            <h3>{{ $complaints->emailAddress }}</h3>
                            <h6>Tipo de Notificación: {{ $complaints->notificationType }}</h6>
                            <h6>Tipo: {{ $complaints->Type }}</h6>
                            <h6>Fecha de registro: {{ $complaints->timestamp }}</h6>
                            <h6>Fecha de alerta: {{ $complaints->arrivalDate }}</h6>
                            <h6>{{ $complaints->complaint_active }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </body>
</html>