<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutUS;

class AboutUsController extends Controller
{
    public function about_create()
    {
        $data['nav'] = "About Us";
        if(AboutUs::first()){
            $data['about_check'] = 1;
            $data['about_us'] = AboutUs::first();
        }else{
            $data['about_check'] = 0;
        }
        return view('backend.about_us.create',$data);
    }

    public function about_add(Request $request)
    {
        $values = $request->all();
        // dd($values);

        if(isset($values['_token'])){
            unset($values['_token']);
          } 
        if(AboutUs::first())
        {
            $data['data'] = AboutUs::first();

          $data['data']->fill($values)->save();
        }
        else{
            AboutUs::insert($values);
        
        }
          return redirect()->route('about_us_list')->with("success","Successfully Added");;

    }

}
