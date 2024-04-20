{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $subject }}</title>
</head>

<body>
    <h1>Notification of task Completion </h1>

    <p> {{ $message }} </p>

    {{ $start_date }}
    {{ $end_date }}
    {{ $updated_at }}

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
        }

        p {
            color: #666666;
            margin-bottom: 20px;
        }

        .info {
            font-weight: bold;
            color: #444444;
        }

        .date {
            color: #007bff;
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
        <center><h1>Notification of Task Completion</h1></center>
        <p>{{ $message }}</p>
        <p><span class="info">Start Date:</span> <span class="date">{{ $start_date }}</span></p>
        <p><span class="info">End Date:</span> <span class="date">{{ $end_date }}</span></p>
        <p><span class="info">Last Updated:</span> <span class="date">{{ $updated_at }}</span></p>
        <p class="footer">This email is auto-generated. Please do not reply.</p>
    </div>
</body>

</html>

