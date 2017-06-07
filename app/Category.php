<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=['name'];
    //
    public function products(){

    	//the following two lines are the same,
    	//the difference is that the second one click the Proudct and jump into Product file
    	//return $this->hasMany(App\Product);
    	return $this->hasMany(Product::class);
    }
}
