<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $table='attendances';
    protected $primarykey='id';
    protected $fillable=[
        'emp_no',
        'full_name',
        'jobtitle_code',
        'gender',
        'attend_code',
        'shiftstarttime',
        'shiftendtime',
        'starttime',
        'endtime',
        'actualworkmnt',
        'actualworkhour',
        'cost_code',
        'pos_name_en',
        'company'
    ];

}
