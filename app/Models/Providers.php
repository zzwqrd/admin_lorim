<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Providers extends Model
{


    protected $table = 'providers';


    protected $fillable = [
        'title_ar',
        'title_en',
        'image',
        'description_ar',
        'description_en',
        'section_id',
        'sub_section_id',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function getImageAttribute($image)
    {
        return isset($image) ? assetsUpload() . 'providers' . $image : '';
    }

    public function section()
    {
        return $this->belongsTo(Sections::class, 'section_id', 'id');
    }
    public function subsection()
    {
        return $this->belongsTo(SubSections::class, 'sub_section_id', 'id');
    }

// public function providers()
// {
//     return $this->hasMany(Providers::class, 'sub_section_id', 'id');
// }
}
