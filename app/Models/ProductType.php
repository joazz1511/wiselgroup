<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    protected $table = 'product_type';
    protected $primaryKey = 'id';

    protected $fillable = [
        'category_id','record_status','name','description',
        'created_by','created_at','changed_by','changed_at',
        'code','image','video_url','link','type_detail'
    ];

    public $timestamps = false;
}