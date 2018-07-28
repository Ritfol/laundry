<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Express extends Model
{
    protected $fillable = ['name' , 'email' , 'phone_number' , 'subject' , 'location' , 'location_description'];
}
