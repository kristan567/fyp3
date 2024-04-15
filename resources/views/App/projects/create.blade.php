{{-- <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>




<!--fonts-->
<link rel="preconnect" `href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
{{-- <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;1,400;1,500&display=swap"
        rel="stylesheet">

<!--fontawesome-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.3.0/css/all.css"> --}}


<x-tenant-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add projects') }}

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form method="POST" action="{{ route('projects.store') }}">
                        @csrf

                        <!-- Name -->
                        <div>
                            <x-input-label for="title" :value="__('Title')" />
                            <x-text-input id="title" class="block mt-1 w-full" type="text" name="title"
                                :value="old('title')" required autofocus />
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>

                        <!-- Description -->
                        <div class="mt-4">
                            <x-input-label for="description" :value="__('Description')" />

                            <textarea id="description" cols="30" rows="4" class="block mt-1 w-full" name="description"
                                :value="old('description')"required autofocus style="border-radius: 5px;" required></textarea>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <br>

                        {{-- <div>
                            <x-input-label for="title" :value="__('location')" />
                            <x-text-input id="location" class="block mt-1 w-full" type="text" name="location"
                                :value="old('location')" required autofocus />
                            <x-input-error :messages="$errors->get('location')" class="mt-2" />
                        </div> --}}

                        {{-- <input type="text" name="location" id="location" required> --}}

                        <div>
                            <x-input-label for="title" :value="__('latitude')" />
                            <x-text-input id="latitude" class="block mt-1 w-full" type="text" name="latitude"
                                :value="old('latitude')" required autofocus />
                            <x-input-error :messages="$errors->get('latitude')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="title" :value="__('longitude')" />
                            <x-text-input id="longitude" class="block mt-1 w-full" type="text" name="longitude"
                                :value="old('longitude')" required autofocus />
                            <x-input-error :messages="$errors->get('longitude')" class="mt-2" />
                        </div>

                        <!-- status -->
                        <div class="mt-4">
                            <x-input-label for="status" :value="__('Enter Status')" /><br>
                            <select class="block mt-1 w-full" id="status" name="status">
                                <option value="0">Not started</option>
                                <option value="1">Started</option>
                                <option value="2">Pending</option>
                                <option value="3">Complete</option>
                            </select>
                            <x-input-error :messages="$errors->get('status')" class="mt-2" />

                        </div>

                        <!-- Confirm Password -->
                        <div class="mt-4">
                            <x-input-label for="start_date" :value="__('Enter Start Date')" />
                            <x-text-input type="date" class="block mt-1 w-full" id="start_date" name="start_date" />

                            <x-input-error :messages="$errors->get('start_date')" class="mt-2" />

                        </div>

                        <div class="mt-4">
                            <x-input-label for="end_date" :value="__('Enter End Date')" />
                            <x-text-input type="date" class="block mt-1 w-full" id="end_date" name="end_date" />

                            <x-input-error :messages="$errors->get('end_date')" class="mt-2" />


                        </div>

                        <div class="flex items-center justify-end mt-4">


                            <x-primary-button class="ms-4">
                                {{ __('Create') }}
                            </x-primary-button>
                        </div>
                    </form>



                </div>
            </div>
        </div>
    </div>

    
    
    

</x-tenant-app-layout>


{{-- 
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDlm67NPf8HL9XL8zyiFAMyX2RSRgenQKI&libraries=places">
</script>

<script>
    $(document).ready(function() {

        var autocomplete;

        var to = 'location';

        autocomplete = new google.maps.places.Autocomplete((document.getElementById(to)), {

            types:['geocode'] .

        });
    });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script> --}}
