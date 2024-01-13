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

    public function edit($id){
        $detail_divisi = Divisi::where('id', $id)->get();
        
        return view('main/divisi/detail')->with('detail_divisi', $detail_divisi);
    }

    // public function DetailDataKaryawan($general_karyawan_id){
    //     $detail_karyawan = Employee::where('general_karyawan_id', $general_karyawan_id)->get();
        
    //     return view('main/employee/detail_data')->with('detail_karyawan', $detail_karyawan);
    // }
}
