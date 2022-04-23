<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Doctor;
use App\Models\Appointment;


class AdminController extends Controller
{
    public function addview()
    {
        return view('admin.add_doctor');
    }
    public function upload(Request $request)
    {
        $doctor =new doctor;

        // $image=$request->file;
        // $imagename=time().'.'.$image->getClientOriginalExtension();

        // $request->file->move('doctorimage',$imagename);

        // $doctor->image=$imagename;

        $doctor->name=$request->name;

        $doctor->phone=$request->number;

        $doctor->room=$request->room;

        $doctor->speciality=$request->speciality;

        $doctor->save();
        return redirect()->back()->with('message','Doctor added Successfully');

    }
    public function showappointment()
    {
        $data = appointment::all();

        return view('admin.showappointment',compact('data'));
    }
    public function approved($id)
    {
        $data=appointment::find($id);
        $data->status='approved';
        $data->save();

        return redirect()->back();
    }
    public function canlced($id){
        $data = appointment::find($id);

        $data->status='canlced';
        $data->save();
        return redirect()->back();
    }
    public function showdoctor()
    {
        $data=doctor::all();
        return view('admin.showdoctor',compact('data'));
    }
    public function deletedoctor($id){

        $data=doctor::find($id);
        $data->delete();
        return redirect()->back();
    }
   public function updatedoctor($id)
   {
       $data=doctor::find($id);
       return view('admin.update_doctor',compact('data'));
   }
   public function showmedicine(){
       return view('admin.show_medicine');
   }
}
