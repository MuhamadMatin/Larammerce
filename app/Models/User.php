<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Product;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'image',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function savedProducts(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'saved_product_users');
    }

    public function toCart(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'carts')->withPivot('qty')->withTimestamps();
    }

    public function hasCart(Product $product)
    {
        return $this->toCart()->where('product_id', $product->id)->exists();
    }

    public function hasSaved(Product $product)
    {
        return $this->savedProducts()->where('product_id', $product->id)->exists();
    }
}
