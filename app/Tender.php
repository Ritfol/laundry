<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Tender extends Authenticatable
{
    use Notifiable;

    protected $fillable = ['name' , 'phone_number' , 'email' , 'service', 'city' , 'location_description' , 'subscriptions'];

    protected $hidden = [ 'password' , 'remember_token' ];

    public function orders()
    {
        return $this->hasMany(TenderOrder::class);
    }

}
