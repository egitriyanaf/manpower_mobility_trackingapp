<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Master_employee extends Model
{
    use HasFactory;

    protected $table = 'master_employees';
    protected $primarykey = 'serialnumber_emp';
    public $incrementing = 'false';
    protected $fillable=[
                        'serialnumber_emp',
                        'nik_emp',
                        'fullname_emp',
                        'cost_center',
                        'location',
                        'created_at',
                        'created_by',
                        'company'
                        ];
}
