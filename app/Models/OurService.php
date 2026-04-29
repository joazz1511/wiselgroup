<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OurService extends Model
{
    protected $table = 'our_services';
    protected $primaryKey = 'id';

    protected $fillable = [
        'image','title','service_desc','category',
        'created_at','changed_by','changed_at','created_by'
    ];

    public $timestamps = false;
}