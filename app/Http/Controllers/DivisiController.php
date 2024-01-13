<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

use App\Models\Divisi;


class DivisiController extends Controller
{
    public function index()
    {
        $data_divisi = Divisi::orderBy('id', 'asc')->get();
        return view('divisi.divisi', ['data_divisi' => $data_divisi]);
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

    // public function DetailDataKaryawan($general_karyawan_id){
    //     $detail_karyawan = Employee::where('general_karyawan_id', $general_karyawan_id)->get();
        
    //     return view('main/employee/detail_data')->with('detail_karyawan', $detail_karyawan);
    // }
}
