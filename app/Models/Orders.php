<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $table = 'orders';

    public $fillable = [
        'id',
        'user_id',
        'delivery_address',
        'user_phone',
        'items',
        'user_comment',
    ];
}
