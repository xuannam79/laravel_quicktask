@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">@lang('messages.btn_login')</div>

                <div class="card-body">
                    @include('common.errors')
                    {!! Form::open(['method'=>'POST', 'route'=>'login']) !!}

                        <div class="form-group row">
                            {!! Form::label('email', trans('messages.lb_mail'), ['class'=>'col-md-4 col-form-label text-md-right']) !!}

                            <div class="col-md-6">
                                {!! Form::email('email', old('email'), ['id'=>'email', 'required autofocus', 'class'=>'form-control']) !!}

                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('password', trans('messages.lb_password'), ['class'=>'col-md-4 col-form-label text-md-right']) !!}

                            <div class="col-md-6">
                                {!! Form::password('password', ['id'=>'password', 'class'=>'form-control', 'required']) !!}

                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    {!! Form::checkbox('remember', old('remember'), '', ['id'=>'remember', 'class'=>'form-check-input']) !!}

                                    {!! Form::label('remember', trans('messages.lb_remember'), ['class'=>'form-check-label']) !!}
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                {!! Form::submit(trans('messages.btn_login'), ['class'=>'btn btn-primary']) !!}

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        @lang('messages.btn_forgotPass')
                                    </a>
                                @endif
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
