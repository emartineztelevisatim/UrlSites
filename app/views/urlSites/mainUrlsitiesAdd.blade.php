<!--
|-------------------------------------------------------------------------------
| Main Url Sites
|-------------------------------------------------------------------------------
-->
<div id="editorfeeds" class="col-md-3">
    <section class="widget">
        <header><h4><i class="fa fa-pencil"></i> Url Sities</h4></header>
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
                                                <!--  -----------------   Name Site   --------------  -->
                                                    <legend class="section">Name Site</legend>
                                                        <div class="input-group col-sm-12">
                                                            <input id='inputUrls' class="form-control" placeholder="Urls" name='inputUrls'>
                                                        </div>
                                                <!--  -----------------   Content Type   --------------  -->    
                                                    <legend class="section">Content Type</legend>
                                                        <div class="control-group checkboxAlign">
                                                                <label class="checkbox">
                                                                    <input id="checkbox1" type="checkbox" name="contenido[]" class="iCheck contentCheck" value='Imagenes'> Imagenes
                                                                </label>
                                                                <label class="checkbox">
                                                                    <input id="checkbox2" type="checkbox" name="contenido[]" class="iCheck contentCheck" value='Notas'> Notas
                                                                </label>
                                                                <label class="checkbox">
                                                                    <input id="checkbox3" type="checkbox" name="contenido[]" class="iCheck contentCheck" value='Videos'> Videos
                                                                </label>
                                                        </div>
                                                <!--  -----------------   Period   --------------  -->
                                                    <legend class="section">Period</legend>                                                 
                                                        <div class=" col-sm-12">
                                                            <select name="period"  class='chzn-select select-block-level' id='period'>
                                                                <option value="">............</option>
                                                                <option value='Hora'>Hora</option>
                                                                <option value='Dia'>Dia</option>
                                                                <option value='Semana'>Semana</option>
                                                                <option value='Mes'>Mes</option>
                                                            </select>   
                                                        </div>
                                                <!--  -----------------   Elements   --------------  -->
                                                    <legend class="section">Elements</legend>                                                 
                                                       <div class=" col-sm-12">
                                                            <select name="numElement" class='chzn-select select-block-level' id='numElement'>
                                                                @for ($i=0; $i <=20 ; $i++)
                                                                <option value='{{$i}}'>{{$i}}</option>
                                                                @endfor
                                                            </select>     
                                                       </div>
                                                <!--  -----------------   Elements   --------------  -->
                                                    <legend class="section">Incluir</legend>                                                
                                                        <div class="input-group col-sm-12">
                                                            <input id='inputSitiesInclude'  class="form-control" placeholder="Sites">
                                                            <span class="input-group-btn">
                                                                <button type='button' class="btn btn-primary" id='addUrlSiteInclude'>
                                                                    Add
                                                                </button>
                                                            </span>
                                                        </div>
                                                <!--  -----------------   Excluir   --------------  -->
                                                    <div id='formInclude'></div>
                                                    <legend class="section">Excluir</legend>
                                                        <div class="input-group col-sm-12">
                                                            <input id='inputSitiesExclude'  class="form-control" placeholder="Sites">
                                                            <span class="input-group-btn">
                                                                <button type='button' class="btn btn-primary" id='addUrlSiteExclude'>
                                                                    Add
                                                                </button>
                                                            </span>
                                                        </div>
                                                <!--  -----------------   Excluir   --------------  -->
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
                    <div class="col-xs-5 col-sm-offset-2">
                        <button id='saveUrl' class="btn btn-primary btn-sm" type="button"  data-placement="top" >
                            Save
                        </button>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
</div>   
