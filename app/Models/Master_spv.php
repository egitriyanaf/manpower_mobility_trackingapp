<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Master_spv extends Model
{
    use HasFactory;

    protected $table = 'master_spvs';
    protected $primarykey = 'serialnumber_spv';
    protected $keyType = 'string';
    public $incrementing = 'false';
    protected $fillable=[
                        'serialnumber_spv',
                        'nik_spv',
                        'fullname_spv',
                        'cost_center',
                        'location',
                        'level',
                        'created_at',
                        'created_by',
                        'company'
                        ];
}
