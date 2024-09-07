<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductCategories extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'product_categories';
    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
        'status',
        'created_at',
        'updated_at'
    ];
}
