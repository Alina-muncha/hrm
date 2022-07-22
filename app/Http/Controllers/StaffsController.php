<?php

namespace App\Http\Controllers;
use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class StaffsController extends Controller
{
    public function index(){
        $data['members'] = Staff::all();
        return view('layouts.account.all-members')->with($data);
        
    }

    public function create(){
        return view('layouts.account.addUser');
    }

    public function store(Request $request){
        $staff = new Staff;
        
        if($request->hasfile('profile_image')){
            $file = $request->file('profile_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/users/', $filename);
            $staff->profile_image = $filename;

        }
        $staff->muncha_id = $request->input('muncha_id');
        $staff->name = $request->input('name');
        $staff->email = $request->input('email');
        $staff->location = $request->input('location');
        $staff->designation = $request->input('designation');
        $staff->number = $request->input('number');
        $staff->blood_group = $request->input('blood_group');
        $staff->tax_id = $request->input('tax_id');
        $staff->role = $request->input('role');
        if($request->hasfile('documents')){
            $file = $request->file('documents');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/user_documents/', $filename);
            $staff->documents = $filename;

        }
        $staff->save();
        return redirect()->back()->with('status','User Updated successfully');
    }

    public function edit($id){
        $staff = Staff::find($id);
        return view('layouts.account.edituser', compact('staff'));

    }

    public function update(Request $request, $id){
        $staff = Staff::find($id);

        if($request->hasfile('profile_image')){

            $destination = 'uploads/users/'. $staff->profile_image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('profile_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/users/', $filename);
            $staff->profile_image = $filename;

        }
        $staff->muncha_id = $request->input('muncha_id');
        $staff->name = $request->input('name');
        $staff->email = $request->input('email');
        $staff->location = $request->input('location');
        $staff->designation = $request->input('designation');
        $staff->number = $request->input('number');
        $staff->blood_group = $request->input('blood_group');
        $staff->tax_id = $request->input('tax_id');
        $staff->role = $request->input('role');
        if($request->hasfile('documents')){

            $destination = 'uploads/user_documents/'. $staff->profile_image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('documents');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/user_documents/', $filename);
            $staff->documents = $filename;

        }
        $staff->update();
        return redirect()->back()->with('status','User Added successfully');

    }

    public function delete($id){
        $staff = Staff::find($id);
        $destination = 'uploads/user_documents'. $staff->profile_image;
        if(File::exists($destination)){
            File::delete($destination);
        }
        $staff->delete();
        return redirect()->back()->with('status', 'Staff removed from the table successfully!');
    }
}
