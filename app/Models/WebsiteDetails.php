<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteDetails extends Model
{
    use HasFactory;

    protected $table="website_details";

    protected $fillable = [
        'name',
        'email',
        'phone',
        'description',
        'address',
        'insta_link',
        'fb_link',
        'channel_link',
        'updated_at'
    ];

}
