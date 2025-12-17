<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;
    protected $table = 'contacts';
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

    // Get status label
    public function getStatusLabelAttribute()
    {
        return match($this->status) {
            self::STATUS_NEW => 'Mới',
            self::STATUS_PROCESSING => 'Đang xử lý',
            self::STATUS_DONE => 'Hoàn thành',
            default => 'Không xác định'
        };
    }

    // Get status badge class
    public function getStatusBadgeAttribute()
    {
        return match($this->status) {
            self::STATUS_NEW => 'badge-primary',
            self::STATUS_PROCESSING => 'badge-warning',
            self::STATUS_DONE => 'badge-success',
            default => 'badge-secondary'
        };
}
}