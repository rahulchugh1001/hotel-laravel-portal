<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Helper;

class Blog extends Model
{
    use HasFactory;
	
	protected $table="blog";

    protected $fillable = [
        'title',
        'description',
        'category_id',
        'slug',
        'thumbnail_image',
        'banner_image',
        'status',
        'publish_by'
    ];


    public static function getName($id)
    {
    
    $blog=Self::find($id);
    if($blog)
    {
        return $blog->title;
    }else
        
        {
        
        return false;
        }
    
    }


    protected function getModelFiled(){

       return [];   
    }

    protected function hideFiled(){
        return [];
        
    }

    public function getFillable(){
        return $this->fillable;
    }

    public function getFields()
    {
        $models =$this->getModelFiled();
        $HelperFillable=Helper::getFillable($models);
        $fillableField =array_unique(array_merge($this->fillable,$HelperFillable));
        $hideFiled= $this->hideFiled();
        $fillableField = array_diff($fillableField, $hideFiled);

        return $fillableField;
    }

}
