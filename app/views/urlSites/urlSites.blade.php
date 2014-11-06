@extends('urlSites.main')
    @section('content')
<br><br>
<br>

<div class="row"> 
    	<div id="editorfeeds" class="col-md-8">
    <section class="widget">
        <header><h4><i class="fa fa-pencil"></i>  Editor </h4></header>
        <div class="body">

            <form method="get" id='formGen' class="form-horizontal" action="#">
                <fieldset>
                    <div class="row">
                        <div class="col-sm-12">                        
                            <div class="form-group">
                                <div class="col-md-12 col-md-offset-0">
                                    <section class="widget">
                                        <div class="body no-margin">
                                            <div class="row">
                                                <div class="col-md-10 col-md-offset-1">

                                                    <legend class="section">Name Site</legend>
                                                        <div class="input-group col-sm-10">
                                                            <input id='inputUrls' class="form-control" placeholder="Urls" name='inputUrls'>
                                                        </div>


                                                    <legend class="section">Content Type</legend>
                                                        <div class="control-group checkboxAlign">
                                                                <label class="checkbox">
                                                                    <input type="checkbox" name="contenido[]" class="iCheck contentCheck" value='Imagenes'> Imagenes
                                                                </label>
                                                                <label class="checkbox">
                                                                    <input type="checkbox" name="contenido[]" class="iCheck contentCheck" value='Notas'> Notas
                                                                </label>
                                                                <label class="checkbox">
                                                                    <input type="checkbox" name="contenido[]" class="iCheck contentCheck" value='Videos'> Videos
                                                                </label>
                                                        </div>
                                                    
                                                   	
                                                    <legend class="section">Period</legend>                                                 
                                                        <div class=" col-sm-10">
                                                                <select name="period"  class='chzn-select select-block-level' id='period'>
									                                <option value="">............</option>
									                                <option value='Hora'>Hora</option>
                                                                	<option value='Dia'>Dia</option>
                                                                	<option value='Semana'>Semana</option>
                                                                	<option value='Mes'>Mes</option>
                   												</select>   
                                                        </div>

                                                    <legend class="section">Elements</legend>                                                 
                                                       <div class=" col-sm-10">
                                                             <select name="numElement" class='chzn-select select-block-level' id='numElement'>
									                                @for ($i=0; $i <=20 ; $i++)
									                                	<option value='{{$i}}'>{{$i}}</option>
									                                @endfor
                   											</select>     
                                                       </div>

                                                    <legend class="section">Incluir</legend>                                                
                                                        <div class="input-group col-sm-10">
                                                            <input id='inputSitiesInclude'  class="form-control" placeholder="Sites">
                                                            <span class="input-group-btn">
                                                                <button type='button' class="btn btn-primary" id='addUrlSiteInclude'>
                                                                    Add
                                                                </button>
                                                            </span>
                                                        </div>
                                                <!--   **************  -->
                                                    <div id='formInclude'></div>

                                                    <legend class="section">Excluir</legend>
                                                        <div class="input-group col-sm-10">
                                                            <input id='inputSitiesExclude'  class="form-control" placeholder="Sites">
                                                            <span class="input-group-btn">
                                                                <button type='button' class="btn btn-primary" id='addUrlSiteExclude'>
                                                                    Add
                                                                </button>
                                                            </span>
                                                        </div>
                                                  <!--   **************  -->
                                                    <div id='formExclude'></div>     
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>                             
                            </div>
                        </div>
                    </div>    
                </fieldset>
            </form>

            			<div class="well well-sm well-white">
                            <div class="row">
                                <div class="col-xs-5 col-sm-offset-5">
                                    <button type="button" class="btn btn-primary btn-sm" data-placement="top" id='saveUrl'>
                                        Save
                                    </button>
                                </div>
                            </div>
                        </div>
        </div>
    </section>
</div>  

</div>


@stop


@section('scripts')

 @parent
		{{ HTML::script('/light-blue/lib/bootstrap-datepicker.js') }}
        {{ HTML::script('js/formAccountNewUpd.js') }} 
        {{ HTML::script('light-blue/lib/icheck.js/jquery.icheck.js') }}
        <!--<script src="/js/timepicki.js"></script> -->

<script src="/light-blue/lib/select2.js"></script>
<script src="/light-blue/lib/bootstrap/collapse.js"></script>
<script src="/light-blue/lib/bootstrap/transition.js"></script>
<script src="/light-blue/lib/bootstrap/button.js"></script>
<script src="/light-blue/lib/bootstrap-select/bootstrap-select.js"></script>



<style type="text/css">
	table th,td{padding: .5em;}
	select{color:black;}
	.checkboxAlign label{float: left;padding-left: 4em;}
	td input{color:black;}


</style>

        <script type="text/javascript">

$(".iCheck").iCheck({
            checkboxClass: 'icheckbox_square-grey',
            radioClass: 'iradio_square-grey'
});

$(".chzn-select").each(function(){
            $(this).select2($(this).data());
});  

$('#addUrlSiteInclude').on('click',function() {  

	var inputSitiesInclude = $('#inputSitiesInclude').val();

	if(inputSitiesInclude){
		$("#formInclude").append($("<ul>")
							.append($("<li>",{value:inputSitiesInclude,text:inputSitiesInclude})));
		
		$("#inputSitiesInclude").val('');
	}
});


$('#addUrlSiteExclude').on('click',function() {  

	var inputSitiesExclude = $('#inputSitiesExclude').val();

		if(inputSitiesExclude){

			$("#formExclude").append($("<ul>")
								.append($("<li>",{value:inputSitiesExclude,text:inputSitiesExclude})));

			$("#inputSitiesExclude").val('');
		}	
});


$("#saveUrl").on('click',function(){

	var formGen = $("#formGen").serialize(),
		dataInclude = [],
		dataExclude = [];

		$('#formInclude ul li').each(function(i)
		{
			dataInclude[i] = $(this).attr('value');
			//dataInclude.push($(this).attr('value'));
		});

		$('#formExclude ul li').each(function(i)
		{
			dataExclude[i] = $(this).attr('value');
		});

		var dataGenUrl = formGen + "&dataInclude=" + dataInclude + "&dataExclude=" +dataExclude;


		$.ajax({
                    url: '/urlSite/otro',
                    type: 'POST',
                    data: dataGenUrl,
                    dataType: 'JSON',
                    success: function(data) { 

                          console.log(data)
                          alert("Guardado")
                          
                    }//fin success
        })//fin ajax

});


</script>
@stop

