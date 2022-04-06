@extends('layouts.layout-dash')
@section('content-data')
@section('content')

<div class="row" >
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Project</h2>
        </div>
        <a href="export" method="GET"class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>

    </div>
</div>



<br>
    <small style="margin-left: 6%;font-weight: bold; color: black; font-size: 16px" >Total Task: | <?php echo count($tasks); ?> </small>
    <small style="margin-left: 14%;font-weight: bold; color: black; font-size: 16px">On Going:| {{ $OngoingCount }} </small>
    <small style="margin-left: 18%;font-weight: bold; color: black; font-size: 16px" >Delayed:  | {{ $DelayedCount }} </small>
    <small style="margin-left: 21%;font-weight: bold; color: black; font-size: 16px" >Completed: | {{ $FinishedCount }} </small>

    <br>






    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

<br>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Task Name</th>
            <th>PIC</th>
            <th>Start Project</th>
            <th>Deadline Project</th>
            <th>Delayed Deadline</th>
            <th>Status</th>
            <th width="280px">Action</th>
        </tr>
	    {{-- @foreach ($tasks as $task)
        @if ($task->status != 'Delayed')
        @php
            $task->delay = null;
        @endphp
        @endif
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $task->title }}</td> --}}
	        {{-- <td>{{ $task->users()->select('name')
                                ->where('id', '=', $task->user_id)
                                ->first()->name}}</td> --}}
            {{-- <td>{{ $task->pic }}</td>
	        <td>{{ $task->start }}</td>
	        <td>{{ $task->end }}</td>
	        <td>
                @if ($task->delay)
                    {{ $task->delay }}
                @else
                    -
                @endif
            </td>
	        <td>
            @if ($task->status === "Ongoing")
                <span class="badge rounded-pill bg-info text-dark">
                    {{ $task->status }}
                </span>
            @elseif ($task->status === "Delayed")
                <span class="badge rounded-pill bg-danger text-white">
                    {{ $task->status }}
                </span>
            @else
                <span class="badge rounded-pill bg-success text-white">
                    {{ $task->status }}
                </span>
            @endif
            </td>
	        <td>
                <form action="{{ route('tasks.destroy',$task->id) }}" method="POST">
                    @if ($task->file)
                        <a href="{{ url('download', $task->file) }}" class="btn btn-secondary">
                        <i class="fa fa-download" style="color: white"></i>
                        </a>
                    @endif
                    <a class="btn btn-info" style="color: white" href="{{ route('tasks.show',$task->id) }}"><i class="fas fa-eye"></i></a>
                    @can('task-edit')
                    <a class="btn btn-primary" href="{{ route('tasks.edit',$task->id) }}"><i class="fa fa-edit"></i></a>
                    @endcan


                    @csrf
                    @method('DELETE')
                    @can('task-delete')
                    <button type="submit" class="btn btn-danger">
                        <i class="fa fa-trash"></i>
                    </button>
                    @endcan
                </form>
	        </td>
	    </tr>
	    @endforeach
    </table> --}}
    @foreach ($task_list as $item)
        @if ($item->status != 'Delayed')
        @php
            $item->delay = null;
        @endphp
        @endif
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $item->title }}</td>
            <td>{{ $item->name }}</td>
	        <td>{{ $item->start }}</td>
	        <td>{{ $item->end }}</td>
	        <td>
                @if ($item->delay)
                    {{ $item->delay }}
                @else
                    -
                @endif
            </td>
	        <td>
            @if ($item->status === "Ongoing")
                <span class="badge rounded-pill bg-info text-dark">
                    {{ $item->status }}
                </span>
            @elseif ($item->status === "Delayed")
                <span class="badge rounded-pill bg-danger text-white">
                    {{ $item->status }}
                </span>
            @else
                <span class="badge rounded-pill bg-success text-white">
                    {{ $item->status }}
                </span>
            @endif
            </td>
	        <td>
                <form action="{{ route('tasks.destroy',$item->id) }}" method="POST">
                    @if ($item->file)
                        <a href="{{ url('download', $item->file) }}" class="btn btn-secondary">
                        <i class="fa fa-download" style="color: white"></i>
                        </a>
                    @endif
                    @if ($item->picfile)
                        <a href="{{ url('picdownload', $item->picfile) }}" class="btn btn-danger">
                        <i class="fa fa-download" style="color: white"></i>
                        </a>
                    @endif
                    <a class="btn btn-info" style="color: white" href="{{ route('tasks.show',$item->id) }}"><i class="fas fa-eye"></i></a>
                    @can('task-edit')
                    <a class="btn btn-primary" href="{{ route('tasks.edit',$item->id) }}"><i class="fa fa-edit"></i></a>
                    @endcan


                    @csrf
                    @method('DELETE')
                    @can('task-delete')
                    <button type="submit" class="btn btn-danger">
                        <i class="fa fa-trash"></i>
                    </button>
                    @endcan
                </form>
	        </td>
	    </tr>
	    @endforeach
    </table>

  <nav class="navbar " style="background-color: #ffff; border-radius: 20px; height: 40px;">
    <div class="pull-right mb-4" style="margin-left: 87%" >
        @can('task-create')
        <a  href="{{ route('tasks.create') }}" style="color: black ">
        <span class="iconify" data-icon="akar-icons:circle-plus-fill" style="font-size: 20px; margin-right: 7px">
        </span>Create New Task </a>
        @endcan
    </div>
</nav>

@endsection
@endsection
