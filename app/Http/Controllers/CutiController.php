<?php

namespace App\Http\Controllers;

use App\Models\Leave;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CutiController extends Controller
{
    public function import(Request $request){
        return view('import');
    }

    public function leaveSetting(){
        $data_cuti = Leave::orderBy('id', 'asc')->get();
        return view('leave.setting',['data_cuti' => $data_cuti]);
    }

    public function addLeaveSetting(Request $request){
        $data = Leave::create([
            'id'    => (string) Str::uuid(),
            'leave_code' => $request->leaveCode,
            'leave_name' => $request->leaveName,
            'eligibility_leave' => $request->eligibilityLeave,
            'limit_date' => $request->limitDate,
            'deducted_leave' => $request->deductedLeave,
            'day_count' => $request->dayCount,
            'enable_minus' => $request->enableMinus,
            'entitlement_period' => $request->entitlementPeriod,
            'balance_carry_over' => $request->balanceCarryOver,
            'created_at' => now(),
            'created_by'=>auth()->user()->username
        ]);

        return redirect(route('admin.setting.time-and-attendance.leave-setting'));
    }
}
