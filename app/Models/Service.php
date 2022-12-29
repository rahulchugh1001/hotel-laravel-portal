<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Helper;

class Service extends Model
{
    use HasFactory;
	
	
	protected $fillable = array('name',
								'icon',
								'short_description',
								'status'
								);

	protected $table = 'services';

	

public static function getServiceDetail($id)
        {
        
                        $user=Self::find($id);
                        if($user)
                        {
                            return ucwords($user->name); 
                        }else
                            
                            {
                            
                            return Null;
                            }
        
        }



}
