<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Master_spv extends Model
{
    use HasFactory;

    protected $table = 'master_spvs';
    protected $primarykey = 'nik_spv';
    protected $keyType = 'string';
    public $incrementing = 'false';
    protected $fillable=[
                        'nik_spv',
                        'fullname_spv',
                        'gender',
                        'cost_center',
                        'post_name',
                        'jobtitle_code',
                        'company'
                        ];
}
