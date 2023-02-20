<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AboutDetailImages extends Model
{
    use HasFactory;

    //belongsTo設定
    public function about_detail(): BelongsTo
    {
        return $this->belongsTo('App\AboutDetail');
    }
}