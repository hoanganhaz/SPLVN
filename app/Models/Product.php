<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';

    protected $fillable = [
        'name',
        'code',
        'slug',
        'image',
        'status',
        'price',
        'sale_price',
        'length',
        'width',
        'wing_eyelids',
        'paint_technology',
        'key',
        'hinge',
        'design',
        'description',
        'category_id',
    ];
   
    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
  
}
