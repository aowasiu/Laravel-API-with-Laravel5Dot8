<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Newsheadlines extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'identity' => $this->identity,
            'name' => $this->name,
            'title' => $this->title,
            'description' => $this->description,
            'url' => $this->url,
            'urlToImage' => $this->urlToImage,
            'publishedAt' => $this->publishedAt,
            'content' => $this->content,
            'category' => $this->category,
            'language' => $this->language,
            'country' => $this->country,
            'diskImageFileName' => $this->diskImageFileName,
//            'created_at' => $this->created_at,
//            'updated_at' => $this->updated_at,
        ];
    }

    //Assuming you want to add some other data to the returned data. Ths allows you to do practically anything.
    public function with($request)
    {
        return [
            'version' => '1.0.0',
            'default_language' => 'english',
            'author_url' => url('https://www.facebook.com/Adisawasiuolayemi'),
        ];
    }
}
