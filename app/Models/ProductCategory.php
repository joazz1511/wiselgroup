<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $table = 'product_category';
    protected $primaryKey = 'id_category';

    protected $fillable = [
        'name','description','enabled',
        'creation_user_id','creation_datetime',
        'change_user_id','change_datetime'
    ];

    public $timestamps = false;

    public function products()
{
    return $this->hasMany(Product::class, 'product_category', 'name');
}
}