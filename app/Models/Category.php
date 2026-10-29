<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Category extends Model
{
    use hasMany;

    protected $fillable = [
        'code',
        'nama',
    ];

    public function Category(): hasMany
    {
        return $this->hasMany(Equipment::class);
    }
}
