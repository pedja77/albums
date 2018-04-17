<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    // Relations

    public function artist() {
        return $this->belongsTo(Artist::class);
    }

    public function songs() {
        return $this->hasMany(Song::class);
    }

    public function albumReviews() {
        return $this->hasMany(AlbumReview::class);
    }
}
