<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table = 'slider';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'image','createdat','createdby','changedat','changedby',
        'ORDER_BY','URL_LINK','TITLE','DESCRIPTION'
    ];
}