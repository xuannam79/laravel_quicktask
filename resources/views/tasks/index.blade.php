@extends('layouts.app')

@section('content')

    <div class="panel-body">
        @include('common.errors')

        {!! Form::open(['route'=>'tasks.index', 'method'=>'POST', 'class'=>'form-horizontal']) !!}
        	<div class="form-group">
        		{!! Form::label('task-name', trans('messages.task'), ['class'=>'col-sm-3 control-label']) !!}
        		<div class="col-sm-6">
                    {!! Form::text('name', '', ['id'=>'task-name', 'class'=>'form-control']) !!}
                </div>
        	</div>
        	<div class="form-group">
        		<div class="col-sm-offset-3 col-sm-6">
        			{!! Form::submit(trans('messages.addTask'), ['class'=>'btn btn-default']) !!}
        		</div>
        	</div>
        {!! Form::close() !!}

    </div>

@endsection
