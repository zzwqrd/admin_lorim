<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
    protected $table = 'order_items';
    protected $fillable = ['order_id','sub_sections_id','providers_id','count','price'];

    public function itemDetails () {
        return $this->belongsTo(SubSections::class ,'sub_sections_id','id');
    }
}
