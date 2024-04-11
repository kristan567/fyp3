<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2
        }
    </style>
</head>

<body>


    <div style="overflow-x:auto;">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Category</th>
                    <th>Priority</th>
                    <th>status</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Assigned To </th>
                

                </tr>

            </thead>
            <tbody>

              
                    @if ($project->tasks)
                        @foreach ($project->tasks as $task)
                            @if (!$task->completed)
                                <tr>
                                    <td>{{ $task->id }}</td>
                                    <td>{{ $task->title }}</td>
                                    <td>{{ $task->description }}</td>
                                    <td>{{ $task->category->title }}</td>
                                    <td>{{ $task->priority }}</td>
                                    <td>{{ $task->status == 0 ? 'Not Started' : '' }}
                                        {{ $task->status == 1 ? 'Started' : '' }}
                                        {{ $task->status == 2 ? 'Pending' : '' }}
                                        {{ $task->status == 3 ? 'Complete' : '' }}</td>
                                    <td>{{ $task->start_date }}</td>
                                    <td>{{ $task->end_date }}</td>
                                    <td>{{ $task->user->name }}</td>

                                </tr>
                            @endif
                        @endforeach
                    @else
                        <tr>
                            <td colspan="3">No Tasks found</td>
                        </tr>
                    @endif

            </tbody>
        </table>
    </div>

</body>

</html>
