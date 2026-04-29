<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dealer extends Model
{
    protected $table = 'dealer';
    protected $primaryKey = 'id';

    protected $fillable = [
        'dealer_name','address1','address2','city','phone',
        'latitude','longitude','pic_name','pic_email',
        'created_by','created_at','changed_by','changed_at',
        'dealer_picture','order_no'
    ];

    public $timestamps = false;
}