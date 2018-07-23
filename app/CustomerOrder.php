<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerOrder extends Model
{
    protected $fillable = ['customer_id' , 'begin' , 'end' , 'package' , 'confirmed'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
