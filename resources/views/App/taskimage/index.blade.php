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

                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if (session('message'))
                            <div class="alert alert-warning">
                                {{ session('message') }}
                            </div>
                        @endif


                        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
                            <strong>
                                <h1 class="text-center" style="font-size:30px">Upload Images for {{ $task->title }}
                                </h1>
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
                                {{-- <div class="mt-4">
                                    <x-input-label for="task_id" :value="__('Enter Task')" /><br>
                                    <select class="block mt-1 w-full" id="task_id" name="task_id">
                                        <option value="">Select Task</option>

                                        <option value="{{ $task->id }}">{{ $task->title }}</option>

                                    </select>
                                </div>
                                <br> --}}



                                <br>
                                <br>
                                <!-- Upload New Photo -->
                                <div class="mb-3">
                                    <label for="new_photo">Upload New Photo:</label>
                                    <input type="file" id="new_photo" name="images[]" multiple class="form-control">

                                </div>

                                <div class="mb-3">
                                    <div class="mt-4">
                                        <x-input-label for="reason" :value="__('reason')" />

                                        <textarea id="reason" cols="30" rows="4" class="block mt-1 w-full" name="reason"
                                            :value="old('reason')"required autofocus style="border-radius: 5px;"></textarea>
                                        <x-input-error :messages="$errors->get('reason')" class="mt-2" />
                                    </div>
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

                            </form>

                            <div>
                                {{-- <h3>Before</h3> --}}
                                <div class="image-container">
                                    <div class="image" >
                                        <strong>
                                            <h2 style="font-size: 30px; ">Progress Images:</h2>
                                        </strong>
                                        <br>
                                        <div class="image-row" >
                                            @foreach ($taskImages as $image)
                                                <div class="img" style="">
                                                    <img src="{{ global_asset($image->images) }}" />
                                                </div>
                                                <a class="btn btn-danger"
                                                    href ="{{ url('tasks/' . $image->id . '/delete') }}">Remove
                                                    Image</a>


                                                @role('Project Manager')
                                                    <td>
                                                        @if (!$image->is_approved)
                                                            <a class="btn btn-success"
                                                                href="{{ url('taskimage/' . $image->id . '/verified') }}"
                                                                onclick="return confirm('Are you sure you want to verify this task progress?')">Verify</a>
                                                        @else
                                                            <svg style="color:green;" xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-check2-all"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0" />
                                                                <path
                                                                    d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708" />
                                                            </svg>
                                                            <p style="color:rgb(0, 182, 0);">Verified
                                                                <a class="btn btn-primary"
                                                                    href="{{ url('taskimage/' . $image->id . '/mail') }}"
                                                                    onclick="return confirm('Are you sure you want to send email to this user?')">Send
                                                                    Mail</a>
                                                            </p>
                                                        @endif
                                                    </td>
                                                @endrole

                                                @role('worker')
                                                    @if ($image->is_approved)
                                                        <svg style="color:green;" xmlns="http://www.w3.org/2000/svg"
                                                            width="16" height="16" fill="currentColor"
                                                            class="bi bi-check2-all" viewBox="0 0 16 16">
                                                            <path
                                                                d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0" />
                                                            <path
                                                                d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708" />
                                                        </svg>
                                                        <p style="color:rgb(0, 182, 0);">Verified</p>
                                                    @else
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor" class="bi bi-check-lg"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z" />
                                                        </svg>
                                                        <p>Unverified</p>
                                                    @endif
                                                @endrole

                                                <div class="form-group">
                                                    <strong>Description:</strong>
                                                    <p>{{ $image->reason }}</p>


                                                </div>

                                                <hr>


                                                @if ($image->is_approved)
                                                    No Comments Section Available the Progress has been verified
                                                @else
                                                
                                                    <div class="comment-area mt-4" style="border: black;">
                                                        <div class="card card-body">
                                                            <h6 class="card-title">Leave a comment</h6>
                                                            <form action="{{ url('comments') }}" method="POST">
                                                                @csrf
                                                                <input type="hidden" name="image_id"
                                                                    value="{{ $image->id }}">
                                                                <textarea name="comment_body" class="form-control" rows="3" required></textarea>
                                                                <button type="submit"
                                                                    class="btn btn-primary">Submit</button>
                                                            </form>

                                                            @forelse ($image->comments as $comment)
                                                                <div class="card card-body shadow-sm mt-3">
                                                                    <div class="detail-area">
                                                                        <div class="user-name mb-11">
                                                                            @if ($comment->user)
                                                                                {{ $comment->user->name }}
                                                                            @endif
                                                                            <small class="ms-3 text-primary">Commented
                                                                                on:
                                                                                {{ $comment->created_at->format('d-m-Y') }}</small>
                                                                        </div>
                                                                        <p class="user-comment mb-1">
                                                                            {{ $comment->comment_body }}
                                                                        </p>

                                                                        @if (Auth::check() && Auth::id() == $comment->user_id)
                                                                            <div>

                                                                                <a href=""
                                                                                    class="btn btn-primary btn-sm me-2">Edit</a>
                                                                                <a href=""
                                                                                    class="btn btn-danger btn-sm me-2">Delete</a>
                                                                            </div>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            @empty
                                                                <h6>no comments yet</h6>
                                                            @endforelse
                                                        </div>

                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    
                                        {{-- <div>

                                        </div> --}}

                                    </div>



                                </div>
                            </div>

                        </div>


                    </div>



                </div>
            </div>
        </div>
        </div>







    </x-tenant-app-layout>

</body>

</html>
