<?php

class AddUrlSitiesController extends BaseController {

    public function addUrlSities() { 
        $urlSities = UrlSities::all();
        return View::make('home')->with('urlSities', $urlSities);
    }
    
    public function addNewUrl() { 
    if (Request::ajax())
        {
            $inputUrls = Input::get('inputUrls');
            $inputSities = Input::get('inputSities');
            $checkbox1 = Input::get('checkbox1');
            $checkbox2 = Input::get('checkbox2');
            $checkbox3 = Input::get('checkbox3');
            $inputPeriod = Input::get('inputPeriod');
            
            if($checkbox1 == 'true'){
               $checkbox1 = 'I'; 
            }else{$checkbox1 = '';}
            if($checkbox2 == 'true'){
               $checkbox2 = 'N';
            }else{$checkbox2 = '';}
            if($checkbox3 == 'true'){
               $checkbox3 = 'V';
            }else{$checkbox3 = '';}  
            
            $checkbox =  $checkbox1.' '.$checkbox2.' '.$checkbox3;
            
            $selectUrl = DB::table('url_sitios')
                                    ->select('url')
                                    ->where('url', '=',$inputUrls)->get();
            //Get vars $title , $startTime , $duration and $updated_at to insert in table FeedsProgramBackup
            //$searchUrl = $selectUrl[0]-> url;
            
            if(isset($selectUrl) && $selectUrl == NULL ){
                $type_url = '1';
            }  else {
                $type_url = '0';
            }

            
            $addNewUrl = DB::table('url_sitios')
                      ->insert(array('url'=>$inputUrls,'type_url'=>$type_url,'sities'=>$inputSities,'type_info'=>$checkbox, 'startDate'=>date("Y-m-d", strtotime($inputPeriod))));
        
              return $selectUrl;
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