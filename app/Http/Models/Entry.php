<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'supplier',
        'truck_no',
        'delivered_to',
        'date',
        'total_pieces',
        'total_volume_cubic_meters',
        'grand_total',
        'payment',
        'balance',
        'cash_advance',
    ];
}
