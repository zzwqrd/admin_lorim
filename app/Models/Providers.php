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
        'shipping_cost',
    ];

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

    public static function sippingPrice ($id) {
        return Providers::where('id',$id)->first('shipping_cost')->shipping_cost;
    }

    public function section()
    {
        return $this->belongsToMany(Sections::class, 'provider_section');
    }

    public function section2()
    {
        return $this->belongsToMany(Sections::class, 'sections_id');
    }

    public function providsub()
    {
        return $this->belongsToMany(SubSections::class, 'provider_sub_section');
    }


    public function subsection()
    {
        return $this->hasMany(SubSections::class, 'sub_section_id', 'id');
    }

    public function rates()
    {
        return $this->hasMany(Rate::class, 'provider_id', 'id');
    }

// public function providers()
// {
//     return $this->hasMany(Providers::class, 'sub_section_id', 'id');
// }
}
