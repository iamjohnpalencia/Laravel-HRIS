<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function personal()
    {   
        return view('personal');
    }
    public function timesheet()
    {   
        return view('timesheet');
    }
    public function daily()
    {   
        return view('daily');
    }
    public function leaveledger()
    {   
        return view('leave');
    }
    public function announcement()
    {   
        return view('announcement');
    }
    public function update()
    {   
        return view('update');
    }
}
