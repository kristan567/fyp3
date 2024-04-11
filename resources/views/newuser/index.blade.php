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
    <x-tenant-app-layout>
        {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('projects') }}
            @role('Project Manager')
                <x-btn-link class="ml-4 float-right" href="{{ route('projects.create') }}">Add Projects</x-btn-link>
            @endrole
        </h2>
         </x-slot> --}}



        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                    <div class="p-6 text-gray-900">


                        <div style="overflow-x:auto;">
                            <table>
                                <tr>
                                    <th>First Name</th>
                                    <th>Company Name</th>
                                    <th>Number Of users</th>
                                    <th>Email</th>
                                    <th>Prefered Password</th>
                                    <th>message</th>
                                    <th>add</th>

                                </tr>
                                @foreach ($Newuser as $newuser)
                                <tr>
                                    <td>{{ $newuser->name }}</td>
                                    <td>{{ $newuser->company_name }}</td>
                                    <td>{{ $newuser->number_of_users }}</td>
                                    <td>{{ $newuser->email }}</td>
                                    <td>{{ $newuser->password }}</td>
                                    <td>{{ $newuser->message }}</td>
                                    <td><x-btn-link href="{{route('tenants.index')}}">Tenants</x-btn-link></td>

                                </tr>
                                @endforeach


                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-tenant-app-layout>

</body>

</html>
