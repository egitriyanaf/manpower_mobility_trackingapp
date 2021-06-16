<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction_tracking extends Model
{
    use HasFactory;

    protected $table = 'transaction_trackings';
    protected $fillable=[
                        'serialnumber_spv',
                        'serialnumber_emp',
                        'date_checkin',
                        'time_checkin',
                        'date_checkout',
                        'time_checkout',
                        'cost_center',
                        'location',
                        'company'
                        ];
}
