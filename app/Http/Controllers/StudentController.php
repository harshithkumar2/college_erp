<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;
use App\teacher;
use App\room;
use App\studentsports;
use App\studentevent;
use App\studtransport;
use \App\Mail\SendMail;
use Illuminate\Support\Str;
use Crypt;
use Cookie;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=student::all();
        return view('dash.studentdata',["data1"=>$data]);
    }

    public function stud_display()
    {
        $data = student::find(Cookie::get('ids'));
        return view('/studentpanel', ['data' => $data]);
    }

    public function pannel_marks()
    {
        $data = student::find(Cookie::get('ids'));
        return view('/stud_panel_marks', ['data' => $data]);
    }

    public function pannel_attend()
    {
        $data = student::find(Cookie::get('ids'));
        return view('/stud_panel_attend', ['data' => $data]);
    }

    public function myclass(){
      $class = student::find(Cookie::get('ids'));
      $room = $class->rooms;
      $ro = room::find($room[0]->id);
      $class = $ro->teachers;
      $sub = $ro->subjects;
  return view('myclass', ['class' => $class], ['sub' => $sub]);
    }

    public function marks()
    {
        $rooms = teacher::find(Cookie::get('id'));
        $room = $rooms->room;
        return view('stud_marks_display', ['room'=>$room]);
    }

    public function edit_marks($id)
    {
        $edit= student::find($id);
        return view('stud_marks_edit', ['edit'=>$edit]);
    }

    public function mar_tea(Request $request)
    {
      $rooms = teacher::find(Cookie::get('id'));
      $room = $rooms->room;
      $ro = room::find($request->gender);
      $data = $ro->students;
      return view('stud_marks_display', ['room'=>$room], ['data'=>$data]);
    }

    public function update_marks(Request $request, $id)
    {
        $update= student::find($id);
        $update->mark1 = $request->mark1;
        $update->mark2 = $request->mark2;
        $update->mark3 = $request->mark3;
        $update->mark4 = $request->mark4;
        $update->mark5 = $request->mark5;
        $update->mark6 = $request->mark6;
        $update->save();
        return redirect('/myclass')->with('msg','Marks Updated Successfully');
    }

    public function attend()
    {
      //  $data= student::all();
      $rooms = teacher::find(Cookie::get('id'));
      $room = $rooms->room;
        return view('stud_attend_display', ['room'=>$room]);
    }

    public function attend_tea(Request $request)
    {
      $rooms = teacher::find(Cookie::get('id'));
      $room = $rooms->room;
      $ro = room::find($request->gender);
      $data = $ro->students;
      return view('stud_attend_display', ['room'=>$room], ['data'=>$data]);
    }

    public function edit_attend($id)
    {
        $edit= student::find($id);
        return view('stud_attend_edit', ['edit'=>$edit]);
    }

    public function update_attend(Request $request, $id)
    {
        $update= student::find($id);
        $update->attend1 = $request->attend1;
        $update->attend2 = $request->attend2;
        $update->attend3 = $request->attend3;
        $update->attend4 = $request->attend4;
        $update->attend5 = $request->attend5;
        $update->attend6 = $request->attend6;
        $update->save();
        return redirect('/myclass')->with('msg','Attendance Updated Successfully');
    }

    public function change_pass($id)
    {
        $pass = student::find($id);
        return view('stud_change', ['pass' => $pass]);
    }

    public function update_pass(Request $request, $id)
    {
      $this->validate($request , [
        'old' => 'required',
        'new' => 'required',
        'cnew' => 'required|same:new'
      ]);
        $update = student::find($id);
        if(Crypt::decrypt($update->password) == $request->old)
        {
          $update->password = Crypt::encrypt($request->new);
          $update->save();
          return redirect('/studlog')->with('msg1', 'Password changed Successfully');
        }
        else {
          return back()->with('msg', 'Old password incorrect');
        }

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
        'email_id' => 'required',
        'roll_no' => 'required',

        'phone' => 'required',
        'address' => 'required',
        'father_name' => 'required',
        'DOB' => 'required',
        'gender' => 'required',
        'district' => 'required',

        'blood_group' => 'required'

        //'room_no' => 'required'
      ]);
        $stud = new student;
        $stud->name = $request->input('name');
        $stud->email = $request->input('email_id');
        $stud->roll_no = $request->input('roll_no');
       // $stud->room_no = $request->input('room_no');

        $stud->phone = $request->input('phone');
        $stud->address = $request->input('address');
        $stud->parent_name = $request->input('father_name');
        $stud->DOB = $request->input('DOB');
        $stud->gender = $request->input('gender');
        $stud->district = $request->input('district');

        $stud->blood_group = $request->input('blood_group');

        if($request->hasfile('image'))
        {
          $file=$request->file('image');
          $extension=$file->getClientOriginalExtension();
          $filename=mt_rand().'.'.$extension;
          $file->move('uploads/',$filename);
          $stud->image=$filename;

        }
        else{
          $stud->image='';
        }
  $pass = Str::random(10);
        $stud->password = Crypt::encrypt($pass);
        $details = [
                  'pass' => $pass,
                  'title' => 'LOGIN PASSWORD ',
                  'body' => 'Do not share this with anyone'
              ];

              \Mail::to($request->input('email_id'))->send(new SendMail($details));
        $stud->save();
        return redirect('/dash');
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = student::find($id);
        return view('admin_stud_edit', ['edit' => $edit]);
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
        $update = student::find($id);
        $update->name = $request->input('name');
        $update->email = $request->input('email_id');
        $update->roll_no = $request->input('roll_no');
        $update->room_no = $request->input('room_no');

        $update->parent_name = $request->input('father_name');
        $update->DOB = $request->input('DOB');
        $update->gender = $request->input('gender');
        $update->phone = $request->input('phone');
        $update->address = $request->input('address');
        $update->district = $request->input('district');

        $update->blood_group = $request->input('blood_group');

        $update->save();
        return redirect('/studdata')->with('msg', 'Table Edited Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = student::find($id);
        $del->delete();
        return redirect('/studdata')->with('msg1', 'Data Deleted Successfully');
    }

    public function login(Request $request)
    {
      $login = student::where('email', $request->input('mail'))->get();
      if($login->isEmpty())
      {
        return redirect('studlog')->with('msg', 'Invalid Email');
      }
      else {
        if(Crypt::decrypt($login[0]->password) == $request->input('pass'))
        {
          $request->session()->put('student', $login[0]->name);
          $request->session()->put('stpic', $login[0]->image);
          return redirect('/studdash')->withCookie(cookie('ids', $login[0]->id));
        }
        else {
          return redirect('studlog')->with('msg', 'Invalid Password');
        }
      }
    }
    public function sports(Request $request)
    {
      $this->validate($request,[
        'name'=>'required',
        'usn'=>'required',
        'sport'=>'required',
        'email'=>'required',
        'phone'=>'required'
      ]);
      $data=new studentsports();
      $data->name=$request->name;
      $data->email=$request->email;
      $data->usn=$request->usn;
      $data->phone=$request->phone;
      $data->sports=$request->sport;
      $data->save();
      return redirect('/studdash');

    }
    public function cultural(Request $request)
    {
      $this->validate($request,[
        'name'=>'required',
        'usn'=>'required',
        'events'=>'required',
        'email'=>'required',
        'phone'=>'required'
      ]);
      $data=new studentevent();
      $data->name=$request->name;
      $data->email=$request->email;
      $data->usn=$request->usn;
      $data->phone=$request->phone;
      $data->event=$request->events;
      $data->save();
      return redirect('/studdash');

    }
    public function transport(Request $request)
    {
      $this->validate($request,[
        'name'=>'required',
        'usn'=>'required',
        'trans'=>'required',
        'email'=>'required',
        'phone'=>'required'
      ]);
      $data=new studtransport();
      $data->name=$request->name;
      $data->email=$request->email;
      $data->usn=$request->usn;
      $data->phone=$request->phone;
      $data->transport=$request->trans;
      $data->save();
      return redirect('/studdash');

    }
    public function profile($id)
{
  $profile=student::where('id',$id)->get();
  session()->put('pic', $profile[0]->image);
  session()->put('name', $profile[0]->name);
  session()->put('email', $profile[0]->email);
  return redirect('/myprof2');
}
public function photo($id)
{
  $pic=student::find($id);
  return view('changestudpic',['id'=>$pic]);

}
public function update1(Request $request, $id)
{
  $data=student::find($id);
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
  return redirect('/studdash');
}
}
