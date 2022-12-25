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
          $values['status'] = $request->status ? $request->status : 0;
          if(isset($values['_token'])){
            unset($values['_token']);
          }      

            Service::insert($values);
            return redirect()->route('service_list')->with("success","Successfully Added");;
        }

    }

    public function Edit(Request $request,$id)
    {
     
        $data['nav'] = "Service";
        $data['data'] = Service::find(decrypt($id));

        if($request->isMethod('get')){
            return view('backend.service.edit',$data);
        }else{
          
         
          $values = $request->all(); 
          $values['status'] = $request->status ? $request->status : 0;

          if(isset($values['_token'])){
            unset($values['_token']);
          }    
          
          // dd($values);
            $data['data']->fill($values)->save();
            return redirect()->route('service_list')->with("success","Successfully Updated");
        }

    }

    public function Delete(Request $request,$id)
    {
         $data['data'] = Service::find(decrypt($id));
         if($data['data']){
            $data['data']->delete();
            return redirect()->route('service_list')->with("success","Successfully Deleted");
         }else{
            return redirect()->route('service_list')->with("error","Something went wrong");
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
