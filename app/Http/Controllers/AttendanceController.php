<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Facades\DB;
use App\Models\Attendance;

class AttendanceController extends Controller
{
    public function index(){
        return view('attendance');
    }

    public function json_attendance(){
        //
    }
}
