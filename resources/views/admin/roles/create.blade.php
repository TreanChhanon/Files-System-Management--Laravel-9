@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.roles.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.roles.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_create')
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('title', trans('quickadmin.roles.fields.title').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('title', old('title'), ['class' => 'form-control', 'placeholder' => 'Roles Name', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('title'))
                        <p class="help-block">
                            {{ $errors->first('title') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-success']) !!}
    <a href="{{ route('admin.roles.index') }}" class="btn btn-danger">@lang('quickadmin.qa_back_to_list')</a>
    {!! Form::close() !!}
@stop

