<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'quantity',
        'category_id',
        'user_id',


    ];

    public function carts()
    {
        return $this->hasMany(Carts::class);
    }

    public function orders()
    {
        return $this->hasMany(orders::class);
    }

    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Products::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
