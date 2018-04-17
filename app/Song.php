<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    // relations

    public function album() {
        return $this->belongsTo(Album::class);
    }

    public function songReviews() {
        return $this->hasMany(SongReview::class);
    }
}
