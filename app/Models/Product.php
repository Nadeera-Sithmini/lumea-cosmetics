<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Wishlist;
use App\Models\Review;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Category;

class Product extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'price',
        'old_price',
        'image',
        'category',
        'stock',
        'is_featured',
        'is_active',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'old_price' => 'decimal:2',
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
    ];

    public function wishlists(): HasMany
{
    return $this->hasMany(Wishlist::class);
}
public function reviews(): HasMany
{
    return $this->hasMany(Review::class);
}
public function categoryRelation(): BelongsTo
{
    return $this->belongsTo(Category::class, 'category_id');
}
}