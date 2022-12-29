<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    

    public function list()
    {
       
        $data['nav'] = "Testimonial";
        $data['data'] = Testimonial::latest()->get();
        return view('backend.testimonials.list',$data);

    }

    public function Add(Request $request)
    {
     
        $data['nav'] = "Testimonial";

        if($request->isMethod('get')){
            return view('backend.testimonials.create',$data);
        }else{
          
            if($request->image)
          $image_path = $this->image_upload($request->image);
          else
          $image_path = "";

          $values = $request->all(); 
          $values['image']  = $image_path;
          if(isset($values['_token'])){
            unset($values['_token']);
          }     


            Testimonial::insert($values);
            return redirect()->route('testimonial_list')->with("success","Successfully Added");;
        }

    }

    public function Edit(Request $request,$id)
    {
  
        $data['nav'] = "Testimonial";
        $data['data'] = Testimonial::find(decrypt($id));

        if($request->isMethod('get')){
            return view('backend.testimonials.edit',$data);
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
          
       
            $data['data']->fill($values)->save();
            return redirect()->route('testimonial_list')->with("success","Successfully Updated");
        }

    }

    public function Delete(Request $request,$id)
    {
         $data['data'] = Testimonial::find(decrypt($id));
         if($data['data']){
            $data['data']->delete();
            return redirect()->route('testimonial_list')->with("success","Successfully Deleted");
         }else{
            return redirect()->route('testimonial_list')->with("error","Something went wrong");
         }

        
        

    }


    public function image_upload($image){
        $name = time().'.'.$image->getClientOriginalExtension(); //get the  file extention
      
 
        $destinationPath = public_path('/testimonial/'); //public path folder dir
        $sucess=$image->move($destinationPath, $name);
       
        //mve to destination you mentioned 
       if ($sucess) {
             return 'testimonial/'.$name;
         }
 
         return NULL;
 
     }

}
