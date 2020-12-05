<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\teacher;
use App\student;
use App\room;
use App\subject;
use Illuminate\Support\Str;
use \App\Mail\SendMail;
use App\Charts\AdminChart;
use Crypt;
use Cookie;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data1=teacher::all()->where('approve', 1);
      return view('dash.teacherdata',["data2"=>$data1]);
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

        $teach = new teacher;
        $teach->name = $request->input('name');
        $teach->email_id = $request->input('email_id');
        $teach->dob = $request->input('dob');
        $teach->id_no = $request->input('id_no');
       // $teach->room_no = $request->input('room_no');
        $teach->phone = $request->input('phone');
        $teach->address = $request->input('address');
        $teach->qualification = $request->input('quali');
        $teach->experience = $request->input('exp');
        $teach->gender = $request->input('gender');
        $teach->approve = 1;
        if($request->hasfile('image'))
        {
          $file=$request->file('image');
          $extension=$file->getClientOriginalExtension();
          $filename=mt_rand().'.'.$extension;
          $file->move('uploads/',$filename);
          $teach->image=$filename;

        }
        else{
          $teach->image='';
        }
        $pass = Str::random(10);
              $teach->password = Crypt::encrypt($pass);
              $details = [
                        'pass' => $pass,
                        'title' => 'LOGIN PASSWORD ',
                        'body' => 'Do not share this with anyone'
                    ];

                    \Mail::to($request->input('email_id'))->send(new SendMail($details));
        $teach->save();
        return redirect('/dash');
    }



    public function store_public(Request $request)
    {

        $teach = new teacher;
        $teach->name = $request->input('name');
        $teach->email_id = $request->input('email_id');
        $teach->dob = $request->input('dob');
        $teach->id_no = $request->input('id_no');
        $teach->phone = $request->input('phone');
        $teach->address = $request->input('address');
        $teach->qualification = $request->input('quali');
        $teach->experience = $request->input('exp');
        $teach->gender = $request->input('gender');
        $teach->approve = 0;
        if($request->hasfile('image'))
        {
          $file=$request->file('image');
          $extension=$file->getClientOriginalExtension();
          $filename=mt_rand().'.'.$extension;
          $file->move('uploads/',$filename);
          $teach->image=$filename;

        }
        else{
          $teach->image='';
        }
        /*
        $pass = Str::random(10);
              $teach->password = Crypt::encrypt($pass);
              $details = [
                        'pass' => $pass,
                        'title' => 'LOGIN PASSWORD ',
                        'body' => 'Do not share this with anyone'
                    ];

                    \Mail::to($request->input('email_id'))->send(new SendMail($details));
                    */
        $teach->save();
        return redirect('/home');
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

public function count()
{
  $count = teacher::find(Cookie::get('id'))->room->count();
  $data = teacher::find(Cookie::get('id'));
  $chart = new AdminChart;
     $chart->labels(['classes', 'Students','Attendance','Present Count']);
     $chart->dataset('Total Count', 'bar', [$count])->backgroundcolor(['#EB984E', '#28B463', '#E74C3C','#A569BD']);
  return view('dash.teaherpanel', ['count' => $count], ['data' => $data])->with(compact('chart'));

}
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $edit = teacher::find($id);
      return view('admin_teach_edit', ['edit' => $edit]);
    }

    public function change_pass($id)
    {
        $pass = teacher::find($id);
        return view('teach_change', ['pass' => $pass]);
    }

    public function update_pass(Request $request, $id)
    {
      $this->validate($request , [
        'old' => 'required',
        'new' => 'required',
        'cnew' => 'required|same:new'
      ]);
        $update = teacher::find($id);
        if(Crypt::decrypt($update->password) == $request->old)
        {
          $update->password = Crypt::encrypt($request->new);
          $update->save();
          return redirect('/tealog')->with('msg1', 'Password changed Successfully');
        }
        else {
          return back()->with('msg', 'Old password incorrect');
        }

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
      $update = teacher::find($id);
      $update->name = $request->input('name');
      $update->email_id = $request->input('email_id');
      $update->dob = $request->input('dob');
      $update->id_no = $request->input('id_no');
      $update->room_no = $request->input('room_no');
      $update->phone = $request->input('phone');
      $update->address = $request->input('address');
      $update->qualification = $request->input('quali');
      $update->experience = $request->input('exp');
      $update->gender = $request->input('gender');
      $update->save();
      return redirect('/teachdata')->with('msg', 'Table Edited Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $del = teacher::find($id);
      $del->delete();
      return redirect('/teachdata')->with('msg1', 'Data Deleted Successfully');
    }


    public function login(Request $request)
    {
      $this->validate($request, [
        'mail' => 'required|email',
        'pass' => 'required'
      ]);
      $login = teacher::where('email_id', $request->input('mail'))->get();
      if($login->isEmpty())
      {
        return redirect('/tealog')->with('msg', 'Invalid Email');
      }
      else {
        if($login[0]->approve == 1 )
        {
          if(Crypt::decrypt($login[0]->password) == $request->input('pass'))
          {
            $request->session()->put('teacher', $login[0]->name);
            $request->session()->put('pic', $login[0]->image);
            $request->session()->put('email', $login[0]->email_id);

            return redirect('/teachdash')->withCookie(cookie('id',$login[0]->id));
          }
          else {
            return redirect('/tealog')->with('msg', 'Invalid Password');
          }
        }
        else{
          return redirect('/tealog')->with('msg', 'Approval Pending');
        }


      }
    }

    public function approve()
    {
      $approve = teacher::all()->where('approve', 0);
      return view('approval', ['approve' => $approve]);
    }

    public function approved($id)
    {
      $teach = teacher::find($id);
      $teach->approve = 1;
      $pass = Str::random(10);
            $teach->password = Crypt::encrypt($pass);
            $details = [
                      'pass' => $pass,
                      'title' => '[Application Approved]',
                      'body' => 'Do not share this with anyone'
                  ];

                  \Mail::to($teach->email_id)->send(new SendMail($details));
                  $teach->save();
      return redirect('approve')->with('msg', 'Approved Successfully');
    }

    public function reject($id)
    {
      $teach = teacher::find($id);
      $teach->delete();
      return redirect('approve')->with('msg1', 'Rejected Successfully');
    }


    public function photo($id)
    {
      $pic=teacher::find($id);
      return view('changeteachpic',['id'=>$pic]);
    }
    public function update1(Request $request, $id)
    {
       $data=teacher::find($id);
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
       return redirect('/teachdash');

    }
    public function profile($id)
{
  $profile=teacher::where('id',$id)->get();
  session()->put('pic', $profile[0]->image);
  session()->put('name', $profile[0]->name);
  session()->put('email', $profile[0]->email_id);
  session()->put('dob', $profile[0]->dob);
  session()->put('id1', $profile[0]->id_no);
  session()->put('phone', $profile[0]->phone);
  session()->put('gender', $profile[0]->gender);
  session()->put('address', $profile[0]->address);
  return redirect('/myprof1');
}

public function room_dis(Request $request)
{
  $rooms = teacher::find(Cookie::get('id'));
  $room = $rooms->room;
  return view('/teacher_class', ['room' => $room]);
}

public function teach_search(Request $request)
{
  $rooms = teacher::find(Cookie::get('id'));
  $room = $rooms->room;
  $ro = room::find($request->gender);
  $stud = $ro->students;
  $sub = $ro->subjects;
  return view('/teacher_class',['room' => $room], ['stud' => $stud])->with(['sub' => $sub] );

}
}
