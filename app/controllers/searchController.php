<?php

class searchController extends BaseController {

    public function search() {
        $urlSities = UrlSities::all();
        return View::make('search')->with('urlSities', $urlSities);
    }
    
    

    
    
    
}

?>