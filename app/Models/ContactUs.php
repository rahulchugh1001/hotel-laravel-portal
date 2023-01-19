<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;

    protected $fillable = array('name',
    'email',
    'phone',
    'message'
    );

    protected $table = 'contact_us_lead';
}
