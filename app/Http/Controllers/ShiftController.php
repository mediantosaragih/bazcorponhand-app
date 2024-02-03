<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shift;

class ShiftController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_shifts = Shift::all();
        return view('roster.shift', compact('data_shifts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('roster.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'shift_code' => 'required|string',
            'nama_shift' => 'required|string',
            'data_type' => 'required|string',
            'flexible_time' => 'required|string',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ]);

        // Membuat instansi ShiftDaily dan menyimpan data yang diterima dari formulir
        ShiftDaily::create([
            'shift_code' => $request->input('shift_code'),
            'nama_shift' => $request->input('nama_shift'),
            'data_type' => $request->input('data_type'),
            'flexible_time' => $request->input('flexible_time'),
            'start_time' => $request->input('start_time'),
            'end_time' => $request->input('end_time'),
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
        ]);

        // Redirect ke halaman index atau halaman lainnya setelah berhasil membuat Shift Daily
        return redirect()->route('admin.shift')->with('success', 'Shift Daily berhasil dibuat.');
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
