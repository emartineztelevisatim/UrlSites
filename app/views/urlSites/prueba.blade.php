@extends('urlSites.main')
    @section('content')
<br><br>
<br>
<div class="row"> 
    	<div id="editorfeeds" class="col-md-8">
    <section class="widget">
        <header><h4><i class="fa fa-pencil"></i>  Editor de Video Clips</h4></header>
        <div class="body">
            <form method="post">
                <fieldset>
                    <div class="row">
                        <div class="col-sm-12">                        
                            <div class="form-group">
                                <div class="col-md-12 col-md-offset-0">
                                    <section class="widget">
                                        <div class="body no-margin">
                                            <div class="row">
                                                <div class="col-md-10 col-md-offset-1">

                                                    <legend class="section">Urls</legend>
                                                    <form class="form-inline form-search no-margin text-align-center" role="form">
                                                        <div class="input-group">
                                                            <input id='inputUrls' class="form-control" placeholder="Urls">
                                                        </div>
                                                    </form>

                                                      <legend class="section">Periodo</legend>
                                                    <form class="form-inline form-search no-margin text-align-center" role="form">
                                                            <div class="controls form-group">
                                                                <div class="input-group col-sm-8">
                                                                   
                                                                    <span class="input-group-addon"><i class="fa fa-calendar-o"></i></span>Fecha
                                                                    {{Form::text('birthdate','', array('id'=>'inputPeriod', 'class' => 'form-control date-picker','format'=>'yyyy/mm/dd','placeholder'=>'Periodo'))}}
                                                                    <span class="input-group-btn"><a href="#" class="btn btn-danger " data-date-format="yyyy/mm/dd" data-date="today();">
                                                                        <i class="fa fa-calendar"></i>
                                                                        </a>
                                                                    </span>

                                                                    <span class="input-group-addon"><i class="eicon-clock"></i></span>Hora
                                                                    {{Form::text('inputTimePicker','', array('id'=>'inputTime','class' => 'inputTimePicker','format'=>'hh:mm:ss','placeholder'=>'Tiempo'))}}
                                                                    <script>$(".inputTimePicker").timepicki();</script>
                                                                    <span class="input-group-btn "><a href="#" class="btn btn-danger" ><i class="eicon-clock"></i></a>
                                                                    </span> 

                                                                </div>
                                                            </div>
                                                    </form> 


                                                    <legend class="section">Contenido</legend>
                                                    <form class="form-horizontal form-search no-margin text-align-left" role="form">
                                                        <div class="control-group">
                                                                <label class="checkbox">
                                                                    <input type="checkbox" id="checkbox1" class="iCheck"> Informaci&oacute;n
                                                                </label>
                                                                <label class="checkbox">
                                                                    <input type="checkbox" id="checkbox2" class="iCheck"> Notas
                                                                </label>
                                                                <label class="checkbox">
                                                                    <input type="checkbox" id="checkbox3" class="iCheck"> Videos
                                                                </label>
                                                        </div>
                                                    </form> 

                                                    <legend class="section">Sitio</legend>
                                                    <form class="form-inline form-search no-margin text-align-center" role="form">
                                                        <div class="input-group">
                                                            <input id='inputSities'  class="form-control" placeholder="Sites">
                                                            <span class="input-group-btn">
                                                                <button type='button' class="btn btn-primary" id='addUrlSite'>
                                                                    Add
                                                                </button>
                                                            </span>
                                                        </div>
                                                    </form>     
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>                             
                           
                           <!-- <div class="form-actions">                                           
                                    <button id='AddNewUrl' type="button"  class="btn btn-warning"><i class="fa fa-plus"></i>  Agregar Nuevo </button>
                                    <button id="saveVideoClips"    type="button"  class="btn btn-default"><i class="fa fa-refresh"></i>  Refrescar</button>
                            </div>   -->                                                     
                           
                            </div>
                        </div>
                    </div>    
                </fieldset>
            </form>
        </div>
    </section>
</div>  

</div>

@stop


@section('scripts')

 @parent
		{{ HTML::script('/light-blue/lib/bootstrap-datepicker.js') }}
        {{ HTML::script('js/formAccountNewUpd.js') }} 
        <script src="/js/timepicki.js"></script> 


        <script type="text/javascript">
/*
|-------------------------------------------------------------------------------
| Variables Globales
|-------------------------------------------------------------------------------
|
*/ 
var inputUrls = $('#inputUrls');
var inputSities = $('#inputSities');
var checkbox1 = $('#checkbox1');
var inputPeriod = $('#inputPeriod');
var inputTime = $('#inputTime');
//var AddNewUrl = $('#AddNewUrl');    
/*
|-------------------------------------------------------------------------------
| escaleta/displayCounterFeeds
|-------------------------------------------------------------------------------
|
*/ 
$('#addUrlSite').on('click',function(event) {  



    alert("hola");

    /*inputUrls = $('#inputUrls').val();
    inputSities = $('#inputSities').val();
    checkbox1 = $('#checkbox1').val();
    inputPeriod = $('#inputPeriod').val();
    
    $.ajax({
        url: 'home/addNewUrl',
        type: 'get',
        data: {'inputUrls': inputUrls,'inputSities':inputSities,'checkbox1':checkbox1,'inputPeriod':inputPeriod},
        success: function(data) {
//           if (data) {
//              $('#counterFeeds').html(data);
//           } else {
//              $('#counterFeeds').html('<div>0</div>');
//           }
//           attachevent();
        }
     });*/
});
</script>
@stop