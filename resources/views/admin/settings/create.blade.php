@extends('layouts.app')
@section('content')
<div class="container">

    <h1>
        Create New Setting
        <a href="{{ url('admin/settings') }}" class="btn btn-warning btn-xs pull-right" title="Back">Back</a>

    </h1>
    <hr/>

    {!! Form::open(['url' => '/admin/settings', 'class' => 'form-horizontal', 'files' => true,'name'=>'nepali']) !!}
        @if($errors->any())
        <div class="form-group has-error">
            <div class="col-sm-6 col-sm-offset-3">
                    <ul class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
            </div>
        </div>
        @endif

            <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                {!! Form::label('name', 'Name', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <select onchange="changeLang(this,'value')">
                <option value="1">English</option>
                <option value="2">English to nepali</option>
                <option value="3">Nepali</option>
            </select>
            <div class="form-group {{ $errors->has('value') ? 'has-error' : ''}}">
                {!! Form::label('value', 'Value', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('unicodebox', null, ['class' => 'form-control','id'=>'value']) !!}
                    {!! $errors->first('value', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
                {!! Form::label('status', 'Status', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                   {!! Form::select('status',['1'=>'Active','0'=>'Inactive'], null, ['class' => 'form-control']) !!}
                    {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-3">
                {!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}
            </div>
        </div>
    {!! Form::close() !!}
</div>
@endsection
