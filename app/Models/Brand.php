<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brand';
    protected $primaryKey = 'id';

    protected $fillable = [
        'record_status','name','description','created_by',
        'created_at','changed_by','changed_at','code','logo'
    ];

    public $timestamps = false;

    public function parts()
{
    return $this->hasMany(Parts::class, 'brand_id');
}
}