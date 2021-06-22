<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Master_employee extends Model
{

    protected $table='master_employees';
    protected $primarykey='nik';
    protected $keytype='string';
    public $incrementing = 'false';
    protected $fillable=[
        'fullname_emp',
        'job_title',
        'cost_center',
        'location',
        'company'
    ];

}
