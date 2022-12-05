<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;


class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $employees = Employee::with('companies')->paginate(10);
        return view('employee', compact('employees'));
    }

//    public function index()
//    {
//        $employees = Employee::query()
//        ->with('company')
//        ->get();
//        return view('employee', compact('employees'));
//    }

    public function create()
    {
        $companies = Company::select('id', 'name')->get();
        return view('createEmployee', compact('companies'));
    }

    public function insertE(Request $request)
    {
//     dd($request->all());
      Employee::query()
           ->create(['firstName' => $request->get('firstName'),
              'lastName' => $request->get('lastName'), 'email' => $request->get('email'),
                'phone' => $request->get('phone'), 'company' =>$request->get('company') ]);

          return redirect()->route('employees',);
    }

    public function goUpdateEmployee($id)
    {
        return view('updateEmployee', compact('id'));
    }

    public function updateEmployee(int $id, Request $request)
    {
        $firstName = $request->get('firstName');
        $lastName = $request->get('lastName');
        $email = $request->get('email');
        $phone = $request->get('phone');
        $company = $request->get('company');

        Employee::query()
            ->where('id', '=', $id)
            ->update(['firstName' => $firstName,'lastName' => $lastName,
                'email' => $email, 'phone' => $phone, 'company' => $company]);

        return redirect()->route('employees');
    }

    public function delete(int $id)
    {
        Employee::query()
            ->where('id', '=', $id)
            ->delete();
        return redirect()->route('employees');
    }

}
