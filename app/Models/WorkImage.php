<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WorkImage extends Model
{
    use HasFactory;

    //belongsTo設定
    public function work(): BelongsTo
    {
        return $this->belongsTo('App\Work');
    }
}