<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'phone',
        'address',
       'email',
        'message',
        'status'
    ];

    const STATUS_NEW = 0;
    const STATUS_PROCESSING = 1;
    const STATUS_DONE = 2;
}
