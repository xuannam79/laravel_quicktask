@extends('layouts.app')

@section('content')

    <div class="panel-body">
        @if(session()->has('msg'))
            <div class="alert alert-success">
                {{ session()->get('msg') }}
            </div>
        @endif
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
    
        @if (count($displayTasks) > 0)
            <div class="panel panel-default">
                <div class="panel-heading">
                    @lang('messages.currentTasks')
                </div>

                <div class="panel-body">
                    <table class="table table-striped task-table">

                        <thead>
                            <th>@lang('messages.task')</th>
                            <th>&nbsp;</th>
                        </thead>

                        <tbody>
                            @foreach ($displayTasks as $task)
                                <tr>
                                    <td class="table-text">
                                        <div>{{ $task->name }}</div>
                                    </td>

                                    <td>
                                        {!! Form::open(['route'=>['tasks.delete', $task->id], 'method'=>'DELETE']) !!}
                                            {!! Form::submit(trans('messages.btn_delete'), ['class'=>'btn btn-danger', 'data-confirm' => trans('messages.confirmDelete')]) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif 
    </div>

@endsection
