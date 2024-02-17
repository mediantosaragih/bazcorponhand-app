<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shift;
use DB;

class ShiftController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_shifts = Shift::all();
        return view('shift.shift', compact('data_shifts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('shift.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'shift_code' => 'required|string',
    //         'nama_shift' => 'required|string',
    //         'start_time' => 'required',
    //         'end_time' => 'required',
    //     ]);

    //     // Membuat instansi ShiftDaily dan menyimpan data yang diterima dari formulir
    //     ShiftDaily::create([
    //         'shift_code' => $request->input('shift_code'),
    //         'nama_shift' => $request->input('nama_shift'),
    //         'start_time' => $request->input('start_time'),
    //         'end_time' => $request->input('end_time'),
    //     ]);

    //     // Redirect ke halaman index atau halaman lainnya setelah berhasil membuat Shift Daily
    //     return redirect()->route('admin.shift')->with('success', 'Shift Daily berhasil dibuat.');
    // }

    public function store(Request $request)
    {
        $data_shifts = $request->only([
            'id',
            'shift_code',
            'nama_shift',
            'start_time',
            'end_time'
        ]);

        Shift::create($data_shifts);

        return redirect()->route('admin.shift');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function update(Request $request)
    {
        $data_shifts = $request->only([
            'id',
            'shift_code',
            'nama_shift',
            'start_time',
            'end_time'
        ]);

        DB::table('shifts')->where('id', $data_shifts['id'])->update($data_shifts);

        return redirect()->route('admin.shift');
    }

    public function edit($id){
        $data_shifts = Shift::where('id', $id)->get();
        
        return view('shift/edit')->with('data_shifts', $data_shifts);
    }

    public function destroy(Request $request)
    {
        $data_shifts = $request -> id;

        DB::table('shifts')->where('id', $data_shifts)->delete();
        
        return redirect()->route('admin.shift');
    }
}
