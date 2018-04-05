<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    //consider name of the table by using modifiers protected for data security
      protected $table = 'data';

      //name of the primary key

      public $primaryKey = 'id';

      //timestamps

      public $timestamps = 'true';

}
