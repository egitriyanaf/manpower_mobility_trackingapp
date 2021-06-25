<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Master_EmployeeSunfish;
use App\Models\Master_SpvSunfish;
use App\Models\Master_employee;
use App\Models\Master_spv;
use Illuminate\Support\Facades\DB;
use Alert;

class SyncronizeController extends Controller
{
    public function syncEmployee(){
      Master_employee::truncate();
             // Connect to live database
     $sunfish = DB::connection('sqlsrv');
     // Get table data from production
     foreach($sunfish->table('manpower_EMPLOYEE')->get() as $data){
        // Save data to staging database - default db connection
        $masterEmployee = Master_employee::firstOrCreate((array) $data);

      }
      alert()->success('Syncronized Success!', 'Thank You');
      return redirect()->back();
     
    }
    
    public function syncSupervisor(){
      Master_spv::truncate();
             // Connect to live database
     $sunfish = DB::connection('sqlsrv');
     // Get table data from production
     foreach($sunfish->table('Manpower_SUPERVISOR')->get() as $data){
        // Save data to staging database - default db connection
        $masterSupervisor = Master_spv::firstOrCreate((array) $data);  
      }
      alert()->success('Syncronized Success!', 'Thank You');
      return redirect()->back();
     
    }
}
