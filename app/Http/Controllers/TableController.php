<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DataTables;
use App\Models\User;
use App\Models\Master_spv;
use App\Models\Master_employee;
use Illuminate\Support\Facades\DB;

class TableController extends Controller
{
    public function index(){
        return view ('table');
    }

    public function datajson_master_user(User $user){
        return DataTables::of(User::all())->addIndexColumn()
        ->addColumn('action', function($row){
               $btn = '<a href="javascript:void(0)" class="btn btn-primary btn-sm" title="Edit"><i class="fas fa-pen"></i></a>&nbsp; &nbsp;';
               $btn = $btn.'<a href="javascript:void(0)" class="btn btn-danger btn-sm" title="Delete"><i class="fas fa-trash"></i></a>';

                return $btn;
        })
        ->rawColumns(['action'])->make(true);
    }

    public function create_user(Request $request){
        $create_user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request['password']),
        ]);

        return redirect('table');
    }

    public function edit_user(User $user, $id){
        $user=User::find($id);
        return view('userEdit', compact('user'));
    }

    public function datajson_master_spv(){
        return DataTables::of(Master_spv::all())->make(true);
    }

    public function datajson_master_emp(){
        return DataTables::of(Master_employee::all())->make(true);
    }
}
