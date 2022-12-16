<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function user() {
        return $this->belongsTo(User::class);
    }
    
    use HasFactory;
    protected $fillable = [
        'shipper',
        'consignee',
        'notifyparty',
        'party',
        'qty',
        'stuffing_date',
        'pol',
        'pod',
        'vsl',
        'etd',
        'marking',
        'description',
        'gw',
        'nw',
        'meas',
        'notes',
    ];
}
