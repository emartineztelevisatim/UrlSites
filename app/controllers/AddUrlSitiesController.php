<?php

class AddUrlSitiesController extends BaseController {

    public function addUrlSities() { 
        $urlSities = Complaint::all();
        return View::make('home')->with('urlSities', $urlSities);
    }



}

?>