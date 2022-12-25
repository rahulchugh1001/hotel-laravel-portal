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

	


}
