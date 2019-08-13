<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companie extends Model
{
    protected $table = 'companies';

    protected $fillable = [
        'user_id', 'name', 'body',
    ];

    public function user(){
        return $this->belongsto(User::class);
    }

    public function areas(){
        return $this->hasMany(Area::class);
    }
}
