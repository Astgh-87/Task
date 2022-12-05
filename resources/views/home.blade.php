@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('COMPANY') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="container">
                            <div class="jumbotron text-center">
                                <h2 class="text-center">Manage Companies and Employees</h2>
                                <p class="text-center lead">You are logged in. You can now manage companies and employees on the system</p>
                                <br>

                            </div>
                        </div>
                        <a href="{{ url('companies') }}" class="btn btn-lg btn-info">Companies</a>
                        <a href="{{ url('employees') }}" class="btn btn-lg btn-info">Employees</a>
                    {{ __('You are logged in!') }}
                </div>
            </div>
            <div class="flex min-h-screen items-center justify-center bg-zinc-500">
                <div class="flex select-none space-x-1 text-gray-700">
                    <a href="{{ url('companies') }}" class="rounded-md bg-gray-200 px-4 py-2 transition duration-300 hover:bg-gray-400"> Previous </a>
                    <a href="{{ url('employees') }}" class="rounded-md bg-gray-200 px-4 py-2 transition duration-300 hover:bg-gray-400"> 1 </a>
                    <a href="{{ url('companies') }}" class="rounded-md bg-gray-200 px-4 py-2 transition duration-300 hover:bg-gray-400"> 2 </a>
                    <a href="#" class="rounded-md bg-gray-200 px-4 py-2 transition duration-300 hover:bg-gray-400"> 3 </a>
                    <span class="rounded-md px-4 py-2"> ... </span>
                    <a href="#" class="rounded-md bg-gray-200 px-4 py-2 transition duration-300 hover:bg-gray-400"> 10 </a>
                    <a href="#" class="rounded-md bg-gray-200 px-4 py-2 transition duration-300 hover:bg-gray-400"> Next </a>
                </div>

            </div>
    </div>
</div>
</div>
@endsection
