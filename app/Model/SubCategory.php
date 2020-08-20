<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $table='sub_categories';
    protected $fillable = [
        'category_id', 'name'
    ];
    //
    public function category()
    {
        return $this->belongsTo('App\Model\Category','category_id','id');
    }
}
