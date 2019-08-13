<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $table = 'areas';

    protected $fillable = [
        'name', 'body', 'companie_id',
    ] ;

    public function companie(){
        return $this->belongsTo(Companie::class);
    }
}
