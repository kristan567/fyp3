{{-- <!DOCTYPE html>
<html>
<head>
    <title>{{ $subject }}</title>
</head>
<body>
 

   {{ $message }}
   <br>
   <br>

   <p>your name :- {{ $name }}</p>

   <p>Your email :-{{ $email }}</p>

   <p>your Password :- {{ $password }}</p>

   <p>Your Domain :-  {{ $domain }} </p>



   
</body>
</html> --}}

<!DOCTYPE html>
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
    </style>
</head>

<body>

    <table>
        <tr>
            <th colspan="2">{{ $subject }}</th>
        </tr>
        <tr>
            <td colspan="2">{{ $message }}</td>
        </tr>
        <tr>
            <td class="info">Your Name:</td>
            <td>{{ $name }}</td>
        </tr>
        <tr>
            <td class="info">Your Email:</td>
            <td>{{ $email }}</td>
        </tr>
        <tr>
            <td class="info">Your Password:</td>
            <td>{{ $password }}</td>
        </tr>
        <tr>
            <td class="info">Your Domain:</td>
            <td>{{ $domain }}:8000</td>
        </tr>
    </table>

</body>

</html>
