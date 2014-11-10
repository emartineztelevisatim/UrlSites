<?php

class urlSiteController extends \BaseController {


	public function getIndex()
	{
		return View::make('urlSites.urlSites');
	}

	public function postOtro(){

		if(Request::ajax()){

			$nameUrls = Input::get('inputUrls');
			$contenido = Input::get('contenido');
			$period = Input::get('period');
			$numElement = Input::get('numElement');
			$urlInclude = Input::get('dataInclude');
			$urlExclude = Input::get('dataExclude');

						$urlSites = new urlSities;
						$urlSites->nameUrl = $nameUrls;
						$urlSites->content_type = implode(",",$contenido);
						$urlSites->period = $period;
						$urlSites->numElements = $numElement;
						$urlSites->save();

						
						$urlPartInclude = explode(",",$urlInclude);
						$urlPartExclude = explode(",",$urlExclude);


							for ($i=0; $i < count($urlPartInclude) ; $i++) { 
								
								$urlInclude = new urlInclude;
								$urlInclude->id_url = $urlSites->id;
								$urlInclude->urlInclude = $urlPartInclude[$i];
								$urlInclude->save();
							}

							for ($i=0; $i < count($urlPartInclude) ; $i++) { 
								
								$urlInclude = new urlExclude;
								$urlInclude->id_url = $urlSites->id;
								$urlInclude->urlExclude = $urlPartExclude[$i];
								$urlInclude->save();
							}
			
			return Response::json("exito");
		}
	}

        
        public function postUpdate(){

            if(Request::ajax()){
                    $id_url = 1;
                    $nameUrls = Input::get('inputUrls');
                    $contenido = Input::get('contenido');
                    $period = Input::get('period');
                    $numElement = Input::get('numElement');
//                    $urlInclude = Input::get('dataInclude');
//                    $urlExclude = Input::get('dataExclude');

                    $urlSites = UrlSities::find($id_url);
                    $urlSites->nameUrl = $nameUrls;
                    $urlSites->content_type = implode(",",$contenido);
                    $urlSites->period = $period;
                    $urlSites->numElements = $numElement;
                    $urlSites->save();

//                    $urlPartInclude = explode(",",$urlInclude);
//                    $urlPartExclude = explode(",",$urlExclude);
//
//                    for ($i=0; $i < count($urlPartInclude) ; $i++) { 
//
//                            $urlInclude = urlInclude::find($id_url);
//                            $urlInclude->id_url = $urlSites->id;
//                            $urlInclude->urlInclude = $urlPartInclude[$i];
//                            $urlInclude->save();
//                    }
//
//                    for ($i=0; $i < count($urlPartInclude) ; $i++) { 
//
//                            $urlInclude = urlExclude::find($id_url);
//                            $urlInclude->id_url = $urlSites->id;
//                            $urlInclude->urlExclude = $urlPartExclude[$i];
//                            $urlInclude->save();
//                    }

                    return Response::json("exito");
            }
        }

	


}
