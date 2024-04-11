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

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
</head>
<body>


    <center><strong>
        <h2 style="font-size: 35px">Total Users</h2>
    </center>
<br></strong>
<div style="overflow-x:auto;">

    <table>
        <thead>
            <tr>
                <th>name</th>
                <th>Email</th>
                <th>role</th>
            </tr>
        </thead>

        @foreach ($users as $user)
          
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>

                    <td>
                        @foreach ($user->roles as $role)
                            {{ $role->name }} {{ $loop->last ? '' : ',' }}
                        @endforeach
                    </td>
 
                </tr>
       
        @endforeach




    </table>
</div>

</body>
</html>
