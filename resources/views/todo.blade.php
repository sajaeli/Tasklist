@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-sm-offset-2 col-sm-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                New Task
            </div>
            <div class="panel-body">
                <!-- Display Validation Errors -->
                <!-- New Task Form -->
                <form action="store" class="form-horizontal" method="POST">
                    @csrf
                    <!-- Task Name -->
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="task-name">
                            Task
                        </label>
                        <div class="col-sm-6">
                            <input class="form-control" id="task-name" name="title" type="text" value="">
                            </input>
                        </div>
                    </div>
                    <!-- Add Task Button -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button class="btn btn-default" type="submit">
                                <i class="fa fa-btn fa-plus">
                                </i>
                                Add Task
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Current Tasks -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Current Tasks
            </div>
            <div class="panel-body">
                <table class="table table-striped task-table">
                    <thead>
                        <th>
                            Task
                        </th>
                        <th>
                        </th>
                    </thead>
                    <tbody>
                    	
                    	@foreach ($tasks as $task)
                    		
	                        <tr>
	                            <td class="table-text">
	                                <div>
	                                    {{ $task->title }}
	                                </div>
	                            </td>
	                            <!-- Task Delete Button -->
	                            <td>
	                                <form action="delete/{{ $task->id }}" method="post">
                                        @csrf
	                                    <button class="btn btn-danger" type="submit">
	                                        <i class="fa fa-btn fa-trash"></i>
	                                        Delete
	                                    </button>
	                                </form>
	                            </td>
	                        </tr>

                    	@endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection