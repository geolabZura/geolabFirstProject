<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    protected $table = "social";

    protected $fillable = [
        "link", "image", "created_at", "updated_at"
    ];
}
