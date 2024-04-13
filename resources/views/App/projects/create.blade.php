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
                                <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus />
                                <x-input-error :messages="$errors->get('title')" class="mt-2" />
                            </div>
                    
                            <!-- Description -->
                            <div class="mt-4">
                                <x-input-label for="description" :value="__('Description')" />
                       
                                <textarea id="description" cols="30" rows="4" class="block mt-1 w-full" name="description" :value="old('description')"required autofocus style="border-radius: 5px;" required ></textarea>
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            
                            <br>

                            <div>
                                <x-input-label for="title" :value="__('latitude')" />
                                <x-text-input id="latitude" class="block mt-1 w-full" type="text" name="latitude" :value="old('latitude')" required autofocus />
                                <x-input-error :messages="$errors->get('latitude')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="title" :value="__('longitude')" />
                                <x-text-input id="longitude" class="block mt-1 w-full" type="text" name="longitude" :value="old('longitude')" required autofocus />
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
                                <x-text-input type="date" class="block mt-1 w-full" id="start_date" name="start_date"/>
             
                                <x-input-error :messages="$errors->get('start_date')" class="mt-2" />

                            </div>
            
                            <div class="mt-4">
                                <x-input-label for="end_date" :value="__('Enter End Date')" />
                                <x-text-input  type="date"  class="block mt-1 w-full" id="end_date" name="end_date"/>
            
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
