@extends('layouts.layout-dash')
@section('content-role')
@section('content')

    <div>
        <div class="float-start">
            <h4 class="pb-3">Edit Task <span class="badge bg-info">{{ $task->title }}</span></h4>
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
        <form action="{{ route('tasks.update', $task->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            @can('title-edit')
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $task->title }}">
                </div>
            @endcan
            @cannot('title-edit')
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" readonly class="form-control" id="title" name="title" value="{{ $task->title }}">
                </div>
            @endcannot
            @can('pic-edit')
                <div class="mb-3">
                <label for="pic" class="form-label">PIC</label>
                <select name="pic" id="pic" class="form-control">
                <option value="{{ $task->pic }}" selected>{{ $task->pic }}</option>
                @foreach ($users as $user)
                    @if ($user->hasPermissionTo('can-be-pic') && $user->name != $task->pic)
                        <option value="{{ $user->name }}">{{ $user->name }}</option>
                    @endif
                @endforeach
                </select>
            </div>
            @endcan
            @cannot('pic-edit')
                <div class="mb-3">
                <label for="pic" class="form-label">PIC</label>
                {{-- <select name="pic" readonly id="pic" class="form-control">
                @foreach ($users as $user)
                    @if ($user->hasPermissionTo('pic'))
                        <option value="{{ $user->name }}">{{ $user->name }}</option>
                    @endif
                @endforeach --}}
                <input type="text" readonly class="form-control" id="pic" name="pic" value="{{ $task->pic }}">
                </select>
            </div>
            @endcannot
            @can('start-edit')
            <div class="mb-3">
                <label for="start" class="form-label">Start Project</label>
                <input type="date" class="form-control" id="start" name="start"  value="{{ $task->start }}">
            </div>
            @endcan
            @cannot('start-edit')
            <div class="mb-3">
                <label for="start" class="form-label">Start Project</label>
                <input type="date" readonly class="form-control" id="start" name="start"  value="{{ $task->start }}">
            </div>
            @endcannot
            @if (auth()->user()->cannot('deadline-edit'))
            <div class="mb-3">
                <label for="end" class="form-label">Deadline Project: </label><br>
                <input type="date" readonly class="form-control" id="end" name="end"  value="{{ $task->end }}">
            </div>
            {{-- @elseif ($task->status == 'Delayed')
                @cannot('deadline-edit')
                    <div class="mb-3">
                        <label for="end" class="form-label">Deadline Project: </label><br>
                        <input type="date" readonly class="form-control" id="end" name="end"  value="{{ $task->end }}">
                    </div>
                @endcannot
                @can('deadline-edit')
                    <div class="mb-3">
                        <label for="end" class="form-label">Deadline Project</label>
                        <input type="date" class="form-control" id="end" name="end"  value="{{ $task->end }}">
                    </div>
                @endcan --}}
            @else
                <div class="mb-3">
                    <label for="end" class="form-label">Deadline Project</label>
                    <input type="date" class="form-control" id="end" name="end"  value="{{ $task->end }}">
                </div>
            @endif
            @if ($task->status == 'Delayed')
            <div class="mb-3">
                <label for="delay" class="form-label">Delayed Deadline</label>
                <input type="date" class="form-control" id="delay" name="delay" value={{ $task->delay }}>
            </div>
            @endif
            @can('description-edit')
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea type="text" class="form-control" id="description" name="description" rows="5">{{ $task->description }}</textarea>
            </div>
            @endcan
            @cannot('description-edit')
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea type="text" readonly class="form-control" id="description" name="description" rows="5">{{ $task->description }}</textarea>
            </div>
            @endcannot

            @can('picdescription-edit')
            <div class="mb-3">
                <label for="picdescription" class="form-label">PIC Comment</label>
                <textarea type="text" class="form-control" id="picdescription" name="picdescription" rows="5">{{ $task->picdescription }}</textarea>
            </div>
            @endcan
            @cannot('picdescription-edit')
            <div class="mb-3">
                <label for="picdescription" class="form-label">PIC Comment</label>
                <textarea type="text" readonly class="form-control" id="picdescription" name="picdescription" rows="5">{{ $task->picdescription }}</textarea>
            </div>
            @endcannot

            <div class="mb-3">
                @can('upload-edit')
                <label for="upload" class="form-label">Upload File</label><br>
                <input type="file" name="file"><br><br>
                @endcan
                @cannot('upload-edit')
                <label for="formFileDisabled" class="form-label">Upload File</label><br>
                <input class="form-control" type="file" id="formFileDisabled" disabled><br>
                @endcannot
                <label for="upload" class="form-label">Previous File</label><br>
                @if ($task->file)
                    {{ $task->file }}
                @else
                No file uploaded.
                @endif
            </div>
            <div class="mb-3">
                @can('picupload-edit')
                <label for="upload" class="form-label">PIC Upload File</label><br>
                <input type="file" name="picfile"><br><br>
                @endcan
                @cannot('picupload-edit')
                <label for="formFileDisabled" class="form-label">PIC Upload File</label><br>
                <input class="form-control" type="file" id="formFileDisabled" disabled><br>
                @endcannot
                <label for="upload" class="form-label">Previous PIC File</label><br>
                @if ($task->picfile)
                    {{ $task->picfile }}
                @else
                No file uploaded.
                @endif
            </div>
            @can('status-edit')
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select name="status" id="status" class="form-control">
                    @foreach ($statuses as $status)
                        <option value="{{ $status['value'] }}" {{ $task->status === $status['value'] ? 'selected' : ''}}>{{ $status['label'] }}</option>
                    @endforeach
                </select>
            </div>
            @endcan
            @cannot('status-edit')
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                    <input type="text" readonly class="form-control" id="status" name="status" value="{{ $task->status }}">
                </select>
            </div>
            @endcannot
            <button type="submit" class="btn btn-primary">
                <i class="fa fa-check"></i> Save
            </button>
        </form>
    </div>
@endsection
@endsection
