<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SavedProductUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',
    ];
}
