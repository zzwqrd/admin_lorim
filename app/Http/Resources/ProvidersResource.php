<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
// use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ProvidersResource extends ResourceCollection
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
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
            $image = ($data->image == null) ? null : config('provider_storage') . $data->image;
            return [
                'id' => $data->id,
                'title' => $data->title,
                'image' => $image,
                'description' => $data->description,
                'lat' => $data->lat,
                'lng' => $data->lng,
                'section_id' => $data->section_id,
                'sub_section_id' => $data->sub_section_id
            ];
        });
    }
}
