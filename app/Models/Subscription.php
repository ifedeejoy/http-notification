<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    protected $fillable = ['url', 'topic_id'];

    protected $table = 'subscriptions';

    public function topics()
    {
        return $this->belongsTo(Topic::class);
    }
}
