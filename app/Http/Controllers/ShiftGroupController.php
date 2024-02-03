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
    $request->validate([
        'group_code' => 'required',
        'group_name' => 'required',
        'overtime_based_on' => 'required|numeric',
        'shift_data' => 'required|array',
    ]);

    // Extract data from the request
    $groupCode = $request->input('group_code');
    $groupName = $request->input('group_name');
    $overtimeBasedOn = $request->input('overtime_based_on');
    $shiftData = $request->input('shift_data');

    // Create the Shift Group record
    $shiftGroup = ShiftGroup::create([
        'group_code' => $groupCode,
        'group_name' => $groupName,
        'overtime_based_on' => $overtimeBasedOn,
    ]);

    // Create Shift entries for each day
    foreach ($shiftData as $day => $shift) {
        Shift::create([
            'shift_group_id' => $shiftGroup->id,
            'day' => $day,
            'shift_code' => $shift['shift_code'],
            // You can add more fields as needed
        ]);
    }

    // Redirect or respond as needed
    return redirect()->route('admin.shift_group.index')->with('success', 'Shift Group added successfully');
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
