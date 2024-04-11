<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

   td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

     tr:nth-child(even) {
        background-color: #dddddd;
    }

</style>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tenants') }}
            <x-btn-link  class="ml-4 float-right" href="{{route('tenants.create')}}">Add Tenant</x-btn-link>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <table>
                        <thead>
                            <tr>
                                <th>name</th>
                                <th>Email</th>
                                <th>Domain</th>
                                <th>Action</th>
                                <th>Notify Project Manager</th>
                              </tr>
                        </thead>
                  
                            @foreach ( $tenants as $tenant )
                                <tr>
                                    <td>{{ $tenant -> name}}</td>
                                    <td>{{ $tenant -> email}}</td>

                                    <td>
                                        @foreach ($tenant->domains as $domain)
                                            {{ $domain ->domain}} {{$loop->last ? '' : ','}}
                                        @endforeach
                                    </td>
                                    <td></td>
                                    
                                    <td><x-btn-link class="btn btn-primary"
                                        href="{{ url('tenant/' . $tenant->id . '/createtenant') }}">Notify User!</x-btn-link></td>
                                </tr>
                                
                            @endforeach
                        
                      


                      </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
