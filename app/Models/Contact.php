<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact';
    protected $primaryKey = 'id';

    protected $fillable = [
        'fullname','email','source','phone','message',
        'createdby','createdat','changedby','changedat'
    ];

    public $timestamps = false;
}