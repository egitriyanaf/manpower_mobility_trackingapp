<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction_tracking extends Model
{
    use HasFactory;

    protected $table = 'transaction_trackings';
    protected $primarykey= 'id';
    protected $fillable=[
                        'nik_spv',
                        'nik_emp',
                        'cost_center',
                        'company',
                        'shift',
                        'start_shift',
                        'end_shift',
                        'date_checkin',
                        'time_checkin',
                        'date_checkout',
                        'time_checkout',
                        'updated_at',
                        'created_at',
                        ];
}
