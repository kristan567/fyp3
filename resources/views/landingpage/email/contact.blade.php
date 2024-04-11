




<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/css/bootstrap.min.css" rel="stylesheet">

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

<h2> A new user named{{ $user->name }}  has Requested to create an account.</h2>

<div style="overflow-x:auto;">
  <table>
    <tr>
      <th>First Name</th>
      <th>Company Name</th>
      <th>Number of Users</th>
      <th>Email</th>
      <th>Preferred Password</th>
      <th>message</th>

    </tr>
    <tr>
      <td>{{ $user->name }}</td>
      <td>{{ $user->company_name }}</td>
      <td>{{ $user->number_of_users }}</td>
      <td>{{ $user->email }}</td>
      <td>{{ $user->password }}</td>
      <td>{{ $user->message }}</td>

    </tr>

  </table>
</div>
<br>
<br>

<center><a  class="btn-btn-primary" href="">Create</a></center>

</body>
</html>
