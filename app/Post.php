<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\USer;

class Post extends Model
{
    protected $fillable = ['title', 'body', 'image', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
