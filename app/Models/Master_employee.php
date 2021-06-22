<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Master_employee extends Model
{

    // protected $connection="sqlsrv";
    // protected $table="VIEW_EMPLOYEE";
    // protected $primarykey="emp_id";

    protected $table='master_employees';
    protected $primarykey='nik';
    protected $keytype='string';
    public $incrementing = 'false';
    protected $fillable=[
        'fullname_emp',
        'gender',
        'cost_code',
        'post_name',
        'jobtitle_code',
        'company'
    ];

}
