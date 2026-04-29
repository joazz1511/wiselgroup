<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Implement extends Model
{
    protected $table = 'implement';
    protected $primaryKey = 'implement_id';
    public $timestamps = false;

    protected $fillable = [
        'implement_name','implement_pict','implement_desc',
        'brochure','created_by','created_at','changed_by','changed_at'
    ];
}