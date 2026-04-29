<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    protected $table = 'vacancy';
    protected $primaryKey = 'id';

    protected $fillable = [
        'division','position','heading','requirements',
        'responsibilities','description',
        'createdby','createdat','updatedby','updatedat'
    ];

    public $timestamps = false;
}