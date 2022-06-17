<?php

namespace App\Http\Controllers;
//use DB;
use App\Imports\imports;
use App\Exports\ExcelExports;
use Illuminate\Http\Request;
use Excel;
use App\studentModel;
use App\testModel;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
session_start();
class studentController extends Controller
{
    //
    public function index() {
        return view('home');
    }
    

 
    public function export_csv()
    {
                return Excel::dowload(new ExcelExports,'results_Lists_points_students.xlsx');

    }
    
public function import_csv(Request $request){
 
            
        $path = $request->file('file')->getRealPath();
        \Maatwebsite\Excel\Facades\Excel::import(new imports, $path);
        return view('processing');

   

    
        

}

public function sreach(Request $request) {
    
  $datas = DB::table('tbl_students')->where('id','like','%'.$request->sreachId.'%')->where('fullName','like','%'.$request->sreachName.'%')->get();
 
        return view('processing')->with('datas',$datas);
    
    
    
}


public function hien() {
        $datas = studentModel::all();
        return view('processing')->with('datas',$datas);
}
        
}
