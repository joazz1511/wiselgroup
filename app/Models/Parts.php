<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Brand;

class Parts extends Model
{
    protected $table = 'parts';
    protected $primaryKey = 'parts_id';

    protected $fillable = [
        'parts_name',
        'parts_number',
        'parts_pict',
        'parts_desc',
        'created_by',
        'created_at',
        'changed_by',
        'changed_at',
        'brand_id',
        'url'
    ];

    public $timestamps = false;

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }
}