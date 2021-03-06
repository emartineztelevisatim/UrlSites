<?php

class AddUrlSitiesController extends BaseController {
    
        public function action_index() { 
//        $complaints = Complaint::all();
        return View::make('home');
    }
    
    

    public function addUrlEditor() { 
        $urlSities = UrlSities::all();
        $urlInclude = urlInclude::all();
        $urlExclude = urlExclude::all();
        
        return View::make('home',array('as' => 'home', 'urlSities'=>$urlSities,'urlInclude'=>$urlInclude,'urlExclude'=>$urlExclude)); 
    }
    
    
    public function addUrlSities() { 
        $urlSities = UrlSities::all();
        $urlInclude = urlInclude::all();
        $urlExclude = urlExclude::all();
        
        return View::make('urlSites.urlSites',array('urlSities'=>$urlSities,'urlInclude'=>$urlInclude,'urlExclude'=>$urlExclude)); 
    }
    
/* ---------------------- EditorUrlSities ---------------------------------- */         
public function editorUrlSities(){
    if (Request::ajax())
        {
            $id_url = Input::get("id_url");
            
            $editorUrlSities = DB::table('url_sitios')
                                    ->select('id_url','nameUrl','content_type','period','numElements','created_by','modified_by')->get(); 

//            $id_url = $editorUrlSities[0]-> id_url;
            $nameUrl  = $editorUrlSities[0]-> nameUrl;
            $content_type  = $editorUrlSities[0]-> content_type;
            $period    = $editorUrlSities[0]-> period; 
            $numElements =  $editorUrlSities[0]-> numElements;
            $created_by = $editorUrlSities[0]-> created_by;
            $modified_by = $editorUrlSities[0]-> modified_by;
            
            $editorUrlInclude = DB::table('urlInclude')
                                    ->select('id_url','urlInclude')
                                    ->where('id_url','=',$id_url)->get();
            
            $urlInclude = $editorUrlInclude[0] -> urlInclude; 

            //$urlInclude = $editorUrlInclude-> urlInclude; 
                        
            $editorUrlExclude = DB::table('urlExclude')
                                    ->select('id_url','urlExclude')
                                    ->where('id_url','=',$id_url)->get();
            $urlExclude = $editorUrlExclude[0]-> urlExclude; 
            //return Redirect::back();
            //Auth::editorUrlSities();
            //return Redirect::to('homeUpdate');
            //return Redirect::to('homeUpdate')->with(array('id_url'=>$id_url,'nameUrl'=>$nameUrl,'content_type'=>$content_type,'period'=>$period,'numElements'=>$numElements,'created_by'=>$created_by,'modified_by'=>$modified_by,'urlInclude'=>$urlInclude,'urlExclude'=>$urlExclude)); 
            //return Redirect::route('home');
            return Redirect::to('/formAddUrlUpdate')->with(array('nameUrl'=>$nameUrl)); 
            //
            ////return Redirect::intended('/');  
            //return Redirect::back();
            //return array('id_url'=>$id_url,'nameUrl'=>$nameUrl,'content_type'=>$content_type,'period'=>$period,'numElements'=>$numElements,'created_by'=>$created_by,'modified_by'=>$modified_by,'urlInclude'=>$urlInclude,'urlExclude'=>$urlExclude);
            //return View::make('home')->with(array('id_url'=>$id_url,'nameUrl'=>$nameUrl,'content_type'=>$content_type,'period'=>$period,'numElements'=>$numElements,'created_by'=>$created_by,'modified_by'=>$modified_by,'urlInclude'=>$urlInclude,'urlExclude'=>$urlExclude));
            //return View::make('urlSites.urlSites')->with(array('id_url'=>$id_url,'nameUrl'=>$nameUrl,'content_type'=>$content_type,'period'=>$period,'numElements'=>$numElements,'created_by'=>$created_by,'modified_by'=>$modified_by,'urlInclude'=>$urlInclude,'urlExclude'=>$urlExclude));
            //Route::get('/urlSites', array('id_url'=>$id_url,'nameUrl'=>$nameUrl,'content_type'=>$content_type,'period'=>$period,'numElements'=>$numElements,'created_by'=>$created_by,'modified_by'=>$modified_by,'urlInclude'=>$urlInclude,'urlExclude'=>$urlExclude)); 
            //return Redirect::route('urlSites.homeUpdate');
            //URL::to('/urlSites');
            }else {
    // validation has failed, display error messages    
    }
        
        
}    

    
    public function addNewUrl() { 
    if (Request::ajax())
        {
//          $inputUrls = Input::get('inputUrls');
//          $inputSities = Input::get('inputSities');
//          $checkbox1 = Input::get('checkbox1');
//          $checkbox2 = Input::get('checkbox2');
//          $checkbox3 = Input::get('checkbox3');
//          $inputPeriod = Input::get('inputPeriod');
            
            $inputUrls = Input::get('inputUrls');
            $contenido = Input::get('contenido');
            
            $inputContenido = '';
            foreach ($contenido as $value){
                $inputContenido += $value;
                
            }
            
//            $period = Input::get('period');
//            
            $sitesInclude = Input::get('sitesInclude');
            $sitesIncludeList = explode( ',', $sitesInclude );
            $inputSitiesInclude ='';
            foreach ($sitesIncludeList as $value){
                $inputSitiesInclude += $value;
            }
//            
            $sitesExclude = Input::get('sitesExclude');
            $sitesExcludeList = explode(',',$sitesExclude);
            $inputSitiesExclude = '';
            foreach ($sitesExcludeList as $value){
                $inputSitiesExclude += $value;
            }

            $addNewUrl = DB::table('url_sitios')
                       ->insert(array('url'=>$inputUrls,'sities'=>$inputContenido,''));
        
            return $cadena;
            

            //inputUrls=http%3A%2F%2Fnoticieros.televisa.com%2F&contenido%5B%5D=Notas&contenido%5B%5D=Videos&period=Mes&sitesInclude%5B%5D=futbol&sitesInclude%5B%5D=televisa&sitesExclude%5B%5D=futbol%2Fliga_mexicana
            
//            if($checkbox1 == 'true'){
//               $checkbox1 = 'I'; 
//            }else{$checkbox1 = '';}
//            if($checkbox2 == 'true'){
//               $checkbox2 = 'N';
//            }else{$checkbox2 = '';}
//            if($checkbox3 == 'true'){
//               $checkbox3 = 'V';
//            }else{$checkbox3 = '';}  
            
//            $checkbox =  $checkbox1.' '.$checkbox2.' '.$checkbox3;
            
//            $selectUrl = DB::table('url_sitios')
//                                    ->select('url')
//                                    ->where('url', '=',$inputUrls)->get();
            //Get vars $title , $startTime , $duration and $updated_at to insert in table FeedsProgramBackup
            //$searchUrl = $selectUrl[0]-> url;
            
//            if(isset($selectUrl) && $selectUrl == NULL ){
//                $type_url = '1';
//            }  else {
//                $type_url = '0';
//            }

            

        }
    }

//    public function destroy($complaint_id) {
//
//        $complaint = Complaint::find($complaint_id);
//        $complaint->complaint_active = '0';
//        $complaint->save();
//    }

//    public function show($complaint_id) {
//
//        $complaints = Complaint::find($complaint_id);
//        return View::make('show')
//                        ->with('complaints', $complaints);
//    }

//    public function edit($complaint_id) {
//
//        $complaints = Complaint::find($complaint_id);
//        return View::make('edit')->with('complaints', $complaints);
//    }


//public function update($complaint_id)
//    {
//                                
//        $rules = array(
//            'notificationType' => 'required',
//            'Type' => 'required',
//            'SubType' => 'required',
//            'emailAddress' => 'required|email',
//            'timestamp' => 'required',
//            'arrivalDate' => 'required',
//            'complaint_active' => 'required',
//        );
//
//
//
//        $messages = array(
//            'required' => 'El campo es obligatorio.',
//            'min' => 'El campo :attribute no puede tener menos de :min carácteres.',
//            'email' => 'El campo :attribute debe ser un email válido.',
//            'max' => 'El campo :attribute no puede tener más de :min carácteres.',
//            'unique' => 'El email ingresado ya existe en la base de datos'
//        );
//
//        $validation = Validator::make(Input::all(), $rules, $messages);
//        if ($validation->fails()) {
//           return Redirect::to('index/')->withErrors($validation)->withInput();
//          
//    
//        } else {
//            $complaint = Complaint::find($complaint_id);
//            $complaint->notificationType = Input::get('notificationType');
//            $complaint->Type = Input::get('Type');
//            $complaint->SubType = Input::get('SubType');
//            $complaint->emailAddress = Input::get('emailAddress');
//            $complaint->timestamp = Input::get('timestamp');
//            $complaint->arrivalDate = Input::get('arrivalDate');
//            $complaint->complaint_active = Input::get('complaint_active');
//            $complaint->Save();
//        } 
//    }

//    public function store() {
//        date_default_timezone_set("Mexico/General");
//        $dates= date("Y-m-d H:i:s");
//
//        $unixtime = time();
//         $unixtime;
//        $rules = array(
//            'notificationType' => 'required',
//            'Type' => 'required',
//            'SubType' => 'required',
//            'emailAddress' => 'required|email',
//            'complaint_active' => 'required',
//        );
//
//        $messages = array(
//            'required' => 'El campo es obligatorio.',
//            'min' => 'El campo :attribute no puede tener menos de :min carácteres.',
//            'email' => 'El campo :attribute debe ser un email válido.',
//            'max' => 'El campo :attribute no puede tener más de :min carácteres.',
//            'unique' => 'El email ingresado ya existe en la base de datos'
//        );
//
//        $validation = Validator::make(Input::all(), $rules, $messages);
//
//        if ($validation->fails()) {
//            return Redirect::to('home')->withErrors($validation)->withInput();
//        } else {
//
//            $complaint = new Complaint();
//            $complaint->notificationType = Input::get('notificationType');
//            $complaint->Type = Input::get('Type');
//            $complaint->SubType = Input::get('SubType');
//            $complaint->emailAddress = Input::get('emailAddress');
//            $complaint->timestamp = $dates;
//            $complaint->arrivalDate = $unixtime;
//            $complaint->complaint_active = Input::get('complaint_active');
//            $complaint->Save();
//            $complaints = Complaint::all();
//            return View::make('home')->with('complaints', $complaints);
//        }
//    }

}

?>