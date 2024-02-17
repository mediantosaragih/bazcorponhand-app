<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShiftGroup;
use App\Models\EmployeShift;
use App\Models\Employe;
use App\Models\Shift;


class ShiftGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $shift_group = ShiftGroup::all();
        // $data_karyawan = Employe::orderBy('general_karyawan_id', 'asc')->get();
        $absensis = EmployeShift::with(['employes', 'shifts'])->get();
        // return view('roster.shift_group', compact('shift_group'));
        return view('roster.shift_group', ['absensis' => $absensis]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('roster.create_shift_group');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validate the request data as needed

    // Extract data from the request
    $groupCode = $request->input('group_code');
    $groupName = $request->input('group_name');
    $shiftData = json_decode($request->input('shift_data'));

    // Create the Shift Group record
    ShiftGroup::create([
        'group_code' => $groupCode,
        'group_name' => $groupName,
        'overtime_based_on' => 1,
    ]);

    $shifts = [
        "SHIFT_PAGI" => [
            "nama_shift" => "PAGI",
            "start_time" => "08:00",
            "end_time" => "14:00"
        ],
        "SHIFT_SIANG" => [
            "nama_shift" => "SIANG",
            "start_time" => "14:00",
            "end_time" => "22:00"
        ],
        "SHIFT_MALAM" => [
            "nama_shift" => "MALAM",
            "start_time" => "22:00",
            "end_time" => "08:00"
        ]
    ];

    // Create Shift entries for each day
    foreach ($shiftData as $shift) {
        Shift::create([
            'shift_code' => $shift->shift,
            'nama_shift' => $shifts[$shift->shift]["nama_shift"],
            'date' => $shift->date,
            'start_time' => $shifts[$shift->shift]["start_time"],
            'end_time' =>  $shifts[$shift->shift]["end_time"],
            'data_type' => 'bulk',
            'flexible_time' => 1
        ]);
    }

    // Redirect or respond as needed
    return redirect()->route('admin.shift_group')->with('success', 'Shift Group added successfully');
}

    private function prepareShiftData($shiftCodes, $shiftDescriptions)
    {
        $shiftData = [];

        foreach ($shiftCodes as $index => $shiftCode) {
            $shiftData[] = [
                'shift_code' => $shiftCode,
                'shift_description' => $shiftDescriptions[$index],
            ];
        }

        return json_encode($shiftData);
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
