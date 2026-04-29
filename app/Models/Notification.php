<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $table = 'notifications';
    protected $primaryKey = 'NOTIFICATION_ID';

    public $timestamps = false;

    protected $fillable = [
        'ID',
        'NOTIF_TYPE',
        'NOTIF_STATUS',
        'NOTIF_DATE',
        'EMAIL',
        'IS_READ',
        'IS_SHOW'
    ];

    protected $casts = [
        'NOTIF_DATE' => 'datetime',
        'IS_READ' => 'boolean',
        'IS_SHOW' => 'boolean',
    ];

    protected $attributes = [
        'IS_READ' => 0,
        'IS_SHOW' => 1,
    ];

    public function scopeUnread($query)
    {
        return $query->where('IS_READ', 0);
    }
}