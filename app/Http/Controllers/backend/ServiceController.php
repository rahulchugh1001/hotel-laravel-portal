<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    

    public function list()
    {
      
        $data['nav'] = "Service";
        $data['data'] = Service::latest()->paginate(10);
        return view('backend.service.list',$data);

    }

    public function Add(Request $request)
    {
        $data['company_fields'] = [];
        $data['companiesData'] = [];
        $data['nav'] = "Service";

        if($request->isMethod('get')){
            return view('backend.service.create',$data);
        }else{
          

          $values = $request->all(); 
          $values['image']  = $image_path;
          if(isset($values['_token'])){
            unset($values['_token']);
          }      

          dd($request->all());

          
            Slider::insert($values);
            return redirect()->route('slider_list')->with("success","Successfully Added");;
        }

    }

    public function Edit(Request $request,$id)
    {
        $data['company_fields'] = [];
        $data['companiesData'] = [];
        $data['nav'] = "Slider";
        $data['data'] = Slider::find(decrypt($id));

        if($request->isMethod('get')){
            return view('backend.slider.edit',$data);
        }else{
          
            if($request->image){
                $image_path = $this->image_upload($request->image);
            }else{
          $image_path = $data['data']->image;
            }
          $values = $request->all(); 
          $values['image']  = $image_path;
          if(isset($values['_token'])){
            unset($values['_token']);
          }    
          
        //   dd($values);
            // Slider::insert($values);
            $data['data']->fill($values)->save();
            return redirect()->route('slider_list')->with("success","Successfully Updated");
        }

    }

    public function Delete(Request $request,$id)
    {
         $data['data'] = Slider::find(decrypt($id));
         if($data['data']){
            $data['data']->delete();
            return redirect()->route('slider_list')->with("success","Successfully Deleted");
         }else{
            return redirect()->route('slider_list')->with("error","Something went wrong");
         }

        
        

    }


    public function image_upload($image){
        $name = time().'.'.$image->getClientOriginalExtension(); //get the  file extention
      
 
        $destinationPath = public_path('/slider/'); //public path folder dir
        $sucess=$image->move($destinationPath, $name);
       
        //mve to destination you mentioned 
       if ($sucess) {
             return 'slider/'.$name;
         }
 
         return NULL;
 
     }

}
