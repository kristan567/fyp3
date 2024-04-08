<style>
    .contact-form {
        width: 80%;
        margin: 0 auto;
    }

    .form-group {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
    }

    .half {
        width: 48%;
        /* Adjust this value as needed */
    }

    .left {
        float: left;
    }

    .right {
        float: right;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"],
    textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
        margin-bottom: 10px;
    }

    textarea {
        height: 150px;
    }
</style>


<x-tenant-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('update task') }}

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


                    @role('Project Manager')
                        <form method="POST" action="{{ route('task.update', $task->id) }}">
                            @csrf
                            @method('PUT')

                            <!-- Name -->
                            <div>
                                <x-input-label for="title" :value="__('Title')" />
                                <x-text-input id="title" class="block mt-1 w-full" type="text" name="title"
                                    :value="$task->title" required autofocus />
                                <x-input-error :messages="$errors->get('title')" class="mt-2" />
                            </div>


                            {{-- add project --}}

                            <div class="mt-4">
                                <x-input-label for="project_id" :value="__('Enter Project')" /><br>
                                <select class="block mt-1 w-full" id="project_id" name="project_id"
                                    :value="$task - > project_id">
                                    <option value="">Select Project</option>


                                    @foreach ($projects as $project)
                                        <option value="{{ $project->id }}">{{ $project->title }}</option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- selectCategory --}}
                            <div class="mt-4">
                                <x-input-label for="category_id" :value="__('Enter Category')" /><br>
                                <select class="block mt-1 w-full" id="category_id" name="category_id"
                                    :value="$task - > category_id">
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                    @endforeach
                                </select>
                            </div>





                            <!-- Description -->
                            <div class="mt-4">
                                <x-input-label for="description" :value="__('Description')" />

                                <textarea id="description" cols="30" rows="4" class="block mt-1 w-full" name="description"
                                    :value="$task - > description" required autofocus style="border-radius: 5px;" required>{{ $task->description }}</textarea>
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <br>

                       
                                <x-input-label for="priority" :value="__('priority')" /><br>
                                <select class="block mt-1 w-full" id="priority" name="priority">
                                    <option value="low">Low</option>
                                    <option value="medium">Medium</option>
                                    <option value="high">High</option>
                                </select>
                      

                            <!-- status -->
                            <div class="mt-4">
                                <x-input-label for="status" :value="__('Enter Status')" /><br>
                                <select class="block mt-1 w-full" id="status" name="status" :value="$task - > status">
                                    <option value="0">Not started</option>
                                    <option value="1">Started</option>
                                    <option value="2">Pending</option>
                                    <option value="3">Complete</option>
                                </select>
                                <x-input-error :messages="$errors->get('status')" class="mt-2" />

                            </div>

                            {{-- adduser --}}
                            <div class="mt-4">
                                <x-input-label for="user_id" :value="__('Enter User')" /><br>
                                <select class="block mt-1 w-full" id="user_id" name="user_id" :value="$task - > user_id">
                                    <option value="">Select User</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Confirm Password -->
                            <div class="mt-4">
                                <x-input-label for="start_date" :value="__('Enter Start Date')" />
                                <x-text-input type="date" class="block mt-1 w-full" id="start_date" name="start_date"
                                    :value="$task->start_date" />

                                <x-input-error :messages="$errors->get('start_date')" class="mt-2" />


                            </div>

                            <div class="mt-4">
                                <x-input-label for="end_date" :value="__('Enter End Date')" />
                                <x-text-input type="date" class="block mt-1 w-full" id="end_date" name="end_date"
                                    :value="$task->end_date" />

                                <x-input-error :messages="$errors->get('end_date')" class="mt-2" />


                            </div>

                            <div class="flex items-center justify-end mt-4">

                                <a class="btn btn-primary" href="{{ route('projects.index') }}"> Back</a>
                                <x-primary-button class="ms-4">
                                    {{ __('Update') }}
                                </x-primary-button>
                            </div>
                        </form>

                    @endrole


                    {{-- @role('worker')
                        <form method="POST" action="{{ route('task.userupdate', $task->id) }}">
                            @csrf
                            @method('PUT')

                            <div>
                                <x-input-label for="title" :value="__('Title')" />
                                <x-text-input id="title" class="block mt-1 w-full" type="text" name="title"
                                :value="$task->title" required autofocus disabled />
                                <x-input-error :messages="$errors->get('title')" class="mt-2" />
                            </div>


                
                            <div class="mt-4">
                                <x-input-label for="project_id"  :value="__('Enter Project')" /><br>
                                <select class="block mt-1 w-full" id="project_id" name="project_id"
                                    :value="$task->project_id">
                                    <option value="">Select Project</option>


                                    @foreach ($projects as $project)
                                        <option value="{{ $project->id }}">{{ $project->title }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mt-4">
                                <x-input-label for="category_id" :value="__('Enter Category')" /><br>
                                <select class="block mt-1 w-full" id="category_id" name="category_id"
                                    :value="$task - > category_id">
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                    @endforeach
                                </select>
                            </div>





                  
                            <div class="mt-4">
                                <x-input-label for="description" :value="__('Description')" />

                                <textarea id="description" cols="30" rows="4" class="block mt-1 w-full" name="description"
                                    :value="$task - > description" required autofocus style="border-radius: 5px;" required>{{ $task->description }}</textarea>
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <br>

                            <div class="form-group">
                                <x-input-label for="priority" :value="__('priority')" /><br>
                                <select class="block mt-1 w-full" id="priority" name="priority">
                                    <option value="low">Low</option>
                                    <option value="medium">Medium</option>
                                    <option value="high">High</option>
                                </select>
                            </div>

                       
                            <div class="mt-4">
                                <x-input-label for="status" :value="__('Enter Status')" /><br>
                                <select class="block mt-1 w-full" id="status" name="status" :value="$task - > status">
                                    <option value="0">Not started</option>
                                    <option value="1">Started</option>
                                    <option value="2">Pending</option>
                                    <option value="3">Complete</option>
                                </select>
                                <x-input-error :messages="$errors->get('status')" class="mt-2" />

                            </div>

                            <div class="mt-4">
                                <x-input-label for="user_id" :value="__('Enter User')" /><br>
                                <select class="block mt-1 w-full" id="user_id" name="user_id" :value="$task - > user_id">
                                    <option value="">Select User</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                       
                            <div class="mt-4">
                                <x-input-label for="start_date" :value="__('Enter Start Date')" />
                                <x-text-input type="date" class="block mt-1 w-full" id="start_date" name="start_date"
                                    :value="$task->start_date" />

                                <x-input-error :messages="$errors->get('start_date')" class="mt-2" />


                            </div>

                            <div class="mt-4">
                                <x-input-label for="end_date" :value="__('Enter End Date')" />
                                <x-text-input type="date" class="block mt-1 w-full" id="end_date" name="end_date"
                                    :value="$task->end_date" />

                                <x-input-error :messages="$errors->get('end_date')" class="mt-2" />


                            </div>

                            <div class="flex items-center justify-end mt-4">

                                <a class="btn btn-primary" href="{{ route('projects.index') }}"> Back</a>
                                <x-primary-button class="ms-4">
                                    {{ __('Update') }}
                                </x-primary-button>
                            </div>
                        </form>

                    @endrole --}}

                    @role('worker')
                        <!-- Form for Worker -->
                        <form method="POST" action="{{ route('task.update', $task->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <div class="half left">


                                    <label for="name">Task Name:</label>
                                    <input type="text" id="name" name="name" value="{{ $task->title }}"
                                        disabled>

                                    <label for="name">Priority:</label>
                                    <input type="text" id="name" name="name" value="{{ $task->priority }}"
                                        disabled>

                                    <label for="name">start date:</label>
                                    <input type="text" id="name" name="name" value="{{ $task->start_date }}"
                                        disabled>



                                </div>
                                <div class="half right">
                                    <label for="email">Project Manager:</label>
                                    <input type="email" id="email" name="email" value="{{ $manager->name }}"
                                        disabled>

                                    <label for="email">Assigned To:</label>
                                    <input type="email" id="email" name="email" value="{{ $task->user->name }}"
                                        disabled>

                                    <label for="name">End date:</label>
                                    <input type="text" id="name" name="name" value="{{ $task->end_date }}"
                                        disabled>


                                </div>
                            </div>

                            <p>description:</p>
                            <div class="form-group">

                                <input type="text" id="name" name="name" style="height: 100px;"
                                    value="{{ $task->description }}" disabled />
                            </div>

                            <!-- Status field for Worker -->
                            <div class="mt-4">
                                <x-input-label for="status" :value="__('Enter Status')" /><br>
                                <select class="block mt-1 w-full" id="status" name="status">
                                    <option value="0" {{ $task->status == 0 ? 'selected' : '' }}>Not started</option>
                                    <option value="1" {{ $task->status == 1 ? 'selected' : '' }}>Started</option>
                                    <option value="2" {{ $task->status == 2 ? 'selected' : '' }}>Pending</option>
                                    <option value="3" {{ $task->status == 3 ? 'selected' : '' }}>Complete</option>
                                </select>
                                <x-input-error :messages="$errors->get('status')" class="mt-2" />
                            </div>

                            <!-- Update Button for Worker -->
                            <div class="flex items-center justify-end mt-4">
                                <a class="btn btn-primary" href="{{ route('projects.index') }}"> Back</a>
                                <x-primary-button class="ms-4">
                                    {{ __('Update') }}
                                </x-primary-button>
                            </div>
                        </form>
                    @endrole






                </div>
            </div>
        </div>
    </div>
</x-tenant-app-layout>
