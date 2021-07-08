<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        return view('user');
    }

    public function datajson_user(User $user){
        return DataTables::of(User::all())->make(true);
    }

    public function create_user(Request $request){
        $create_user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request['password']),
            'level'=>$request->level,
        ]);
        alert()->success('Create User Success!', 'Thank You');
        return redirect('user');
    }
}
