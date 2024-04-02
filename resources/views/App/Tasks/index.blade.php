<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PRooject Information</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">






</head>

<body>





    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900">

                    <h2 class="text-center">Tasks</h2>


                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @role('Project Manager')
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">


                            <x-btn-link class="ml-4 float-right" href="{{ route('task.create', $project->id) }}">Add
                                Tasks</x-btn-link>
                            <a href="{{ url('tasks/' . $project->id . '/showcompleted') }}" class="btn btn-secondary mb-3">Show Completed Tasks</a>

                      

                            {{--  --}}
                        </h2>
                    @endrole

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                {{-- <th>ID</th> --}}
                                <th>Name</th>
                                {{-- <th>Description</th> --}}
                                <th>Category</th>
                                <th>Priority</th>
                                <th>status</th>

                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Assigned To </th>

                                <th width="160px">Action</th>
                                <th>images</th>
                                @role('Project Manager')
                                    <th>status</th>
                                @endrole
                                <th>Send Email</th>



                            </tr>

                        </thead>
                        <tbody>

                            @role('worker')
                                @if ($project->tasks)
                                    {{-- @if ($tasks) --}}
                                    @foreach ($project->tasks as $task)
                                        {{-- @foreach ($tasks as $task) --}}
                                        @if ($task->user_id == auth()->id())
                                            <tr>
                                                <td>{{ $task->id }}</td>
                                                <td>{{ $task->title }}</td>
                                                <td>{{ $task->description }}</td>
                                                <td>{{ $task->category_id }}</td>
                                                <td>{{ $task->priority }}</td>
                                                <td>{{ $task->status == 0 ? 'Not Started' : '' }}
                                                    {{ $task->status == 1 ? 'Started' : '' }}
                                                    {{ $task->status == 2 ? 'Pending' : '' }}
                                                    {{ $task->status == 3 ? 'Complete' : '' }}</td>
                                                <td>{{ $task->start_date }}</td>
                                                <td>{{ $task->end_date }}</td>
                                                <td>{{ $task->user_id }}</td>

                                                <td>
                                                    <form action="{{ route('task.destroy', $task->id) }}" method="POST">
                                                        {{-- <a class="btn btn-info"
                                                            href="{{ route('task.show', $task->id) }}">Show</a> --}}
                                                        <a class="btn btn-primary"
                                                            href="{{ route('task.edit', $task->id) }}">Edit</a>

                                                        @csrf
                                                        {{-- @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Delete</button> --}}
                                                    </form>
                                                </td>

                                                <td>
                                                    <a href="{{ url('tasks/' . $task->id . '/upload') }}"
                                                        class="btn btn-info">Images</a>
                                                </td>

                                                <td> <a class="btn btn-primary"
                                                        href="{{ url('tasks/' . $task->id . '/usermail') }}">Send Mail</a>
                                                </td>

                                                {{-- <td>
                                                    @if (!$task->completed)
                                                        <form action="{{ route('task.complete', $task->id) }}"
                                                            method="POST" style="display: inline;">
                                                            @csrf
                                                            
                                                            <button type="submit" class="btn btn-warning btn-sm">
                                                                <i class="fa fa-check"></i> Complete
                                                            </button>
                                                        </form>
                                                    @endif

                                                </td> --}}



                                            </tr>
                                        @endif
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="3">No Tasks found</td>
                                    </tr>
                                @endif
                            @endrole

                            @role('Project Manager')
                                @if ($project->tasks)
                                    @foreach ($project->tasks as $task)
                                        @if (!$task->completed)
                                            <tr>
                                                {{-- <td>{{ $task->id }}</td> --}}
                                                <td>{{ $task->title }}</td>
                                                {{-- <td>{{ $task->description }}</td> --}}
                                                <td>{{ $task->category->title }}</td>
                                                <td>{{ $task->priority }}</td>
                                                <td>{{ $task->status == 0 ? 'Not Started' : '' }}
                                                    {{ $task->status == 1 ? 'Started' : '' }}
                                                    {{ $task->status == 2 ? 'Pending' : '' }}
                                                    {{ $task->status == 3 ? 'Complete' : '' }}</td>
                                                <td>{{ $task->start_date }}</td>
                                                <td>{{ $task->end_date }}</td>
                                                <td>{{ $task->user->name }}</td>

                                                <td>
                                                    <form action="{{ route('task.destroy', $task->id) }}" method="POST">
                                                        {{-- <a class="btn btn-info"
                                                        href="{{ route('task.show', $task->id) }}">Show</a> --}}
                                                        <a class="btn btn-primary"
                                                            href="{{ route('task.edit', $task->id) }}">Edit</a>



                                                        @csrf

                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </td>

                                                {{-- <td>
                                                    <a href="{{ route('image.index', ['id' => $task->id]) }}" class="btn btn-info">Images</a>
                                                </td> --}}

                                                <td>
                                                    <a href="{{ url('tasks/' . $task->id . '/upload') }}"
                                                        class="btn btn-info">Images</a>
                                                </td>



                                                <td>
                                                    @if (!$task->completed)
                                                        {{-- <form action="{{ route('task.complete', $task->id) }}" method="POST"
                                                        style="display: inline;">
                                                        @csrf
                                                        <button type="submit" class="btn btn-warning btn-sm">
                                                             Complete
                                                        </button>
                                                         </form> --}}

                                                        <a class="btn btn-warning"
                                                            href="{{ url('tasks/' . $task->id . '/complete') }}">complete</a>
                                                    @endif



                                                </td>

                                                <td> <a class="btn btn-primary"
                                                        href="{{ url('tasks/' . $task->id . '/mail') }}">Send Mail</a>
                                                </td>


                                            </tr>
                                        @endif
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="3">No Tasks found</td>
                                    </tr>
                                @endif

                            @endrole





                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>






    </div>
    </div>
    </div>

</body>

</html>
