<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeShift;
use App\Models\Employe;
use App\Models\Shift;

class EmployeshiftController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $absensis = EmployeShift::with(['employes'])->get();
        $data_karyawan = Employe::orderBy('general_karyawan_id', 'asc')->get();
        return view('shift_daily.shift_daily', ['data_karyawan' => $data_karyawan]);
        // return view('shift_daily.shift_daily', compact('absensis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $absensis = EmployeShift::with(['employes', 'shifts'])->where('karyawan_id')->get();
        $employes = Employe::all();
        $shifts = Shift::all();

        return view('shift_daily.create_shift_daily', compact('absensis', 'employes', 'shifts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'karyawan_id' => 'required',
            'shift_id' => 'required',
            'tanggal' => 'required',

        ]);
    
        // Proses penyimpanan data
        $absensis = new EmployeShift;
        $absensis->karyawan_id = $request->input('karyawan_id');
        $absensis->shift_id = $request->input('shift_id');
        $absensis->tanggal = $request->input('tanggal');
        $absensis->save();
    
        $employes = Employe::all();
        $shifts = Shift::all();

        return redirect()->route('admin.shift_daily');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $absensis = EmployeShift::with(['employes', 'shifts'])->where('karyawan_id', $id)->get();
        // $absensis = EmployeShift::with(['employes', 'shifts'])->get();
        // $absensis = EmployeShift::find($karyawan_id);s
        // dd($absensis);
        
        // dd($absensis);
        return view('shift_daily/detail_shift_daily', compact('absensis'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
