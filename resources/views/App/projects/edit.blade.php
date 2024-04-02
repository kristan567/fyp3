<x-tenant-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('update projects') }}
            
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                     @endif

                     @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                     @endif

                
                
                        <form method="POST" action="{{ route('projects.update', $project->id) }}">
                            @csrf
                            @method('PUT')
                    
                            <!-- Name -->
                            <div>
                                <x-input-label for="title" :value="__('Title')" />
                                <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value=" $project->title " required autofocus />
                                <x-input-error :messages="$errors->get('title')" class="mt-2" />
                            </div>
                    
                            <!-- Description -->
                            <div class="mt-4">
                                <x-input-label for="description" :value="__('Description')" />
                                {{-- <x-text-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required /> --}}
                                <textarea id="description" cols="30" rows="4" class="block mt-1 w-full" name="description" :value="$project->description  " required autofocus style="border-radius: 5px;" required >{{ $project->description }}</textarea>
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <br>

                            <!-- status -->
                            <div class="mt-4">
                                <x-input-label for="status" :value="__('Enter Status')"  /><br>
                                <select class="block mt-1 w-full" id="status" name="status" :value=" $project->status ">
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
                                <x-text-input type="date" class="block mt-1 w-full" id="start_date" name="start_date" :value=" $project->start_date "/>
             
                                <x-input-error :messages="$errors->get('start_date')" class="mt-2" />

                        
                            </div>
            
                            <div class="mt-4">
                                <x-input-label for="end_date" :value="__('Enter End Date')" />
                                <x-text-input  type="date"  class="block mt-1 w-full" id="end_date" name="end_date" :value=" $project->end_date "/>
            
                                <x-input-error :messages="$errors->get('end_date')" class="mt-2" />

                              
                            </div>
                    
                            <div class="flex items-center justify-end mt-4">
           
                                <a class="btn btn-primary" href="{{ route('projects.index') }}"> Back</a>
                                <x-primary-button class="ms-4">
                                    {{ __('Update') }}
                                </x-primary-button>
                            </div>
                        </form>
                    
                    

                </div>
            </div>
        </div>
    </div>
</x-tenant-app-layout>
