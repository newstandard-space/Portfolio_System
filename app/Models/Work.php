<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description','sort', 'updated_at'];

    //hasMany設定
    public function about_detail_image()
    {
        return $this->hasMany('App\WorkImage');
    }
}