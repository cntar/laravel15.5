<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //to specify the fields that should be filled
      protected $table = 'categories';
      protected $fillable = ['catName'];
    //one categories has many products
       public function cultures(){
           //this is how categories related with cultures(products) yo can have many products of the same category
           //its tries to defining one to many relationship
           //return $this->hasMany('App\Culture');

           return $this->hasMany(Culture::class);

        //hence we can use category model to access cultures(product)
       }
}

