<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutUS;
use App\Models\Service;

class AboutUsController extends Controller
{
    
public function page(){
    $data['about'] = AboutUs::first();
    $data['service'] = Service::limit(5)->where('status',1)->get();
// dd($data['service']);
    return view('frontend.about-us',$data);
}

}
