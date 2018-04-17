<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlbumReview extends Model
{
    // Relations

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function album() {
        return $this->belongsTo(Album::class);
    }
}
