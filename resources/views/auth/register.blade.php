@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">@lang('messages.btn_register')</div>

                <div class="card-body">
                    @include('common.errors')
                    {!! Form::open(['method'=>'POST', 'route'=>'register']) !!}

                        <div class="form-group row">

                            {!! Form::label('name', trans('messages.lb_name'), ['class'=>'col-md-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                {!! Form::text('name', old('name'), ['id'=>'name', 'class'=>'form-control', 'required autofocus']) !!}

                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('email', trans('messages.lb_mail'), ['class'=>'col-md-4 col-form-label text-md-right']) !!}

                            <div class="col-md-6">
                                {!! Form::text('email', old('email'), ['id'=>'email', 'class'=>'form-control', 'required']) !!}

                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('password', trans('messages.lb_password'), ['class'=>'col-md-4 col-form-label text-md-right']) !!}

                            <div class="col-md-6">
                                {!! Form::password('password', ['id'=>'password', 'class'=>'form-control', 'required']) !!}

                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('password-confirm', trans('messages.lb_confirmPass'), ['class'=>'col-md-4 col-form-label text-md-right']) !!}

                            <div class="col-md-6">
                                {!! Form::password('password_confirmation', ['id'=>'password-confirm', 'class'=>'form-control', 'required']) !!}

                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                {!! Form::submit(trans('messages.btn_register'), ['class'=>'btn btn-primary']) !!}
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
