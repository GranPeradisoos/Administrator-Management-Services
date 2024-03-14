<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\depart_table;
use App\Models\course_table;
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
}
