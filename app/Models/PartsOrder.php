<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartsOrder extends Model
{
    use HasFactory;

    protected $table = 'parts_order';
    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'parts_id',
        'full_name',
        'email',
        'phone',
        'message'
    ];
}