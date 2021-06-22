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
                        'location',
                        'company',
                        'datetime_checkin',
                        'datetime_checkout'
                        ];
}
