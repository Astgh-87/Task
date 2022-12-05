@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/build.css">
</head>
<body>
<button class="flex items-center px-4 py-3 text-white bg-blue-500 hover:bg-blue-400"></button>
</body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                @if(Auth::user())
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                @else
                    <div class="container">
                        <div class="jumbotron text-center">
                            <h2 class="text-center">Manage Companies and Employees</h2>
                            <p class="text-center lead">You will need to login first</p>
                            <br>
                            <a href="{{ route('login') }}" class="btn btn-lg btn-primary">login</a>
                        </div>
                    </div>
                @endif
            </div>
        </div>
@endsection
