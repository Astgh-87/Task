@extends('layouts.app')

@section('content')
    <!DOCTYPE html>

<body>
<h1 class="text-3xl font-bold underline">
    Companies list!
</h1>
</body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card ">
                <div class="card-header">{{ __('Companies') }}</div>

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
                                    <th scope="col">Company</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Website</th>
                                    <th scope="col">Logo</th>
                                    <th scope="col">Employees</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>

                            @foreach($companies as $item)

                                <tr>
                                         <th scope="row">{{ $item->id}}</th>
                                        <td>{{ $item->name}}</td>
                                        <td>{{ $item->email}}</td>
                                        <td>{{ $item->website}}</td>

                                    <td><img alt="" src="{{ url('public/Image/'.$item->logo) }}"
                                             style="height: 100px; width: 100px;">
                                        </td>
                                    @foreach($item->employees as $employ)

                                    <td> {{ $employ->id }} </td>
                                    @endforeach
                                    <td>
                                        <a href={{ url('update/'.$item->id) }}><button type="button"  class="btn btn-outline-primary" data-dismiss="modal">Update</button></a>
                                        <a href={{ url('delete-company/'.$item->id) }}><button type="submit" class="btn btn-outline-danger ml-1" onClick='showModel({!! $item->id !!})'>Delete</button></a>

                                        </td>
                                </tr>

                            @endforeach
                            </tbody>
                            </table>
                    </div>
                </div>
                <a href="{{ url('createCompany') }}" class="btn btn-lg btn-info"> Create Company</a>
                <a href="{{ url('home') }}" class="btn btn-lg btn-info">Home</a>
            </div>
        </div>
    </div>


@endsection
