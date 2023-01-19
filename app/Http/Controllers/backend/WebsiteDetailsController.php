<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WebsiteDetails;


class WebsiteDetailsController extends Controller
{
    public function website_details_create()
    {
        $data['nav'] = "Website Details";
        if(WebsiteDetails::first()){
            $data['about_check'] = 1;
            $data['about'] = WebsiteDetails::first();
        }else{
            $data['about_check'] = 0;
        }
        // dd($data['about']);
        return view('backend.website_details.create',$data);
    }

    public function website_details_add(Request $request)
    {
        $values = $request->all();
        // dd($values);

        if(isset($values['_token'])){
            unset($values['_token']);
          } 
        if(WebsiteDetails::first())
        {
            $data['data'] = WebsiteDetails::first();

          $data['data']->fill($values)->save();
        }
        else{
            WebsiteDetails::insert($values);
        
        }
        return redirect()->route('website_details_list')->with("success","Successfully Added");;

    }
}
