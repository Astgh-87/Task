<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyRequest;
use App\Models\Company;
use App\Models\Employee;
use DB;

class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $companies = Company::withCount('employees')->paginate(10);
//        $count2 = Employee::where('company', '=','')->count();
//        dd($count2);
        return view('company', ['companies' =>$companies]);


    }


    public function create()
    {
        return view('create',);
    }

    public function createCompany(CompanyRequest $request)
    {
        if ($request->file('logo')) {
            $file = $request->file('logo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/Image'), $filename);
        }
        Company::query()->create(['name' => $request->get('name'), 'email' => $request->get('email'),
            'website' => $request->get('website'), 'logo' => $filename]);

        return redirect()->route('companies');
    }

//    public function show($id)
//    {
//        $company = Company::find($id);
//        return view('admin.companies.show', compact('company'));
//    }



    public function addLogo()
    {
        return view('create');
    }

    public function goUpdate($id)
    {
        return view('update', compact('id'));

    }

    public function update(int $id, CompanyRequest $request)
    {
        $name = $request->get('name');
        $email = $request->get('email');
        $website = $request->get('website');
        $file = $request->file('logo');
        $filename = date('YmdHi') . $file->getClientOriginalName();
        $file->move(public_path('public/Image'), $filename);
        Company::query()
            ->where('id', '=', $id)
            ->update(['name' => $name, 'email' => $email, 'website' => $website, 'logo' => $filename]);
        return redirect()->route('companies');
    }

    public function delete(int $id)
    {
        Company::query()
            ->where('id', '=', $id)
            ->delete();
        return redirect()->route('companies');
    }

}
