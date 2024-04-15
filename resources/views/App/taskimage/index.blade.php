<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>





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

        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        /* Style for image */
        img {
            display: block;
            margin-bottom: 10px;
        }

        /* Style for file input */
        input[type="file"] {
            margin-bottom: 10px;
        }

        /* Style for submit button */
        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>

</head>

<body>




    <x-tenant-app-layout>
        <div class="py-12">

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                    <div class="p-6 text-gray-900">

                        @if (@session('status'))
                            <div class="alert alert-success">{{ session('status') }}</div>
                        @endif


                        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
                            <strong>
                                <h1 class="text-center" style="font-size:30px">Upload Images for  {{ $task->title }}</h1>
                            </strong>
{{-- 
                            <a class="btn btn-primary float-right" href="{{ url('tasks/' . $task->id . '/show') }}">
                                Back</a> --}}
                        </h2>



                        {{-- <div class="contact-form">
                            <form method="post" action="#">

                                <div class="form-group">
                                    <div class="half left">
                                        <label for="name">Project Name:</label>
                                        <input type="text" id="name" name="name"
                                            value="{{ $project->title }}" disabled>

                                        <label for="name">Task Name:</label>
                                        <input type="text" id="name" name="name" value="{{ $task->title }}"
                                            disabled>

                                        <label for="name">start date:</label>
                                        <input type="text" id="name" name="name"
                                            value="{{ $task->start_date }}" disabled>

                                

                                    </div>
                                    <div class="half right">
                                        <label for="email">Project Manager:</label>
                                        <input type="email" id="email" name="email" value="{{ $manager->name }}"
                                            disabled>

                                        <label for="email">Assigned To:</label>
                                        <input type="email" id="email" name="email"
                                            value="{{ $task->user->name }}" disabled>

                                        <label for="name">End date:</label>
                                        <input type="text" id="name" name="name"
                                            value="{{ $task->end_date }}" disabled>

                                 
                                    </div>
                                </div>


                                <p>description:</p>
                                <div class="form-group">

                                    <input type="text" id="name" name="name" style="height: 100px;"
                                        value="{{ $project->description }}" disabled />
                                </div>
                            </form>
                        </div> --}}     

                        {{-- <strong>
                            <hr style="">
                        </strong> --}}

                        {{-- <div class="taskstatus">
                            <form method="POST" action="{{ route('task.userupdate', $task->id) }}">
                                @csrf
                                @method('PUT')
                                <x-input-label for="status" :value="__('Enter Status')"  /><br>
                                <select class="block mt-1 w-full" id="status" name="status" :value=" $task->status ">
                                    <option value="0">Not started</option>
                                    <option value="1">Started</option>
                                    <option value="2">Pending</option>
                                    <option value="3">Complete</option>
                                </select>
                                <x-input-error :messages="$errors->get('status')" class="mt-2" />

                                <div class="flex items-center justify-end mt-4">
                                    <x-primary-button class="ms-4">
                                        {{ __('Update') }}
                                    </x-primary-button>
                                </div>
                            </form>
                        </div> --}}





                        @if ($errors->any())
                            <ul class="alert alert-warning">
                                @foreach ($errors->all() as $error)
                                    <li> {{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <div class="uploadimg" style="padding: 100px;">

                            <form action="{{ url('tasks/' . $task->id . '/upload') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf


                                <div class="mt-4">
                                    <x-input-label for="task_id" :value="__('Enter Task')" /><br>
                                    <select class="block mt-1 w-full" id="task_id" name="task_id">
                                        <option value="">Select Task</option>

                                        <option value="{{ $task->id }}">{{ $task->title }}</option>

                                    </select>
                                </div>
                                <br>

                             

                                <br>
                                <br>
                                <!-- Upload New Photo -->
                                <div class="mb-3">
                                    <label for="new_photo">Upload New Photo:</label>
                                    <input type="file" id="new_photo" name="images[]" multiple class="form-control">
                                    
                                </div>

                                <!-- Submit Button -->
                                <div>
                                    <div class="flex items-center justify-end mt-4">
                                        <x-primary-button class="ms-4">
                                            {{ __('Update') }}
                                        </x-primary-button>
                                    </div>
                                </div>
                                <br>
                                <br>

                                <div class="col-sm-4">
                                    {{-- <h3>Before</h3> --}}
                                    <div class="image-container">
                                        <div class="image">
                                            <strong>
                                                <h2 style="font-size: 30px; ">Progress Images:</h2>
                                            </strong>
                                            <br>
                                            <div class="image-row">
                                                @foreach ($taskImages as $image)
                                                    <div class="img" style="">
                                                        <img src="{{ global_asset($image->images) }}" />
                                                    </div>
                                                    <a class="btn btn-danger" style="margin-bottom: 7%"
                                                        href ="{{ url('tasks/' . $image->id . '/delete') }}">Remove
                                                        Image</a><br />
                                                @endforeach
                                            </div>



                                        </div>
                                    </div>

                                </div>





                            </form>

                        </div>


                    </div>
                </div>
            </div>
        </div>







    </x-tenant-app-layout>

</body>

</html>
