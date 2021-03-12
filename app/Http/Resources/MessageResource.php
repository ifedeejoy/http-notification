<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Topic;

class MessageResource extends JsonResource
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
            'topic' => $this->topic,
            'data' => [
                "message" => $this->message
            ]
        ];
    }
}
