<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'desk',
        'thumnail',
        'price',
        'stock',
        'category_id',
        'shop_id',
    ];

    public function shop(): BelongsTo
    {
        return $this->belongsTo(Shop::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(ImageProduct::class);
    }

    public function riview(): HasMany
    {
        return $this->HasMany(RiviewProduct::class);
    }

    public function savedByUsers(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'saved_product_users');
    }

    public function toCart(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'carts');
    }

    public function calcStar()
    {
        $totalStars = $this->riview->sum('star');
        $reviewCount = $this->riview->count();
        return $reviewCount > 0 ? round($totalStars / $reviewCount, 1) : 0;
    }
}
