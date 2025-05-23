<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable = [
        'idea_id',

        'content',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
