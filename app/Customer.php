<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    use Notifiable;

    protected $fillable = ['name' , 'phone_number' , 'email' , 'gender', 'city' , 'location_description' , 'subscriptions'];

    protected $hidden = [ 'password' , 'remember_token' ];

    public function orders()
    {
        return $this->hasMany(CustomerOrder::class);
    }

}
