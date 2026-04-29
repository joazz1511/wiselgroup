<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'product_id';

    public $timestamps = false;

    protected $fillable = [
        'product_name',
        'product_category',
        'product_pict',
        'product_desc',
        'brochure',
        'created_by',
        'created_at',
        'changed_by',
        'changed_at',
        'product_type_id',
        'is_product',
        'is_website',
        'is_apps'
    ];

    // =========================
    // RELATION: CATEGORY
    // =========================
    public function category()
    {
        return $this->belongsTo(
            ProductCategory::class,
            'product_category',
            'name'
        );
    }

    // =========================
    // RELATION: TYPE (FIX ERROR KAMU)
    // =========================
    public function type()
    {
        return $this->belongsTo(
            ProductType::class,
            'product_type_id',
            'id'
        );
    }
}