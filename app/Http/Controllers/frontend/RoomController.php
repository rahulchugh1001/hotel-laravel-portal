<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\RoomQuery;
use Mail;
class RoomController extends Controller
{
    
    public function page(){

        $data['room'] = Room::where('status',1)->orderBy('name','ASC')->get();

        return view('frontend.rooms',$data);
    }

    public function sendMailToAdmin($value){
    
  $data = array('name'=>$value['name'] ? ucwords($value['name']) : 'Not Mentioned',
                'email'=>$value['email'] ? $value['email'] : 'Not Mentioned',
                'phone'=>$value['phone'] ? $value['phone'] : 'Not Mentioned',
                'room_name'=>$value['room_name'] ? ucwords($value['room_name']) : 'Not Mentioned',
                'check_in'=>$value['check_in'] ? $value['check_in'] : 'Not Mentioned',
                'check_out'=>$value['check_out'] ? $value['check_out'] : 'Not Mentioned',
                'guest'=>$value['guest'] ? $value['guest'] : 'Not Mentioned',
                'rooms'=>$value['rooms'] ? $value['rooms'] : 'Not Mentioned'
            );
        Mail::send(['html'=>'admin_mail'], $data, function($message) {
         $message->to('chughrahul1999@gmail.com', 'SP Residency')->subject
            ('One More Lead');
         $message->from('no-reply@spresidence.com','Admin');
      });


    }



    public function sendMailToUser($value){
    
  $data = array('name'=>$value['name'] ? ucwords($value['name']) : 'Not Mentioned',
                'email'=>$value['email'] ? $value['email'] : 'Not Mentioned',
                
            );
        Mail::send(['html'=>'user_mail'], $data, function($message) use($value) {
         $message->to($value['email'], $value['name'])->subject
            ('One More Lead');
         $message->from('no-reply@spresidence.com','SP Residence');
      });


    }

    public function Detail(Request $request,$slug){


       
        $data['room'] = Room::where('status',1)->where('slug',$slug)->first();
        // dd($data['room']);

        if($request->isMethod('get')){
        return view('frontend.room-detail',$data);  
        }else{
         
         $values = $request->all();

         if($values['_token']){
            unset($values['_token']);
         }
         $values['room_id'] = $data['room']->id;

            RoomQuery::insert($values);
            $values['room_name'] = $data['room']->name;
            $this->sendMailToAdmin($values);
            $this->sendMailToUser($values);
            return redirect()->route('thankyou');
        }

    }

}
