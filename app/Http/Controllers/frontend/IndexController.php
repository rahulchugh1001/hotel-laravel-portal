<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;
use App\Models\Room;
use App\Models\RoomQuery;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Testimonial;

class IndexController extends Controller
{
    public function index(Request $request)
    {

        $data['room'] = Room::where('status',1)->orderBy('name','ASC')->latest()->limit(4)->get();
        $data['service'] = Service::where('status',1)->orderBy('name','ASC')->latest()->get();
        $data['slider'] = Slider::where('status',1)->latest()->get();
        $data['testimonial'] = Testimonial::where('status',1)->latest()->get();
        
        if($request->isMethod('get')){
        return view('frontend.index',$data);
        }else{
            $values = $request->all();

         if($values['_token']){
            unset($values['_token']);
         }
         $values['type'] = 2;

            RoomQuery::insert($values);
            $this->sendMailToAdmin($values);
           
            return redirect()->route('thankyou');
        }
        
    }


       public function sendMailToAdmin($value){
    
  $data = array('name'=>isset($value['name']) ? ucwords($value['name']) : 'Not Mentioned',
                'email'=>isset($value['email']) ? $value['email'] : 'Not Mentioned',
                'phone'=>isset($value['phone']) ? $value['phone'] : 'Not Mentioned',
                'room_name'=>isset($value['room_name']) ? ucwords($value['room_name']) : 'Not Mentioned',
                'check_in'=>isset($value['check_in']) ? $value['check_in'] : 'Not Mentioned',
                'check_out'=>isset($value['check_out']) ? $value['check_out'] : 'Not Mentioned',
                'guest'=>isset($value['guest']) ? $value['guest'] : 'Not Mentioned',
                'rooms'=>isset($value['rooms']) ? $value['rooms'] : 'Not Mentioned',
                'type'=>'Home Slider Lead',
            );
        Mail::send(['html'=>'admin_mail'], $data, function($message) {
         $message->to('spregency123@gmail.com', 'SP Residency')->subject
            ('One More Lead');
         $message->from('no-reply@spresidence.com','Admin');
      });


    }

    public function ThankYou()
    {
        return view('frontend.thankyou');
    }
}
