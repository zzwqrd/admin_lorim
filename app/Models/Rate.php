<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    protected $table = 'rates';

    protected $fillable = ['provider_id','user_id','rate','review','cons_review'];

    protected $hidden = ['created_at', 'updated_at'];

    public function user() {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function provider() {
        return $this->belongsTo(Providers::class,'provider_id','id');
    }
}
