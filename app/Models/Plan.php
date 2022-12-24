<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Helper;

class Plan extends Model
{
    use HasFactory;

    protected $table="plans";

    protected $fillable = [
        'user_id',
        'created_by',
        'create_for',
        'name',
        'no_company',
        'no_agency',
        'no_candidate',
        'no_post_job',
        'price',
        'plan_cycle',
        'status',
        
    ];

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
