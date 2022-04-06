@extends('layouts.layout-dash')
@section('content-data')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Users Management</h2>
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
   <th>Email</th>
   <th >Roles</th>
   <th width="280px">Action</th>
 </tr>
 @foreach ($data as $key => $user)
  <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td style="color: white">
      @if(!empty($user->getRoleNames()))
        @foreach($user->getRoleNames() as $v)
           <label class="badge bg-success">{{ $v }}</label>
        @endforeach
      @endif
    </td>
    <td>
       <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
       @can('user-edit')
       <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
       @endcan
       @can('user-delete')
        <form action="{{ route('users.destroy', $user->id) }}" style="display: inline" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">
                Delete
            </button>
        </form>
        @endcan
    </td>
  </tr>
 @endforeach
</table>
<nav class="navbar " style="background-color: #ffff; border-radius: 20px; height: 40px;" >
    <div class="pull-right mb-4" style="margin-left: 87%" >
        @can('user-create')
        <a  href="{{ route('users.create') }}" style="color: black ">
        <span class="iconify" data-icon="akar-icons:circle-plus-fill" style="font-size: 20px; margin-right: 7px">
        </span>Create New User </a>
        @endcan
    </div>
</nav>

{!! $data->render() !!}
@endsection
@endsection
