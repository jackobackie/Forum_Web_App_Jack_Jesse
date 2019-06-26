<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class thread extends Model

//deze file kan laten zien wie een thread heeft gemaakt en welke topics erbij horen

//hier laten we een thread koppelen aan een user
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //hier laten we een topic koppelen aan een thread
    public function topics()
    {
        return $this->hasMany(Topic::class);
    }
}
