<?php

class searchController extends BaseController {

    public function search() {
        $urlSities = UrlSities::all();
        return View::make('search')->with('urlSities', $urlSities);
    }

    public function searchurl() {

        $urlsities = new UrlSities();
        $url = $urlsities->url = Input::get('url');
        if($url == null){
            
            echo 'Sin Resultados';
            
        }
        
        
         $urlSities = UrlSities::where('url', '=', $url)->get();
        return View::make('search')->with('urlSities', $urlSities);  
      
       
    }

}

?>