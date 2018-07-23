<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TenderOrder extends Model
{
    protected $fillable = ['tender_id' , 'begin' , 'end' , 'order_description' , 'confirmed'];

    public function tender()
    {
        return $this->belongsTo(Tender::class);
    }
}
