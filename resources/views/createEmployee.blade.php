@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ ('Create') }}</div>

{{--                    @foreach($companies as $item)--}}
{{--                            <th scope="row">{{ $item->id}}</th>--}}
{{--                            <td>{{ $item->name}}</td>--}}
{{--                            <td>{{ $item->email}}</td>--}}
{{--                    @endforeach--}}
                    <div class="card-body">
                        <form method="POST" action="{{url('insertEmployee')}}" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('firstName') }}</label>
                                <input type="text" name="firstName">
                            </div>
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('lastName') }}</label>
                                <input type="text" name="lastName">
                            </div>

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>
                                <input type="text" name="email">
                            </div>

                            <div class="row mb-3">
                                <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Phone') }}</label>
                                <input type="text" name="phone">
                            </div>
                            <div class="row mb-3">
                                <label for="company" class="col-md-4 col-form-label text-md-end">{{ __('Company') }}</label>
                                <input type="text" name="company">
                            </div>

                            <button type="submit" >Create employee</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection


