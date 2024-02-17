<?php

namespace App\Http\Controllers;
use App\Models\Overtime;
use App\Models\Employe;
use DB; 

use Illuminate\Http\Request;

class OvertimeController extends Controller
{
    public function index()
    {
        $data_overtime = Overtime::orderBy('id', 'asc')->get();
        return view('overtime.overtime', ['data_overtime' => $data_overtime]);    
    }

    public function create()
    {
        $employes = DB::table('employes')->orderBy('general_firstname', 'asc')->get();

        return view('overtime.create', ['employes' => $employes]);
    }

    public function store(Request $request)
    {
        $data_overtime = $request->only([
            'id',
            'overtime_id_karyawan',
            'overtime_tanggal',
            'overtime_mulai',
            'overtime_berakhir'
        ]);

        Overtime::create($data_overtime);

        return redirect()->route('admin.overtime');
    }

    public function edit($overtime_id_karyawan){
        $data_overtime = Overtime::where('overtime_id_karyawan', $overtime_id_karyawan)->get();
        
        return view('overtime.edit')->with('data_overtime', $data_overtime);
    }

    public function update(Request $request){
        $data_overtime = $request->only([
            'id',
            'overtime_id_karyawan',
            'overtime_tanggal',
            'overtime_mulai',
            'overtime_berakhir'
        ]);

        DB::table('general_overtime')->where('overtime_id_karyawan', $data_overtime['overtime_id_karyawan'])->update($data_overtime);

        return redirect()->route('admin.overtime');
    }

    public function delete(Request $request)
    {
        $overtime_id_karyawan = $request -> overtime_id_karyawan;

        DB::table('general_overtime')->where('overtime_id_karyawan', $overtime_id_karyawan)->delete();
        
        return redirect()->route('admin.overtime');
    }
}
