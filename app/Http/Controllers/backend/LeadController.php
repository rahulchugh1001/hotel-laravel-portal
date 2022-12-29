<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RoomQuery;

class LeadController extends Controller
{
    

public function RoomQuerylist(){

$data['data'] = RoomQuery::where('type',1)->with('RoomRelation')->latest()->get();
$data['nav'] = "Room Query Leads";

return view('backend.leads.room_query.list',$data);

}

public function RoomQueryView($id){

$data['data'] = RoomQuery::find(decrypt($id));
$data['nav'] = "Room Query Leads";
$data['data']->seen = 1;
$data['data']->save();
return view('backend.leads.room_query.view',$data);

}


public function HomeSliderQuerylist(){

$data['data'] = RoomQuery::where('type',2)->latest()->get();
$data['nav'] = "Home Slider Query Leads";

return view('backend.leads.home_slider_query.list',$data);

}

public function DeleteLead($id){

$data['data'] = RoomQuery::find(decrypt($id));
$data['data']->delete();

return redirect()->back()->with("success","Successfully Deleted");

}

public function HomeSliderQueryView($id){

$data['data'] = RoomQuery::find(decrypt($id));
$data['nav'] = "Home Slider Query Leads";
$data['data']->seen = 1;
$data['data']->save();
dd($data['data']);
return view('backend.leads.home_slider_query.view',$data);

}


}
