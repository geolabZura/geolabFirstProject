<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    protected $table = "subscribers";

    protected $fillable = [
        "name", "email", "subject", "text", "gender_id", "newsletter_id", "created_at", "update_at"
    ];

    public function genders(){
        return $this->belongsTo(Gender::class);
    }

    public function newsletters(){
        return $this->belongsToMany(NewsLetter::class, 'subscriber_newsletter', 'subscriber_id', 'newsletter_id');
    }
}
