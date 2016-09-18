@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Setting {{ $setting->id }}
        <a href="{{ url('admin/settings/' . $setting->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Setting"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
        {!! Form::open([
            'method'=>'DELETE',
            'url' => ['admin/setting', $setting->id],
            'style' => 'display:inline'
        ]) !!}
            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                    'type' => 'submit',
                    'class' => 'btn btn-danger btn-xs',
                    'title' => 'Delete Setting',
                    'onclick'=>'return confirm("Confirm delete?")'
            ))!!}
        {!! Form::close() !!}
        <a href="{{ url('admin/settings') }}" class="btn btn-warning btn-xs pull-right" title="Back">Back</a>
    </h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr>
                    <th>ID</th><td>{{ $setting->id }}</td>
                </tr>
                <tr><th> Name </th><td> {{ $setting->name }} </td></tr><tr><th> Value </th><td> {{ $setting->value }} </td></tr><tr><th> Status </th><td> {{ $setting->status }} </td></tr>
            </tbody>
        </table>
    </div>

</div>
@endsection
