<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\depart_table;
use App\Models\cources_table;
use App\Models\teacher_table;
use App\Models\student_table;
use App\Models\User;

class AuthController extends Controller
{
    //
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
    //Add Department
    public function InsertDepartment(Request $request)
    {
        $dep_name = $request->input('dep_name');
        $h_name = $request->input('hed_name');
        $head_num = $request->input('hed_contract');

        $isInsertSuccress = depart_table::insert([
            'c_name' => $dep_name,
            'h_name' => $h_name,
            'h_con' => $head_num,
        ]);
        if ($isInsertSuccress) {
            return view('adddepartment');
        } else {
            return view('adddepartment');
        }
    }
    // Add Cources
    public function InsertCources(Request $request)
    {
        $cource_name = $request->input('name');
        $cource_code = $request->input('code');

        $isInsertSuccress = cources_table::insert([
            'cource_name' => $cource_name,
            'cource_code' => $cource_code
        ]);
        if ($isInsertSuccress) {
            return view('dashboard');
        } else {
            return view('addcources');
        }
    }
    // Add Teacher
    public function InsertTeacher(Request $request)
    {
        $teacher_name = $request->input('t_name');
        $teacher_contract = $request->input('t_contract');
        $sub_teacher = $request->input('t_subject');

        $isInsertSuccress = teacher_table::insert([
            'name' => $teacher_name,
            'contract' => $teacher_contract,
            'sub' => $sub_teacher
        ]);
        if ($isInsertSuccress) {
            return view('dashboard');
        } else {
            return view('addteacher');
        }
    }
    public function InsertStudent(Request $request)
    {
        $stu_name = $request->input('s_name');
        $father_name = $request->input('f_name');
        $mother_name = $request->input('m_name');
        $add1 = $request->input('pre_add');
        $add2 = $request->input('perm_add');
        $gardian_name = $request->input('gar_name');
        $gardian_contract = $request->input('gar_con');
        $date = $request->input('date_birth');
        $website = $request->input('web');
        $phone = $request->input('phone');
        $email = $request->input('e_mail');
        $national = $request->input('national');
        $religion = $request->input('religion');
        $department = $request->input('department');
        $id = $request->input('stu_id');
        $batch = $request->input('batch');
        $section = $request->input('section');

        $isInsertSuccress = student_table::insert([
            'name' => $stu_name,
            'father_name' => $father_name,
            'mother_name' => $mother_name,
            'add1' => $add1,
            'add2' => $add2,
            'g_name' => $gardian_name,
            'g_info' => $gardian_contract,
            'date_of_birth' => $date,
            'website' => $website,
            'phone' => $phone,
            'email' => $email,
            'national' => $national,
            'religion' => $religion,
            'department' => $department,
            'student_id' => $id,
            'batch' => $batch,
            'section' => $section
        ]);
        if ($isInsertSuccress) {
            return view('dashboard');
        } else {
            return view('addstudent');
        }
    }
    // ShowDepartment
    public function ShowDepartment(Request $request)
    {
        $record = depart_table::all();
        return view('alldepartment', compact('record'));
    }
    // allcources
    public function ShowCources(Request $request)
    {
        $cources = cources_table::all();
        return view('allcources', compact('cources'));
    }
    // allteacher
    public function ShowTeacher(Request $request)
    {
        $teacher = teacher_table::all();
        return view('allteacher', compact('teacher'));
    }
    // All Student
    public function ShowStudent(Request $request)
    {
        $student = student_table::all();
        return view('allstudent', compact('student'));
    }
    // Dashboard
    public function Dashboard(Request $request)
    {
        $student = student_table::all();
        $teacher = teacher_table::all();
        $cources = cources_table::all();
        $record = depart_table::all();
        $record_count = depart_table::count();
        $cources_count = cources_table::count();
        $teacher_count = teacher_table::count();
        $student_count = student_table::count();
        return view('dashboard', compact('student', 'teacher', 'cources', 'record', 'record_count', 'cources_count', 'teacher_count', 'student_count'));
    }
    // detailsstudent
    public function ShowDateils(Request $request)
    {
        $student = student_table::all();
        return view('detailsstudent', compact('student'));
    }
}
