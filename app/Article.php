<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function user(){
        return $this->belongsTo('app\User');
    }

    protected $fillable = [
        'title', 'description', 'image','user_id'
    ];
}
