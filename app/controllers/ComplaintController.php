<?php

class ComplaintController extends BaseController {

    public function search() { 

        
$urlSities = UrlSities::all();
return View::make('home')->with('urlSities', $urlSities);



    }

 




}

?>