<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

//use Illuminate\Http\Resources\Json\JsonResource;


class SectionResource extends ResourceCollection
{
    public $title;
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        if (request()->header('lang') == 'ar') {
            $title = 'title_ar';
            $this->title = 'title_ar';
        } else {
            $title = 'title_en';
            $this->title = 'title_en';
        }

        return $this->collection->transform(function ($data) {
            $image = ($data->image == null) ? null : config('section_storage') . $data->image;
            return [
                'id' => $data->id,
                'title' => $data->title,
                'image' => $image,
            ];
        });
    }
}