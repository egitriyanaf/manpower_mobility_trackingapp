<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Master_EmployeeSunfish;
use App\Models\Master_SpvSunfish;
use App\Models\Master_employee;
use App\Models\Master_Teamleader;
use App\Models\AttendanceSunfish;
use App\Models\Attendance;
use Illuminate\Support\Facades\DB;
use Alert;

class SyncronizeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function syncEmployee(){
      //truncate all data employee
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
    
    public function syncTeamleader(){
      //truncate all data teamleader
      Master_Teamleader::truncate();
             // Connect to live database
     $sunfish = DB::connection('sqlsrv');
     // Get table data from production
     foreach($sunfish->table('Manpower_SUPERVISOR')->get() as $data){
        // Save data to staging database - default db connection
        $masterTeamleader = Master_Teamleader::firstOrCreate((array) $data);  
      }
      alert()->success('Syncronized Success!', 'Thank You');
      return redirect()->back();
     
    }

    public function syncAttendance(){
      // Connect to live database
      $sunfish = DB::connection('sqlsrv');
      foreach($sunfish->table('Manpowerapp_attendance')->get()as $data){
        
        // save data to staging database - default db connection
        $attendance= Attendance::firstOrCreate((array)$data);
      }
      // return alert success
      alert()->success('Syncronized Success!', 'Thank You');
      return redirect ()->back();

    }
}
