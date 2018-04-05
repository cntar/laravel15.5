<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Culture extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    //this is the table belong to laravel database
       protected $table = 'cultures';
    //make the field of the table to be filled
       protected $fillable = ['name','description','size','catName','image'];

    //create public method bellow
      public function category(){
          //we going to use the inverse relationship of hasmany which is belongTo

           return $this->belongsTo(Category::class);
      }
}
