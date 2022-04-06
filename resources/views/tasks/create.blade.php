@extends('layouts.layout-dash')
@section('content-data')
@section('content')
    <div>
        <div class="float-start">
            <h4 class="pb-3">Create Tasks</h4>
        </div>
        <div class="float-end">
            <a href="{{ route('tasks.index') }}" class="btn btn-info">
                <i class="fa fa-arrow-left"></i> All Task
            </a>
        </div>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="clearfix"></div>
    </div>
    <div class="card card-body bg-light p-4">
        <form action="{{ route('tasks.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="pic" class="form-label">PIC</label>
                <select name="pic" id="pic" class="form-control">
                <option value="" selected disabled hidden>Choose here</option>
                @foreach ($users as $user)
                    @if ($user->hasPermissionTo('can-be-pic'))
                        <option value="{{ $user->name }}">{{ $user->name }}</option>
                    @endif
                @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="start" class="form-label">Start Project</label>
                <input type="date" class="form-control" id="start" name="start">
            </div>
            <div class="mb-3">
                <label for="end" class="form-label">Deadline Project</label>
                <input type="date" class="form-control" id="end" name="end">
              </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea type="text" class="form-control" id="description" name="description" rows="5"></textarea>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">PIC Comment</label>
                <textarea type="text" class="form-control" id="picdescription" name="picdescription" rows="5"></textarea>
            </div>
            <div class="mb-3">
                <label for="upload" class="form-label">Upload File</label><br>
                <input type="file" name="file">
            </div>
            <div class="mb-3">
                <label for="upload" class="form-label">PIC Upload File</label><br>
                <input type="file" name="picfile">
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select name="status" id="status" class="form-control">
                    @foreach ($statuses as $status)
                        <option value="{{ $status['value'] }}">{{ $status['label'] }}</option>
                    @endforeach
                </select>
            </div>
            <a href="{{ route('tasks.index') }}" class="btn btn-secondary mr-2"><i class="fa fa-arrow-left"></i> Cancel</a>
            <button type="submit" class="btn btn-primary">
                <i class="fa fa-check"></i> Save
            </button>
          </form>
    </div>
@endsection
@endsection
