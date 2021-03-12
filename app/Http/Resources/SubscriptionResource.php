<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SubscriptionResource extends JsonResource
{
    protected $topic;

    public function topic($topic)
    {
        $this->topic = $topic;
        return $this;
    }
    
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */

    public function toArray($request)
    {
        return [
            'url' => $this->url,
            'topic' => $this->topic
        ];
    }
}
