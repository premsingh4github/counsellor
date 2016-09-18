@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Setting <a href="{{ url('/admin/settings/create') }}" class="btn btn-primary btn-xs" title="Add New Setting"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th> Name </th><th> Value </th><th> Status </th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($setting as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td><td>{{ $item->value }}</td><td>{{ $item->status }}</td>
                    <td>
                        <a href="{{ url('/admin/settings/' . $item->id) }}" class="btn btn-success btn-xs" title="View Setting"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                        <a href="{{ url('/admin/settings/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Setting"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['/admin/settings', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Setting" />', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Setting',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            )) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination-wrapper"> {!! $setting->render() !!} </div>
    </div>

</div>
@endsection
