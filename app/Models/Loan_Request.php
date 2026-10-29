<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Loan_Request extends Model
{
    use HasMany;

    protected $fillable = [
        'loan_requests',
        'equipment_id',
        'borrower_name', 
        'borrower_nim',
        'borrower_email',
        'loan_date',
        'expected_return_date',
    ];

    public function Equipment(): HasMany
    {
        return $this->hasMany(Category::class);
    }
}
