<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubSections extends Model
{
    protected $table = 'sub_sections';
    protected $fillable = [
        'title_ar',
        'title_en',
        'price',
        'section_id',
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
        'pivot',
    ];

    public function section()
    {
        return $this->belongsTo(Sections::class, 'section_id', 'id');
    }

    public function providers()
    {
        return $this->belongsTo(Providers::class, 'provider_sub_section');
    }

}



