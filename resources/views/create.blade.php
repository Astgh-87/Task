@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ ('Create Company') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ url('insert-company')}}" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                                <input type="text" name="name">
                            </div>

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>
                                <input type="text" name="email">
                            </div>

                            <div class="row mb-3">
                                <label for="website" class="col-md-4 col-form-label text-md-end">{{ __('Website') }}</label>
                                <input type="text" name="website">
                            </div>

                            <div class="row mb-3">
                                <label for="logo" class="col-md-4 col-form-label text-md-end">{{ __('Logo') }}</label>
                                <input type="file" name="logo" class="form-control">
                            </div>

                            <button type="submit">Create Company</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection


