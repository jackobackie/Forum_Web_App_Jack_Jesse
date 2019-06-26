<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class topic extends Model
{
    public function thread()
    {
        return $this->belongsTo(Thread::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
