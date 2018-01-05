<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    protected $table = 'gender';

    protected $fillable = [
        'name', 'created_at', 'update_at'
    ];

//    public function newsletters(){
//        return $this->belongsTo(NewsLetter::class);
//    }
}
