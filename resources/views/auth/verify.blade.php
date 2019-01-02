@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">@lang('messages.veriryMail')</div>

                <div class="card-body">
                    @include('common.errors')

                    @lang('messages.veriryMailMess1')
                    @lang('messages.veriryMailMess2'), <a href="{{ route('verification.resend') }}">@lang('messages.veriryMailMess3')</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
