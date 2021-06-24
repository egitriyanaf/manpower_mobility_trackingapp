<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Master_spv extends Model
{

    protected $table = 'master_spvs';
    protected $primarykey = 'emp_no';
    protected $fillable=[
                        'emp_no',
                        'full_name',
                        'gender',
                        'cost_code',
                        'pos_name_en',
                        'jobtitle_code',
                        'company_id',
                        'updated_at',
                        'created_at',
                        ];
}
