<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use DataTables;
use App\Models\Master_employee;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('employee');
    }

    public function datajson_master_emp(){
        return DataTables::of(Master_employee::all())->make(true);
    }
}
