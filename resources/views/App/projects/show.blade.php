<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Information</title>

    <style>
        .contact-form {
            width: 80%;
            margin: 0 auto;
        }

        /* .form-group {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        } */

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
            /* padding: 10px; */
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        /* textarea {
            height: 150px;
        } */

        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>

</head>

<body>

    <x-tenant-app-layout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                    <div class="p-6 text-gray-900">

                        <div class="row">
                            <div class="col-lg-12 margin-tb">
                                <div class="pull-center">
                                    <h2 class="text-center "> Project Detail Calculation</h2>
                                </div>
                                <br><br>
                                <div class="pull-right">
                                    <a class="btn btn-primary float-right" href="{{ route('projects.index') }}">
                                        Back</a>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Name:</strong>
                                    {{ $project->title }}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Details:</strong>
                                    {{ $project->description }}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>start Date: </strong>
                                    {{ $project->start_date }}
                                </div>
                            </div>  
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>End Date: </strong>
                                    {{ $project->end_date }}
                                </div>
                            </div>  
                        </div> --}}

                        <div class="contact-form">
                            <form action="#" method="post">
                                <div class="form-group">
                                    <div class="half left">
                                        <label for="name">Name:</label>
                                        <input type="text" id="name" name="name"
                                            value="{{ $project->title }}" disabled>

                                        <label for="name">start date:</label>
                                        <input type="text" id="name" name="name"
                                            value="{{ $project->start_date }}" disabled>

                                        <label for="name">Status:</label>
                                        <input type="text" id="name" name="name"
                                            value="{{ $project->status == 0 ? 'Not Started' : '' }}
                                            {{ $project->status == 1 ? 'Started' : '' }}
                                            {{ $project->status == 2 ? 'Pending' : '' }}
                                            {{ $project->status == 3 ? 'Complete' : '' }}" disabled>

                                        <label for="name">Total Tasks:</label>
                                        <input type="text" id="name" name="name"
                                        value="{{ $totalTasks }}" disabled>

                                    </div>
                                    <div class="half right">
                                        <label for="email">Project Manager:</label>
                                        <input type="email" id="email" name="email" value="{{ $manager->name }}"
                                            disabled>

                                        <label for="name">End date:</label>
                                        <input type="text" id="name" name="name"
                                            value="{{ $project->end_date }}" disabled>

                                        <label for="name">Completion Percantage %:</label>
                                        <input type="text" id="name" name="name"
                                        value="{{ $completionPercentage }}" disabled>

                                            <label for="name">Total Users involved in the Project</label>
                                        <input type="text" id="name" name="name"
                                            value="{{ $totalUsers }}" disabled>
                                    </div>
                                </div>
                                <p>description:</p>
                                <div class="form-group">
                                    
                                    <input type="text" id="name" name="name" style="height: 100px;" value="{{ $project->description }}" disabled />
                                </div>

                            </form>
                        </div>


                    </div>
                </div>
            </div>
        </div>




        <div class="category">

            @include('App.Category.category')

            {{-- @include('App.Category.category', ['category' => $category]) --}}

        </div>


        <div class="Tasks">

            @include('App.Tasks.index')


        </div>

    </x-tenant-app-layout>

</body>

</html>
