<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'video';
    protected $primaryKey = 'video_id';
    public $timestamps = false;

    protected $fillable = [
        'video_url','video_desc','created_by','created_at','changed_by','changed_at'
    ];
}