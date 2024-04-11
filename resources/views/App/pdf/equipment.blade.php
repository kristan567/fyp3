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



<div style="overflow-x:auto;">
    <table >
        <thead>
            <tr>
                <th>Name</th>
                <th>Equipment Type</th>
                <th>Price</th>
                <th>Availability</th>
                <th>total Cost</th>
                <th>item Added At</th>
               
            </tr>
        </thead>
        <tbody>
            @if ($equipments->isNotEmpty())

                @foreach ($equipments as $equipment)
                <tr>
                    <td>{{ $equipment->name }}</td>
                    <td>
                        {{ $equipment->type == 0 ? 'Not electric' : '' }}
                        {{ $equipment->type == 1 ? 'Manual' : '' }}
                        {{ $equipment->type == 2 ? 'Pending' : '' }}
                        {{ $equipment->type == 3 ? 'Complete' : '' }}
                    </td>
                    <td>{{ $equipment->price }}</td>
                    <td>{{ $equipment->qty }}</td>
                    <td>{{ $equipment->price * $equipment->qty }}</td>
                    <td>{{ \Carbon\Carbon::parse($equipment->created_at)->format('d,M,Y') }}
                    </td>
        
                </tr>
                @endforeach

            @endif

        </tbody>
        <tfoot style="margin-top: 10px;">
            <tr>
                <th style="border: 1px solid black; ">Total Cost Sum:</th>
                <th></th>
                <th></th>
                <th></th>
                <th style="border: 1px solid black; ">{{ $totalCost }}</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </tfoot>

    </table>
</div>

</body>
</html>
