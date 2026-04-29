<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guidance extends Model
{
    use HasFactory;

    protected $table = 'guidance';
    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'image',
        'title',
        'service_desc',
        'category',
        'created_at',
        'changed_by',
        'changed_at',
        'created_by',
        'youtube'
    ];
}