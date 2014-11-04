<!DOCTYPE html><html>    <head>        <title></title>        <!--    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">-->        <link href="/light-blue/css/application.css" rel="stylesheet">        <link rel="stylesheet" href="css/tinyscrollbar.css" type="text/css" media="screen"/>        <link rel="stylesheet" href="css/timepicki.css" type="text/css" media="screen"/>        <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>        {{ HTML::script('/light-blue/lib/bootstrap-datepicker.js') }}        {{ HTML::script('js/scripts_syndi.js') }}        <!--    {{ HTML::script('/amp/amp.min.js?/amp/samples.xml') }}-->        {{ HTML::script('/amp/amp.premier.min.js?amp-defaults=/amp/amp-samples.xml') }}        <script language="JavaScript" type="text/javascript" src="js/program_list.js"></script>        <script language="JavaScript" type="text/javascript" src="js/ramas_tv3.js"></script>        <script language="JavaScript" type="text/javascript" src="js/ramas_video_deportes.js"></script>        <script language="JavaScript" type="text/javascript" src="js/ramas_ninos.js"></script>        <script type="text/javascript" src="js/calendar.js"></script>        <script type="text/javascript" src="js/view.js"></script>        <script src="/light-blue/lib/sparkline/jquery.sparkline.js"></script>        <script src="/light-blue/lib/jquery-ui-1.10.3.custom.js"></script>        <script src="/light-blue/lib/jquery.slimscroll.js"></script>          {{ HTML::script('js/formAccountNewUpd.js') }}         <script src="/js/timepicki.js"></script>     </head>    <body>        <div class="container" >            <div class="row" >                <div class="col-sm-12">                    <legend>Notificaciones</legend>                </div>                <div id="editorfeeds" class="col-md-4">                    <section class="widget">                        <header><h4><i class="fa fa-pencil"></i>  Editor de Video Clips</h4></header>                        <div class="body">                            <form method="post">                                <fieldset>                                    <div class="row">                                        <div class="col-sm-12">                                                                    <div class="form-group">                                                <div class="col-md-12 col-md-offset-0">                                                    <section class="widget">                                                        <div class="body no-margin">                                                            <div class="row">                                                                <div class="col-md-10 col-md-offset-1">                                                                    <legend class="section">Urls</legend>                                                                    <form class="form-inline form-search no-margin text-align-center" role="form">                                                                        <div class="input-group">                                                                            <input type="search" class="form-control"                                                                                   placeholder="Urls">                                                                            <span class="input-group-btn">                                                                                <button class="btn btn-primary">                                                                                    Search                                                                                </button>                                                                            </span>                                                                        </div>                                                                    </form>                                                                </div>                                                            </div>                                                        </div>                                                    </section>                                                </div>                                                <!--                                                |-------------------------------------------------------------------------------                                                | btn-select-calendar                                                |-------------------------------------------------------------------------------                                                |                                                -->                                                    <div class="col-md-12 col-md-offset-0">                                                    <section class="widget">                                                        <div class="body no-margin">                                                            <div class="row">                                                                <div class="col-md-10 col-md-offset-1">                                                                    <legend class="section">Periodo</legend>                                                                    <form class="form-inline form-search no-margin text-align-center" role="form">                                                                        <div class="controls form-group">                                                                            <div class="input-group col-sm-8">                                                                                <span class="input-group-addon"><i class="fa fa-calendar-o"></i></span>                                                                                {{Form::text('birthdate','', array('class' => 'form-control','format'=>'yyyy/mm/dd','placeholder'=>'Periodo'))}}                                                                                <span class="input-group-btn"><a href="#" class="btn btn-danger date-picker" data-date-format="yyyy/mm/dd" data-date="today();">                                                                                        <i class="fa fa-calendar"></i>                                                                                    </a>                                                                                </span>                                                                            </div>                                                                            {{$errors->first('birthdate', '<span class="error">:message</span>')}}                                                                        </div>                                                                    </form>                                                                </div>                                                            </div>                                                        </div>                                                    </section>                                                </div>                                                            <div class="col-md-12 col-md-offset-0">                                                    <section class="widget">                                                        <div class="body no-margin">                                                            <div class="row">                                                                <div class="col-md-10 col-md-offset-1">                                                                    <legend class="section">Tiempo</legend>                                                                    <form class="form-inline form-search no-margin text-align-center" role="form">                                                                        <div class="control-group">                                                                            <!--                                    {{Form::label('birthdate',Lang::get('formAccount.dateBirth'),array('class' => 'control-label'))}}-->                                                                            <div class="controls form-group">                                                                                <div class="input-group col-sm-8">                                                                                    <span class="input-group-addon"><i class="eicon-clock"></i></span>                                                                                    {{Form::text('inputTimePicker','', array('class' => 'inputTimePicker','format'=>'hh:mm:ss','placeholder'=>'Tiempo'))}}                                                                                    <script>$(".inputTimePicker").timepicki();</script>                                                                                    <span class="input-group-btn "><a href="#" class="btn btn-danger" data-date-format="yyyy/mm/dd" data-date="today();"><i class="eicon-clock"></i></a></span>                                                                                             </div>                                                                            </div>                                                                        </div>                                                                     </form>                                                                </div>                                                            </div>                                                        </div>                                                    </section>                                                </div>                                                <div class="col-md-12 col-md-offset-0">                                                    <section class="widget">                                                        <div class="body no-margin">                                                            <div class="row">                                                                <div class="col-md-10 col-md-offset-1">                                                                    <legend class="section">Sitio</legend>                                                                    <form class="form-inline form-search no-margin text-align-center" role="form">                                                                        <div class="input-group">                                                                            <input type="search" class="form-control"                                                                                   placeholder="Sites">                                                                            <span class="input-group-btn">                                                                                <button class="btn btn-primary">                                                                                    Search                                                                                </button>                                                                            </span>                                                                        </div>                                                                    </form>                                                                </div>                                                            </div>                                                        </div>                                                    </section>                                                </div>                                                            <div class="form-actions">                                                                                               <button id='previewVideoClips' type="button"  class="btn btn-default"><i class="fa fa-play"></i> Prueba </button>                                                    <button id="saveVideoClips"    type="button"  class="btn btn-success"><i class="fa fa-plus"></i> Agregar </button>                                                    <button id='restoreVideoClips' type="button"  class="btn btn-default"><i class="eicon-back-in-time"></i> Retornar </button>                                                                                          </div>                                            </div>                                        </div>                                    </div>                                    </fieldset>                            </form>                        </div>                    </section>                </div>                  <div class="content container">                    <div class="row">                        <div class="col-md-8">                            <section class="widget">                                <header>                                    <h4><i class="fa fa-list-ol"></i>Varius content</h4>                                </header>                                <div class="body">                                    <table class="table table-striped table-images">                                        <thead>                                            <tr>                                                <th><small><strong>Id</strong></small></th>                                                <th><small><strong>Url</strong></small></th>                                                <th><small><strong>Tipo Url</strong></small></th>                                                <th><small><strong>Periodo</strong></small></th>                                                <th><small><strong>Tipo Info</strong></small></th>                                                <th><small><strong>Creaci�n</strong></small></th>                                            </tr>                                        </thead>                                        <tbody>                                            </tr>-->                                            @foreach($urlSities as $key => $value)                                            <tr>                                                <td>{{ $value->id}}</td>                                                <td>{{ $value->url}}</td>                                                <td>{{ $value->type_url }}</td>                                                <td>{{ $value->startDate }}</td>                                                <td>{{ $value->type_info }}</td>                                                <td>{{ $value->created_at}}</td>                                                <td>                                                    <button class="btn btn-sm btn-primary">Ver</button>                                                    <button class="btn btn-sm btn-warning" data-toggle="button">Eliminar</button>                                                </td>                                            </tr>                                            @endforeach                                                                    </tbody>                                    </table>                                    <div class="clearfix">                                        <div class="pull-right">                                            <button class="btn btn-default btn-sm">Guardar JSON</button>                                            <div class="btn-group">                                                <button class="btn btn-sm btn-inverse dropdown-toggle" data-toggle="dropdown">Limpiar<i class="fa fa-caret-down"></i></button>                                                <ul class="dropdown-menu">                                                    <li><a href="#">Clear</a></li>                                                    <li><a href="#">Move ...</a></li>                                                    <li><a href="#">Something else here</a></li>                                                    <li class="divider"></li>                                                    <li><a href="#">Separated link</a></li>                                                </ul>                                            </div>                                        </div>                                        <ul class="pagination no-margin">                                            <li class="disabled"><a href="#">Prev</a></li>                                            <li class="active"><a href="#">1</a></li>                                            <li><a href="#">2</a></li>                                            <li><a href="#">Next</a></li>                                        </ul>                                    </div>                                </div>                            </section>                        </div>                    </div>                </div>                        </div>    </body></html>