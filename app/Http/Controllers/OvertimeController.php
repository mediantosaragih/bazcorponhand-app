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

    public function edit($id){
        $employes = DB::table('employes')->orderBy('general_firstname', 'asc')->get();
        $data_overtime = Overtime::where('id', $id)->get();
        
        return view('overtime.edit', ['employes' => $employes, 'data_overtime' => $data_overtime]);
    }

    public function update(Request $request, $id){
        $data_overtime = $request->only([
            'id',
            'overtime_id_karyawan',
            'overtime_tanggal',
            'overtime_mulai',
            'overtime_berakhir'
        ]);

        Overtime::where('id', $id)->update($data_overtime);

        return redirect()->route('admin.overtime');
    }

    public function delete(Request $request)
    {
        $id = $request -> id;
        
        DB::table('general_overtime')->where('id', $id)->delete();
        
        return redirect()->route('admin.overtime');
    }
}
