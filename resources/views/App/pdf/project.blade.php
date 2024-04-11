<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

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


    <center><strong>
            <h2>Projects</h2>
        </strong></center>
    <br>

    <div style="overflow-x:auto;">
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>status</th>
                <th>Start Date</th>
                <th>End Date</th>

            </tr>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->description }}</td>
                    <td>{{ $project->status == 0 ? 'Not Started' : '' }}
                        {{ $project->status == 1 ? 'Started' : '' }}
                        {{ $project->status == 2 ? 'Pending' : '' }}
                        {{ $project->status == 3 ? 'Complete' : '' }}
                    </td>
                    <td>{{ $project->start_date }}</td>
                    <td>{{ $project->end_date }}</td>


                </tr>
            @endforeach

        </table>
    </div>




</body>

</html>
