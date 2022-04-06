@extends('layouts.layout-dash')
@section('content-role')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Role Management</h2>
        </div>
    </div>
</div>


@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif


<table class="table table-bordered">
  <tr>
      <th>No</th>
      <th>Name</th>
      <th width="280px">Action</th>
  </tr>
  @foreach ($roles as $key => $role)
  <tr>
      <td>{{ ++$i }}</td>
        <td>{{ $role->name }}</td>
        <td>
            <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Show</a>
            @can('role-edit')
            <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a>
            @endcan
            @can('role-delete')
            {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
            @endcan
        </td>
    </tr>
    @endforeach
</table>
<nav class="navbar " style="background-color: #ffff; border-radius: 20px; height: 40px;">
    <div class="pull-right mb-4" style="margin-left: 87%" >
        @can('task-create')
        <a  href="{{ route('roles.create') }}" style="color: black ">
        <span class="iconify" data-icon="akar-icons:circle-plus-fill" style="font-size: 20px; margin-right: 7px">
        </span>Create New Role </a>
        @endcan
    </div>
</nav>

{!! $roles->render() !!}
@endsection
@endsection
