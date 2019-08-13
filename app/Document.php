<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $table = 'documents';

    protected $fillable = [
        'name', 'area_id', 'route',
    ];

    public function area(){
        return $this->belongsTo(Area::class);
    }
}
