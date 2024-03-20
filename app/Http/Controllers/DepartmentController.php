<?php

namespace App\Http\Controllers;

use App\Models\depart_table;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    //
    public function index()
    {
        $departments = depart_table::all();
        return view('addstudent', compact('departments'));
    }
}
