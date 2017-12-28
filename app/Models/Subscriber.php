<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    protected $table = "subscribers";

    protected $fillable = [
        "name", "email", "subject", "text", "gender_id", "newsletter_id", "created_at", "update_at"
    ];
}
