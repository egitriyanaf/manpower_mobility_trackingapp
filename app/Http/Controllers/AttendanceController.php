<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Facades\DB;
use App\Models\AttendanceSunfish;
use App\Models\Attendance;

class AttendanceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('attendance');
    }

    public function datajson_attendance(){
        return DataTables::of(Attendance::all())->make(true);
    }
}
