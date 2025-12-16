<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'parent_id',
    ];

    /**
     * Category cha
     */
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    /**
     * Category con
     */
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

   
    public function childrenRecursive()
    {
        return $this->children()->with('childrenRecursive');
    }
}
