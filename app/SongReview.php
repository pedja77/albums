<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SongReview extends Model
{
    // Relations

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function song() {
        return $this->belongsTo(Song::class);
    }
}
