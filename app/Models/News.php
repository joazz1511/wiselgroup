<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    protected $primaryKey = 'id';

    protected $fillable = [
        'image','photo_by','news_by','place','news_date',
        'title','news_desc','created_at','changed_by','changed_at','created_by'
    ];

    public $timestamps = false;
}