@extends('layouts.app')

@section('content')

    <body>
    <h1 class="text-3xl font-bold underline">
        Employees list!
    </h1>
    </body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card ">
                <div class="card-header">{{ __('Employees') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Firtsname</th>
                            <th scope="col">Lastname</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Company name</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($employees as $item)

                        <tr>
                            <th scope="row">1</th>
                            <td>{{ $item->firstName}}</td>
                            <td>{{ $item->lastName}}</td>
                            <td>{{ $item->email}}</td>
                            <td>{{ $item->phone}}</td>
                            <td>{{ $item->companies->name }}</td>

                            <td>
                                <a href={{ url('updateE/'.$item->id) }}><button type="button"  class="btn btn-outline-primary" data-dismiss="modal">Update</button></a>
                                <a href={{ url('delete-employee/'.$item->id) }}><button type="submit" class="btn btn-outline-danger ml-1" onClick='showModel({!! $item->id !!})'>Delete</button></a>
                            </td>
                        </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <a href="{{ url('createEmployee') }}" class="btn btn-lg btn-info"> Create Employee</a>
            <a href="{{ url('home') }}" class="btn btn-lg btn-info">Home</a>
        </div>
    </div>
</div>


@endsection
