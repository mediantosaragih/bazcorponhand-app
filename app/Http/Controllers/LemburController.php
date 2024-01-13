<?php

namespace App\Http\Controllers;
use App\Models\Lembur;


use Illuminate\Http\Request;

class LemburController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_lembur = Lembur::orderBy('id', 'asc')->get();
        return view('lembur.lembur', ['data_lembur' => $data_lembur]);    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('lembur.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data_lembur = $request->only([
            'id',
            'name',
            'jumlah_jam_lembur',
            'harga_lembur'
        ]);

        Lembur::create($data_lembur);

        return redirect()->route('admin.lembur');
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
    public function edit($id)
    {
        $data_lembur = Lembur::findOrFail($id);

        return view('lembur.create', compact('data_lembur'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'jumlah_jam_lembur' => 'required',
            'harga_lembur' => 'required',
        ]);

        $data_lembur = Lembur::findOrFail($id);
        $data_lembur->update($request->all());

        return redirect()->route('admin.lembur');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request, $id)
    {
        $data_lembur = Lembur::find($id);

        if ($data_lembur) {
            $data_lembur->forceDelete();
        }

        return redirect()->route('admin.lembur');
    }
}
