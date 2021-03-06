<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsLetter extends Model
{
    protected $table = "newsletter";

    protected $fillable = [
        'name', 'created_at', 'update_at'
    ];

    public function subscribers(){
        return $this->belongsToMany(Subscriber::class, 'subscriber_newsletter', 'newsletter_id', 'subscriber_id');
    }
}
