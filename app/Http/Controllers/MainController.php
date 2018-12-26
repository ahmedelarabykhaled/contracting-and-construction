<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Employee;
use App\User;

class MainController extends Controller
{
    public function index()
    {
        return view('pages.nabza');
    }
    public  function nabza()
    {
        return view('pages.nabza');
    }
    public function akhbar()
    {
        return view('pages.akhbar');
    }
    public function mokawalate()
    {
        return view('pages.mokawalate');
    }
    public function masharee3()
    {
        return view('pages.masharee3');
    }
    public function makalate()
    {
        return view('pages.makalate');
    }
    public function etasel()
    {
        return view('pages.etasel');
    }
    public function talabas3ar()
    {
        return view('pages.talabas3ar');
    }
    public function userlogin()
    {
        return view('user.login');
    }
    public function userlogout()
    {
        Auth::logout();
        return back();
    }
    public function user(Request $request)
    {
        $user = User::where('email',$request->email)->get();
        if (sizeof($user) > 0)
        {
            if (Hash::check($request->password,$user[0]->password))
            {
                Auth::login($user[0]);
                return redirect('/');
            }
            else
            {
                return 'wrong password';
            }
        }
        else
        {
            return 'email worng';
        }
    }
    public function employeelogin()
    {
        return view('employee.login');
    }
    public function employeelogout()
    {
        Auth::guard('employee')->logout();
        return back();
    }
    public function employee(Request $request)
    {
        $employee = Employee::where('email',$request->email)->get();
        if (sizeof($employee) > 0)
        {
            if (Hash::check($request->password,$employee[0]->password))
            {
                Auth::guard('employee')->login($employee[0]);
                return redirect('/');
            }
            else
            {
                return back();
            }
        }
        else
        {
            return back();
        }
    }
    public function sign()
    {
        $employee = new User;
        $employee->name = 'mohammed';
        $employee->email = 'mohammed@yahoo.com';
        $employee->password = Hash::make('111111');
        $employee->save();
        return back();
    }
}
