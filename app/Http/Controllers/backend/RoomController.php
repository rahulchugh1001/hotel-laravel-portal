<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Room;

class RoomController extends Controller
{
    

    public function list()
    {
       
        $data['nav'] = "Room";
        $data['data'] = Room::latest()->get();
        return view('backend.room.list',$data);

    }

    public function Add(Request $request)
    {
    
        $data['nav'] = "Room";
        $data['service'] = Service::where('status',1)->orderBy("name",'ASC')->get();

        if($request->isMethod('get')){
            return view('backend.room.create',$data);
        }else{
             // dd(json_encode($request->service));
            // dd($request->all());
          
              if($request->image)
              $image_path = $this->image_upload($request->image);
              else
              $image_path = "";

          $values = $request->all(); 
          $values['image']  = $image_path;
          $values['status']  = $request->status ? $request->status : 0;
          $values['service']  = json_encode($request->service);
          if(isset($values['_token'])){
            unset($values['_token']);
          }     
          // dd($values); 
            Room::insert($values);
            return redirect()->route('room_list')->with("success","Successfully Added");;
        }

    }

    public function Edit(Request $request,$id)
    {
 
        $data['nav'] = "Room";
        $data['data'] = Room::find(decrypt($id));
        $data['service'] = Service::where('status',1)->orderBy("name",'ASC')->get();

        if($request->isMethod('get')){
            return view('backend.room.edit',$data);
        }else{
          
            if($request->image){
                $image_path = $this->image_upload($request->image);
            }else{
          $image_path = $data['data']->image;
            }
          $values = $request->all(); 
          $values['image']  = $image_path;
          $values['status']  = $request->status ? $request->status : 0;
          $values['service']  = json_encode($request->service);
          if(isset($values['_token'])){
            unset($values['_token']);
          }    
          
          // dd($values);
            $data['data']->fill($values)->save();
            return redirect()->route('room_list')->with("success","Successfully Updated");
        }

    }

    public function Delete(Request $request,$id)
    {
         $data['data'] = Room::find(decrypt($id));
         if($data['data']){
            $data['data']->delete();
            return redirect()->route('room_list')->with("success","Successfully Deleted");
         }else{
            return redirect()->route('room_list')->with("error","Something went wrong");
         }

        
        

    }


    public function image_upload($image){
        $name = time().'.'.$image->getClientOriginalExtension(); //get the  file extention
      
 
        $destinationPath = public_path('/rooms/'); //public path folder dir
        $sucess=$image->move($destinationPath, $name);
       
        //mve to destination you mentioned 
       if ($sucess) {
             return 'rooms/'.$name;
         }
 
         return NULL;
 
     }

}
