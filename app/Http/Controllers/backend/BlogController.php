<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function list()
    {
        $data['company_fields'] = [];
        $data['companiesData'] = [];
        $data['nav'] = "Blog";
        $data['data'] = Blog::latest()->get();
        $data['blog_category'] = BlogCategory::get();
        return view('backend.blog.list',$data);

    }


    public function Add(Request $request)
    {
        $data['company_fields'] = [];
        $data['companiesData'] = [];
        $data['nav'] = "Blog";
        $data['blog_category'] = BlogCategory::get();
        if($request->isMethod('get')){
            return view('backend.blog.create',$data);
        }else{
            // dd('hii');
          
        //     if($request->image)
        //   $image_path = $this->image_upload($request->image);
        //   else
        //   $image_path = "";

          $values = $request->all(); 
        //   $values['image']  = $image_path;
          if(isset($values['_token'])){
            unset($values['_token']);
          }      
            Blog::insert($values);
            return redirect()->route('blog_list')->with("success","Successfully Added");;
        }

    }

    public function Edit(Request $request,$id)
    {
        $data['company_fields'] = [];
        $data['companiesData'] = [];
        $data['nav'] = "Blog";
        $data['data'] = Blog::find(decrypt($id));
        $data['blog_category'] = BlogCategory::get();
        
        // dd($id);
        if($request->isMethod('get')){
            return view('backend.blog.edit',$data);
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
            return redirect()->route('blog_list')->with("success","Successfully Updated");
        }
    }

    public function Delete(Request $request,$id)
    {
         $data['data'] = Blog::find(decrypt($id));
         if($data['data']){
            $data['data']->delete();
            return redirect()->route('blog_list')->with("success","Successfully Deleted");
         }else{
            return redirect()->route('blog_list')->with("error","Something went wrong");
         }
    }
}
