<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Like;

class Tweet extends Model
{
    use Likable;
    protected $guarded = [];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
