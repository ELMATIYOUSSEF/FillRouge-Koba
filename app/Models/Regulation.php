<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regulation extends Model
{
    use HasFactory;

    protected $fillable = [
        'DateTimePayment',
        'PaymentMethod',
        'AmountPaid',
        'StatusPayment'
    ];
}
