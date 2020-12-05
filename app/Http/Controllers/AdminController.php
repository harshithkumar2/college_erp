<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admin;
use App\student;
use App\room;
use App\subject;
use App\Charts\AdminChart;
use App\teacher;
use Crypt;
use Cookie;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
        'name' => 'required',
        'email_id' => 'required|email',
        'password' => 'required',
        'confirm_password' => 'required|same:password',
      ]);
        $admin = new admin;
        $admin->name = $request->input('name');
        $admin->email_id = $request->input('email_id');
        $admin->password = Crypt::encrypt($request->input('password'));
        if($request->hasfile('image'))
        {
          $file=$request->file('image');
          $extension=$file->getClientOriginalExtension();
          $filename=mt_rand().'.'.$extension;
          $file->move('uploads/',$filename);
          $admin->image=$filename;

        }
        else{
          $admin->image='';
        }

        $admin->save();
       return redirect('/adminlog');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    public function change_pass($id)
    {
        $pass = admin::find($id);
        return view('admin_change', ['pass' => $pass]);
    }

    public function update_pass(Request $request, $id)
    {
      $this->validate($request , [
        'old' => 'required',
        'new' => 'required',
        'cnew' => 'required|same:new'
      ]);
        $update = admin::find($id);
        if(Crypt::decrypt($update->password) == $request->old)
        {
          $update->password = Crypt::encrypt($request->new);
          $update->save();
          return redirect('/adminlog')->with('msg1', 'Password changed Successfully');
        }
        else {
          return back()->with('msg', 'Old password incorrect');
        }

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dis=student::find($id);
        return view('admin_performance_edit',['dis'=>$dis]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $data=admin::find($id);
       if($request->hasfile('pic'))
       {
         $file=$request->file('pic');
         $extension=$file->getClientOriginalExtension();
         $filename=mt_rand().'.'.$extension;
         $file->move('uploads/',$filename);
         $data->image=$filename;

       }
       else{
         $data->image='';
       }
       $data->save();
       return redirect('/dash');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function login(Request $request)
    {
      $login = admin::where('email_id', $request->input('mail'))->get();
      if($login->isEmpty())
      {
        return redirect('adminlog')->with('msg', 'Invalid Email');
      }
      else {
        if(Crypt::decrypt($login[0]->password) == $request->input('pass'))
        {
          $request->session()->put('admin', $login[0]->name);
         $request->session()->put('email', $login[0]->email_id);
         $request->session()->put('pic', $login[0]->image);

          return redirect('/dash')->withCookie(cookie('ida',$login[0]->id));



        }
        else {
          return redirect('adminlog')->with('msg', 'Invalid Password');
        }
      }
    }
    public function photo($id)
    {
      $pic=admin::find($id);
      return view('changepic',['id'=>$pic]);

}
public function profile($id)
{
  $profile=admin::where('id',$id)->get();
  session()->put('pic', $profile[0]->image);
  session()->put('name', $profile[0]->name);
  session()->put('email', $profile[0]->email_id);
  return redirect('/myprof');
}

public function count()
{
$student = student::all()->count();
$teacher = teacher::all()->where('approve', 1)->count();
$count = teacher::all()->where('approve', 0)->count();
$room = room::all()->count();
$chart = new AdminChart;
   $chart->labels(['Students', 'Teachers','Pending Approvals','Class Count']);
   $chart->dataset('Total Count', 'bar', [$student, $teacher, $count, $room])->backgroundcolor(['#EB984E', '#28B463', '#E74C3C','#A569BD']);
  return view('dash.dashboard', ['student' => $student], ['teacher' => $teacher])->with(['count' => $count])->with(['room' => $room])->with(compact('chart'));
}

public function performance()
{
  $perf=student::all();
  return view('/performance',['perf'=>$perf]);
}public function perfupdate(Request $request,$id)

{
  $update= student::find($id);
  $update->mark1 = $request->mark1;
  $update->mark2 = $request->mark2;
  $update->mark3 = $request->mark3;
  $update->mark4 = $request->mark4;
  $update->mark5 = $request->mark5;
  $update->mark6 = $request->mark6;
  $update->attend1 = $request->attend1;
  $update->attend2 = $request->attend2;
  $update->attend3 = $request->attend3;
  $update->attend4 = $request->attend4;
  $update->attend5 = $request->attend5;
  $update->attend6 = $request->attend6;
  $update->save();
  return redirect('/performance')->with('msg','Updated Successfully');
}
public function perfdelete($id)
{
  $delete=student::find($id)->delete();
  return redirect('/performance')->with('msg1','Updated Successfully');

}
public function assigndisplay()
{
  $student=student::all();
  $room = room::all();
  return view('admin_assigstud',['student'=>$student], ['room'=>$room]);
}
public function assigndisplay1()
{
  $teacher=teacher::all()->where('approve', 1);
  $room = room::all();
  return view('admin_assignteach',['teacher'=>$teacher] , ['room'=>$room]);
}

public function assigndisplay_sub()
{
  $sub=subject::all();
  $room = room::all();
  return view('admin_assign_sub',['sub'=>$sub], ['room'=>$room]);
}
public function assign_stu(Request $request)
{

$data = room::find($request->gender);
$da = $request->input('list');
foreach($da as $d) {
  $data->students()->attach($d);
}

  return redirect('/assignstud')->with('msg', 'Students Added Successfully');
}

public function assign_tea(Request $request)
{

$data = room::find($request->gender);
$da = $request->input('list');
foreach($da as $d) {
  $data->teachers()->attach($d);
}

  return redirect('/assignteach')->with('msg', 'Teachers Added Successfully');
}

public function assign_sub(Request $request)
{

$data = room::find($request->gender);
$da = $request->input('list');
foreach($da as $d) {
  $data->subjects()->attach($d);
}

  return redirect('/assignsubj')->with('msg', 'Subjects Added Successfully');
}

public function addroom(Request $request)
{
  $room = new room;
  $room->room_no = $request->input('room');
  $room->save();
  return redirect('/adclass')->with('msg', 'Class Added');
}

public function addsub(Request $request)
{
  $sub = new subject;
  $sub->subjects = $request->input('sub');
  $sub->code = $request->input('code');
  $sub->save();
  return redirect('/adsubject')->with('msg', 'Subject Added');
}

public function main_class(Request $request)
{
$room = room::all();
return view('/admin_class', ['room' =>$room]);
}

public function search(Request $request)
{
  $room = room::all();
  $rooms = room::find($request->gender);
  $sub = $rooms->subjects;
  $teach =$rooms->teachers;
  $stud = $rooms->students;
  return view('/admin_class', ['teach' =>$teach], ['sub' =>$sub])->with(['stud' => $stud])->with(['room' => $room]);
}

public function myclass_marks($id)
{
  $edit= student::find($id);
  return view('myclass_marks', ['edit'=>$edit]);
}

public function myclass_attend($id)
{
  $edit= student::find($id);
  return view('myclass_attend', ['edit'=>$edit]);
}

public function attend(Request $request, $id)
{
    $update= student::find($id);
    $update->name = $request->name;
    $update->attend1 = $request->attend1;
    $update->attend2 = $request->attend2;
    $update->attend3 = $request->attend3;
    $update->attend4 = $request->attend4;
    $update->attend5 = $request->attend5;
    $update->attend6 = $request->attend6;
    $update->save();
    return redirect('/class');
}

public function mark(Request $request, $id)
{
    $update= student::find($id);
    $update->name = $request->name;
    $update->mark1 = $request->mark1;
    $update->mark2 = $request->mark2;
    $update->mark3 = $request->mark3;
    $update->mark4 = $request->mark4;
    $update->mark5 = $request->mark5;
    $update->mark6 = $request->mark6;
    $update->save();
    return redirect('/class');
}
}
