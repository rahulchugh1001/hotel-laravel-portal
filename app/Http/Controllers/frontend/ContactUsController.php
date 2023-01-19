<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactUs;
use App\Models\WebsiteDetails;
use Mail;

class ContactUsController extends Controller
{
    public function contactUs()
    {
        $data['about'] = WebsiteDetails::first();
        return view('frontend.contactUs',$data);
    }

    public function formSubmit(Request $request)
    {
        $data['name'] = $request['name'];
        $data['email'] = $request['email'];
        $data['phone'] = $request['phone'];
        $data['message'] = $request['message'];

        $save = ContactUs::insert($data);
        $this->sendMailToAdmin($data);
        return view('frontend.thankyou');
    }

    public function sendMailToAdmin($value){

        $data = array('name'=>isset($value['name']) ? $value['name'] : 'Not Mentioned',
                      'email'=>isset($value['email']) ? $value['email'] : 'Not Mentioned',
                      'phone'=>isset($value['phone']) ? $value['phone'] : 'Not Mentioned',
                      'messageData'=>isset($value['message']) ? $value['message'] : 'Not Mentioned',
                  );
        // dd($data['message']);
           Mail::send(['html'=>'admin_contact_mail'], $data, function($message) {
         $message->to('spregency123@gmail.com', 'SP Residency')->subject
            ('One More Lead');
         $message->from('no-reply@spresidence.com','Admin');
      });
      
      
          }
}
