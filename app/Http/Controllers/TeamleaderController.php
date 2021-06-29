<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DataTables;
use App\Models\Master_Teamleader;
use Illuminate\Support\Facades\DB;

class TeamleaderController extends Controller
{
    public function index(){
        return view('teamleader');
    }

    public function datajson_master_tl(){
        return DataTables::of(Master_Teamleader::all())->make(true);
    }
}
