<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    use Notifiable;

//    protected $fillable = ['name' , 'phone_number' , 'email' , 'gender', 'city' , 'location_description' , 'subscriptions'];

    public $hidden = ['gender' , 'password' , 'email' , 'city'];

//    public function getNameAttribute($value){
//
//        return 'It worked';
//    }

//    public function getNameAddressAttribute()
//    {
//        return $this->name .' '.'lives in'.' '.$this->city;
//    }

    public function orders()
    {
        return $this->hasMany(CustomerOrder::class);
    }

}
