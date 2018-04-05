<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
//by using billable trai to my model its allow me to perform common billing tasks,such as creating subscription,applying cuopons and updating credit card informations
use Laravel\Cashier\Billable;

        class User extends Authenticatable
      {
         use Notifiable;
         use Billable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

     public function isAdmin(){
        //"Model" which is used to interact with that table. Models allow you to query for data in your tables, as well as insert new records into the table.
           return $this->admin;
           
     }
       //add another function to consider relationship between user and address table
    //user can have more that one addresses....
       public function address(){
    
         return $this->hasMany(Address::class);
       }

}
