<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Providers extends Model
{


    protected $table = 'providers';


    // protected $fillable = [
    //     'title_ar',
    //     'title_en',
    //     'image',
    //     'description_ar',
    //     'description_en',
    //     'section_id',
    // ];

    protected $guarded = [
        'created_at',
        'updated_at',

    ];


    protected $hidden = [
        'created_at',
        'updated_at',
        'pivot',
    ];

    public function getImageAttribute($image)
    {
        return isset($image) ? assetsUpload() . '/providers/' . $image : '';
    }

    public function setImageAttribute($image)
    {

        if($image) {

            return $this->attributes['image'] = uploadFile($image, '/providers/');

        }

    }

    public function section()
    {
        return $this->belongsToMany(Sections::class, 'provider_section');
    }

    public function providsub()
    {
        return $this->belongsToMany(SubSections::class, 'provider_sub_section');
    }


    // public function subsection()
    // {
    //     return $this->belongsTo(SubSections::class, 'sub_section_id', 'id');
    // }

// public function providers()
// {
//     return $this->hasMany(Providers::class, 'sub_section_id', 'id');
// }
}
