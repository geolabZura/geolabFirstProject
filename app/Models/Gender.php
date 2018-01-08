<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    protected $table = 'gender';

    protected $fillable = [
        'subscriber_id','name', 'created_at', 'update_at'
    ];

    public function subscribers(){
        return $this->belongsTo(Subscriber::class);
    }
}
