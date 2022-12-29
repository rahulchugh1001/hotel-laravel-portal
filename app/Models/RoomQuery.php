<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomQuery extends Model
{
    use HasFactory;
    
    
    protected $fillable = array('name',
                                'room_id',
                                'email',
                                'check_in',
                                'check_out',
                                'guest',
                                'rooms',
                                'phone',
                                'seen'
                                );

    protected $table = 'room_queries';

    

  public function RoomRelation(){

return $this->hasOne('App\Models\Room','id','room_id');

  }


}