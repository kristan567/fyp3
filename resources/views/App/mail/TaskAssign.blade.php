{{-- <!DOCTYPE html>
<html>
<head>
    <title>{{ $subject }}</title>
</head>
<body>


   {{ $message }}
   <br>

   {{ $task_name }}

    {{ $name }}
   
        {{ $project_name }}

        {{ $start_date }}

        {{ $end_date }}

        {{ $priority }}


</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $subject }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333333;
            text-align: center;
            margin-bottom: 20px;
        }

        p {
            color: #666666;
            margin-bottom: 10px;
        }

        .info {
            font-weight: bold;
            color: #444444;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            color: #888888;
        }
    </style>
</head>

<body>
    <div class="container">
        <center><h1>{{ $subject }}</h1></center>
        <p>{{ $message }}</p>
        <p><span class="info">Task Name:</span> {{ $task_name }}</p>
        <p><span class="info">Assigned To:</span> {{ $name }}</p>
        <p><span class="info">Project Name:</span> {{ $project_name }}</p>
        <p><span class="info">Start Date:</span> {{ $start_date }}</p>
        <p><span class="info">End Date:</span> {{ $end_date }}</p>
        <p><span class="info">Priority:</span> {{ $priority }}</p>
        <p class="footer">This email is auto-generated. Please do not reply.</p>
    </div>
</body>

</html>



{{-- <!DOCTYPE html>
<html>

<head>
    <title>{{ $subject }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        .info {
            font-weight: bold;
        }

        .highlight {
            background-color: #f0f8ff;
        }
    </style>
</head>

<body>

    <table>
        <center>
            <tr>
                <th colspan="2">{{ $subject }}</th>
            </tr>
        </center>
        <tr class="highlight">
            <td class="info">Message:</td>
            <td>{{ $message }}</td>
        </tr>
        <tr>
            <td class="info">Task Name:</td>
            <td>{{ $task_name }}</td>
        </tr>
        <tr class="highlight">
            <td class="info">Name:</td>
            <td>{{ $name }}</td>
        </tr>
        <tr>
            <td class="info">Project Name:</td>
            <td>{{ $project_name }}</td>
        </tr>
        <tr class="highlight">
            <td class="info">Start Date:</td>
            <td>{{ $start_date }}</td>
        </tr>
        <tr>
            <td class="info">End Date:</td>
            <td>{{ $end_date }}</td>
        </tr>
        <tr class="highlight">
            <td class="info">Priority:</td>
            <td>{{ $priority }}</td>
        </tr>
        <tr class="highlight">
            <td class="info">Description:</td>
            <td>{{ $des }}</td>
        </tr>
    </table>

</body>

</html> --}}


{{-- <!DOCTYPE html>
<html>

<head>
    <title>{{ $subject }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .info-container {
            width: 50%;
            padding: 10px;
            background-color: #f9f9f9;
            border-radius: 8px;
        }

        .info {
            margin-bottom: 10px;
        }

        .info-label {
            font-weight: bold;
            color: #333333;
        }

        .info-value {
            color: #666666;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="info-container">
            <div class="info">
                <span class="info-label">Message:</span>
                <span class="info-value">{{ $message }}</span>
            </div>
            <div class="info">
                <span class="info-label">Task Name:</span>
                <span class="info-value">{{ $task_name }}</span>
            </div>
            <div class="info">
                <span class="info-label">Name:</span>
                <span class="info-value">{{ $name }}</span>
            </div>
            <div class="info">
                <span class="info-label">Start Date:</span>
                <span class="info-value">{{ $start_date }}</span>
            </div>
            <div class="info">
                <span class="info-label">End Date:</span>
                <span class="info-value">{{ $end_date }}</span>
            </div>
        </div>
        <div class="info-container">
            <div class="info">
                <span class="info-label">Project Name:</span>
                <span class="info-value">{{ $project_name }}</span>
            </div>
            <div class="info">
                <span class="info-label">Priority:</span>
                <span class="info-value">{{ $priority }}</span>
            </div>
            <div class="info">
                <span class="info-label">Description:</span>
                <span class="info-value">{{ $des }}</span>
            </div>
        </div>
    </div>

</body>

</html> --}}

