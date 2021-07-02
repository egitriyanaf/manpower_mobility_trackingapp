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
                        'nik_emp',
                        'nik_teamleader',
                        'cost_center',
                        'flag_checkin',
                        'datetime_checkin',
                        'flag_checkout',
                        'datetime_checkout',
                        'updated_at',
                        'created_at',
                        ];
}
