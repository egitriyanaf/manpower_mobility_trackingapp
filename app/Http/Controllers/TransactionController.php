<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use App\Models\Transaction_tracking;

class TransactionController extends Controller
{
    public function index(){
        return view('transaction_tracking');
    }

    public function datajson_transaction_tracking(){
        return DataTables::of(Transaction_tracking::all())->make(true);
    }
}
