<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ShiftDaily;
use DB;


class ShiftDailyController extends Controller
{
    public function index()
    {
        $shift_daily = DB::table('shift_daily')->orderBy('shift_daily_code', 'asc')->get();
        return view('roster.shift_daily', ['shift_daily' => $shift_daily]);
    }

    public function store(Request $request)
    {
        $shift_daily = $request->only([
            'id',
            'shift_daily_code',
            'day_type',
            'shift_daily_code_ph',
            'flexible_shift',
            'start_time',
            'end_time',
            'grace_for_late',
            'productive_work_time',
            'break_time',
            'remark',
        ]);

        ShiftDaily::create($shift_daily);

        return redirect()->route('admin.shift_daily');
    }

    public function edit($shift_daily_code){
        $detail_shift_daily = ShiftDaily::where('shift_daily_code', $shift_daily_code)->get();
        
        return view('roster.edit_shift_daily')->with('detail_shift_daily', $detail_shift_daily);
    }

    public function update(Request $request, $id)
    {
        $shift_daily = $request->only([
            'id',
            'shift_daily_code',
            'day_type',
            'shift_daily_code_ph',
            'flexible_shift',
            'start_time',
            'end_time',
            'grace_for_late',
            'productive_work_time',
            'break_time',
            'remark',
        ]);

        DB::table('shift_daily')->where('shift_daily_code', $shift_daily['shift_daily_code'])->update($shift_daily);

        return redirect()->route('admin.shift_daily');
    }

    public function destroy(Request $request)
    {
        $destroy_shift_daily = $request -> shift_daily_code;

        DB::table('shift_daily')->where('shift_daily_code', $destroy_shift_daily)->delete();
        
        return redirect()->route('admin.shift_daily');
    }
}
