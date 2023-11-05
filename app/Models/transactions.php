<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transactions extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'userId',
        'vehicleId',
        'startDate',
        'endDate',
        'price',
        'status',
    ];
}
// NOVAL ABDURRAMADAN - 6706223103