<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    
    
    protected $fillable = array('name',
                                'image',
                                'background_image',
                                'slug',
                                'size',
                                'capacity',
                                'bed',
                                'service',
                                'description',
                                'status',
                                'price'
                                );

    protected $table = 'rooms';

    


}