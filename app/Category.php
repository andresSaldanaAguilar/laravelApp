<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table="categories";
    protected $fillable=['name'];

    //relacion 1..n con los articulos  (n)
    public function articles(){
        return $this->hasMany('App\Article');
    }
}
