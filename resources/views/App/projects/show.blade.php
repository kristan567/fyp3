<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Information</title>
</head>

<body>

    <x-tenant-app-layout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                    <div class="p-6 text-gray-900">

                        <div class="row">
                            <div class="col-lg-12 margin-tb">
                                <div class="pull-left">
                                    <h2 class="text-center "> Show Project</h2>
                                </div>
                                <div class="pull-right">
                                    <a class="btn btn-primary float-right" href="{{ route('projects.index') }}">
                                        Back</a>
                                </div>
                            </div>
                        </div>

                        <div class="row">
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
