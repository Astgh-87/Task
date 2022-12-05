<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyRequest;
use App\Models\Company;
use App\Models\Employee;

class HomeController extends Controller
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


    public function index()
    {
        return view('home');
    }
//
//    public function index1()
//    {
//        $companies = Employee::query()
//            ->with('employees')
//            ->get();
//        return view('employees', compact('companies'));
//    }


}



