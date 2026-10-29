<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Equipment extends Model
{
    use belongsTo;

    protected $fillable = [
        'category_id',
        'asset_code',
        'name', 
        'specification',
        'condition',
        'status',
        'daily_rental_fee',
        'image_path',
    ];

    public function Equipment(): belongsTo
    {
        return $this->belongsTo(Category::class);
    }
}