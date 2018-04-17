<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    // Relations

    public function albums() {
        return $this->hasMany(Album::class);
    }
}
