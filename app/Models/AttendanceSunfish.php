<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendanceSunfish extends Model
{
    protected $connection="sqlsrv";
    protected $table="Manpowerapp_attendance";
}
