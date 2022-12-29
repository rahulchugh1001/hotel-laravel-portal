<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RoomQuery;

class LeadController extends Controller
{
    

public function RoomQuerylist(){

$data['data'] = RoomQuery::with('RoomRelation')->latest()->get();
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


}
