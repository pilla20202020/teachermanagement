<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Teacher\Teacher;
use App\Models\Subject;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        //
        $teachers = Teacher::get();
        return view('dashboard.index',compact('teachers'));
    }

    public function create()
    {
        //
        return view ('dashboard.form');

    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ]);
        $input = $request->except('subject');
        $createteacher = Teacher::create($input);
        $subjects = [];
        foreach ($request->subject as $subjects){
            $data['subject_title'] = $subjects;
            $data['teacher_id'] = $createteacher->id;
            $data['row'] = Subject::create($data);
        }
        return redirect()->route('dashboard.index');

    }
}
