<?php

namespace App\Http\Controllers;

use App\Models\Holiday;
use Illuminate\Http\Request;

class HolidayController extends Controller
{
    public function index(){
        $data['holidays'] = Holiday::all();
        return view('layouts.clock-in-portal.holidays')->with($data);
        
    }

    public function create(){
        return view('layouts.clock-in-portal.addholiday'); 
    }

    public function store(Request $request){
        $holiday = new Holiday;
        $holiday->holiday_name = $request->input('holiday_name');
        $holiday->start_date = $request->input('start_date');
        $holiday->end_date = $request->input('end_date');
        $holiday->total_days = $request->input('total_days');
        $holiday->status = $request->input('status');
       
        $holiday->save();
        return redirect()->back()->with('status','Holiday added to the list');
    }

    public function edit($id){
        $holiday = Holiday::find($id);
        return view('layouts.account.edituser', compact('holiday'));

    }

    public function update(Request $request, $id){
        $holiday = Holiday::find($id);

        $holiday->holiday_name = $request->input('holiday_name');
        $holiday->start_date = $request->input('start_date');
        $holiday->end_date = $request->input('end_date');
        $holiday->total_days = $request->input('total_days');
        $holiday->status = $request->input('status');
        
        $holiday->update();
        return redirect()->back()->with('status','Holiday updated successfully');

    }

    public function delete($id){
        $holiday = Holiday::find($id);
        
        $holiday->delete();
        return redirect()->back()->with('status', 'Holiday removed from the table successfully!');
    }
}
