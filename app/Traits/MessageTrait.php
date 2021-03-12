<?php
    
namespace App\Traits;

use App\Http\Resources\MessageResource;
use App\Models\Subscription;
use Illuminate\Support\Facades\Http;
use App\Models\Topic;
/**
 * 
 */
trait MessageTrait
{
    public function sendToSubscribers($data)
    {   
        $subscribers = Topic::find($data->topic->id)->subscribers;
        $finalData = collect([
            'topic' => $data->topic->name,
            'data' => [
                'message' => $data->message
            ]
        ]);
        foreach($subscribers as $subscriber):
            $sendNotification = Http::post($subscriber->url, $finalData->all());
            if($sendNotification->failed()):
                response()->json(['message' => 'Unable to send notification'],$sendNotification->status());
            endif;
        endforeach;
    }
}
