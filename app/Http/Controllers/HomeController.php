<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\depart_table;

class HomeController extends Controller
{
    //Show Department
    public function dropdown(Request $request)
    {
        $department = depart_table::all();
        return view('adddepartment', compact('department'));
    }
}
