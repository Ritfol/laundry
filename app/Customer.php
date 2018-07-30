<?php

namespace App;

use App\Notifications\CustomerResetPasswordNotification;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\CanResetPassword;

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

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new CustomerResetPasswordNotification($token));
    }

    public function isCustomer($user)
    {
        if ( $user instanceof Customer)
            return true;
        else
            return false;
    }
}
