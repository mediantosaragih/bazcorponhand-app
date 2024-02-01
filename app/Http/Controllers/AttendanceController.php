<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EmployeShift;
use App\Models\Employe;
use App\Models\Shift;

class AttendanceController extends Controller
{
    public function index()
    {
        // $data_divisi = Divisi::orderBy('id', 'asc')->get();
        $data_karyawan = Employe::orderBy('general_karyawan_id', 'asc')->get();
        return view('attendance.kehadiran', ['data_karyawan' => $data_karyawan]);
        // return view('attendance.kehadiran');
    }
    public function show(string $id)
    {
        $absensis = EmployeShift::with(['employes', 'shifts'])->where('karyawan_id', $id)->get();
        // $absensis = EmployeShift::with(['employes', 'shifts'])->get();
        // $absensis = EmployeShift::find($karyawan_id);s
        // dd($absensis);
        
        // dd($absensis);
        return view('attendance.detail_kehadiran', compact('absensis'));
    }

    public function detail()
    {
        // $data_divisi = Divisi::orderBy('id', 'asc')->get();
        return view('attendance.detail');
    }

    public function create()
    {
        return view('divisi.create');
    }

    public function tambahDivisi(Request $request){
        $data_divisi = $request->only([
            'id',
            'divisi_id',
            'name_divisi',
            'jumlah',
        ]);

        Divisi::create($data_divisi);

        return redirect('divisi');
    }

    public function store(Request $request)
    {
        $data_divisi = $request->only([
            'id',
            'divisi_id',
            'name_divisi',
            'jumlah',
        ]);

        Divisi::create($data_divisi);

        return redirect()->route('admin.divisi');
    }

    public function update(Request $request)
    {
        $data_divisi = $request->only([
            'id',
            'divisi_id',
            'name_divisi',
            'jumlah',
        ]);

        DB::table('general_divisi')->where('divisi_id', $data_divisi['divisi_id'])->update($data_divisi);

        return redirect()->route('admin.divisi');
    }

    public function edit($divisi_id){
        $detail_divisi = Divisi::where('divisi_id', $divisi_id)->get();
        
        return view('divisi/edit')->with('detail_divisi', $detail_divisi);
    }

    public function destroy(Request $request)
    {
        $destroy_divisi = $request -> divisi_id;

        DB::table('general_divisi')->where('divisi_id', $destroy_divisi)->delete();
        
        return redirect()->route('admin.divisi');
    }
}
