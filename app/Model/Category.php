<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table='categories';
    protected $fillable = [
        'categories', 'slug'
    ];
    public function subcategory(){
    	return $this->hasOne('App\SubCategory','category_id','id');
    }
}
