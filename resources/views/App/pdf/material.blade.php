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
                <th>Sku</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>total Cost</th>
                <th>item Added At</th>
                {{-- <th>image</th> --}}

            

            </tr>
        </thead>
        <tbody>
            @if ($materials->isNotEmpty())

                @foreach ($materials as $material)
                    <tr>
                        <th>{{ $material->name }}</th>
                        <th>{{ $material->sku }}</th>
                        <th>{{ $material->price }}</th>
                        <th>{{ $material->qty }}</th>
                        <th>{{ $material->price * $material->qty }}</th>
                        <th>{{ \Carbon\Carbon::parse($material->created_at)->format('d,M,Y') }}
                        </th>
                        {{-- <th>
                            @if ($material->image != '')
                                <img width="80"
                                    src="{{ global_asset('materialuploads\materialproducts' . '/' . $material->image) }}" />
                            @endif
                        </th> --}}


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
