<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DataTables;
use App\Models\Master_spv;
use App\Models\Master_employee;
use Illuminate\Support\Facades\DB;

class TableController extends Controller
{
    public function index(){
        return view ('table');
    }

    public function datajson_master_spv(){
        return DataTables::of(Master_spv::all())->make(true);
    }

    public function datajson_master_emp(){
        
        return DataTables::of(Master_employee::all())->make(true);
    }
}
