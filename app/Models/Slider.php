<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table = "slider";

    protected $fillable = [
        "title", "image", 'date', "created_at", "updated_at"
    ];
}
