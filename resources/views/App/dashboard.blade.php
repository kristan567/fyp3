{{-- <x-tenant-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}

                    @role('Project Manager')
                        <x-btn-link href="{{ route('users.index') }}">Users</x-btn-link>
                    @endrole
                </div>

                <div class="p-6 text-gray-900">


                    @role('Project Manager')
                        {{ __('add Projects ') }}

                        <x-btn-link href="{{ route('projects.index') }}">Projects</x-btn-link>
                    @endrole

                </div>

                <div class="p-6 text-gray-900">


                    @role('worker')
                        {{ __('view Task ') }}

                        <x-btn-link href="{{ route('projects.index') }}">View Tasks</x-btn-link>
                    @endrole

                </div>
            </div>
        </div>
    </div>
</x-tenant-app-layout> --}}




<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar</title>

    <!--fonts-->
    <link rel="preconnect" `href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;1,400;1,500&display=swap"
        rel="stylesheet">

    <!--fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.3.0/css/all.css">



    <!-- Add these lines to your HTML layout file, like resources/views/layouts/app.blade.php -->
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> --}}








    <style>
        /*css variables*/
        :root {
            --body-bg-color: #dce4e3;
            --green: #18c29c;
            --light-green: #8ed7c6;
            --light-grey: #dce4e3;
            --text-color: #084236;
        }

        /*reset*/
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        button {
            border: none;
            outline: none;
            background: none;
            cursor: pointer;
        }

        input {
            border: none;
            outline: none;
            background: none;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        li {
            list-style: none;
        }



        /*navbar*/
        .navbar {
            z-index: 2;
            width: 80px;
            max-width: 3rem;
            background-color: #243e56;
            color: rgba(255, 255, 255, 0.7);
            height: 100vh;
            position: fixed;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: all .3s ease;
        }


        .navbar .navbar-container {
            padding: 1rem;
        }

        /*logo*/
        .navbar .navbar-container .navbar-logo-div {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.7rem;
            padding-left: 1rem;
        }

        .navbar .navbar-container .navbar-logo-div .navbar-toggler {
            transition: .2s ease-in-out;
        }

        .navbar .navbar-container .navbar-logo-div .navbar-toggler i {
            font-size: 1rem;
        }

        .navbar .navbar-container .navbar-logo-div .navbar-toggler:hover {
            color: var(--light-grey);
        }

        .navbar .navbar-container .navbar-logo-div .navbar-logo-link {
            display: none;
        }

        /*search*/
        .navbar .navbar-search {
            width: 100%;
            background-image: url('../img/search.svg');
            background-repeat: no-repeat;
            background-color: var(--light-green);
            background-position: center;

            margin: 0;
            background-position: 1rem 0.7rem;
            padding: 1rem;
            padding-left: 3rem;
            border-radius: 10px;
            margin-bottom: 1.2rem;
        }

        #icon-search {
            position: absolute;
            color: var(--green);
            font-size: 1.2rem;
            top: 4.5rem;
            left: 1.4rem;
        }

        .navbar .navbar-search::placeholder {
            visibility: hidden;
            opacity: 0;
        }

        /*menu list*/
        .navbar .menu-list {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1.5rem;
            width: 100%;
        }

        .navbar .menu-list .menu-item {
            width: 100%;
        }


        .navbar .menu-list .menu-item .menu-link {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.7rem;
            transition: 0.2s ease-in-out;
            font-weight: 500;
        }


        .navbar .menu-list .menu-item .menu-link .menu-link-text {
            display: none;
            color: inherit;
        }

        .navbar .menu-list .menu-item .menu-link:hover,
        .navbar .menu-list .menu-item .menu-link:hover {
            color: var(--light-grey);
        }

        /*user information div*/
        .navbar .user-container {
            background-color: var(--light-green);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0.5rem 1rem;
        }

        .navbar .user-container .user-info {
            display: flex;
            align-items: center;
            gap: 0.4rem;
            display: none;
        }

        .navbar .user-container .user-info i {
            font-size: 1.2rem;
        }

        .navbar .user-container .user-info .user-details .user-name {
            font-size: 1.1rem;
            font-weight: light;
        }

        .navbar .user-container .user-info .user-details .user-occupation {
            font-size: 0.9rem;
            font-weight: lighter;
        }



        /*navbar.active*/
        /*navbar.active navbar*/
        .navbar.active {
            width: 300px;
            max-width: 15%;


        }

        /*navbar.active logo*/
        .navbar.active .navbar-container .navbar-logo-div {
            justify-content: space-between;
            padding-left: 1rem;
        }

        .navbar.active .navbar-container .navbar-logo-div .navbar-logo-link {
            display: block;
        }

        /*navbar.active search input*/
        .navbar.active .navbar-search {
            background-position: 1rem 0.7rem;
            padding: 1rem;
            padding-left: 3rem;
        }

        .navbar.active #icon-search {
            top: 5.1rem;
            left: 1.6rem;
        }

        .navbar.active .navbar-search::placeholder {
            visibility: visible;
            opacity: 1;
        }

        /*navbar.active menu*/
        .navbar.active .menu-list {
            padding-left: 1rem;
        }

        .navbar.active .menu-list .menu-item .menu-link {
            justify-content: flex-start;
        }

        .navbar.active .menu-list .menu-item .menu-link .menu-link-text {
            display: inline;
        }

        /*navbar.active user container*/
        .navbar.active .user-container {
            justify-content: space-between;
            align-items: center;
        }

        .navbar.active .user-container .user-info {
            display: flex;
        }


        /*dashboard*/
        .dashboard {
            width: auto;
            height: auto;
            /* margin-left: 5rem; */
        }

        .navbar.active+.dashboard {
            margin-left: 15%;
        }




        /*media queries*/
        @media only screen and (max-width: 870px) {
            .navbar.active {
                max-width: 27%;
            }

            .navbar.active+.dashboard {
                margin-left: 30%;
            }
        }

        @media only screen and (max-width: 670px) {
            .navbar.active {
                min-width: 100%;
            }

            .navbar .navbar-container {
                position: relative;
                width: 100%;
            }

            .navbar .navbar-search {
                position: absolute;
                border-radius: 0;
                left: 0;
            }

            .navbar .menu-item {
                position: relative;
                top: 4rem;
            }
        }

        @media only screen and (max-width: 350px) {
            .dashboard .title {
                font-size: 1.7rem;
            }
        }


        /* for conatiner */

        .page {
            font-family: sans-serif;
            padding: 24px;
        }

        hr {
            margin-block: 32px;
        }

        .layout {
            display: flex;
            gap: 24px;
            flex-flow: row wrap;
        }

        .layout>div {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            min-inline-size: 100px;
            min-block-size: 100px;
            box-shadow: 0 0 8px grey;
        }

        .layout>div:hover {
            box-shadow: 0 0 16px grey;
            transition-duration: 0.2s;
        }

        /* Styles above here aren't super relevant to containers */

        .card {
            container: card / inline-size;
        }

        .card div {
            display: block;
            inline-size: 100%;
            border-radius: inherit;
            text-align: center;
        }

        .chartContainer {
            display: flex;
            gap: 24px;
            flex-flow: row wrap;
            display: flex;
            align-items: center;
            justify-content: center;

        }

        .charts {
            display: block;
            border-radius: 10px;
            inline-size: 100%;
            border-radius: inherit;
            text-align: center;
            box-shadow: 0 0 8px grey;
        }

        .charts:hover {
            box-shadow: 0 0 16px grey;
            transition-duration: 0.2s;
        }

        @container card (min-width: 400px) {

            /* Note that containers cannot style themselves, so an additional wrapper element is needed. */
            div {
                background-color: salmon;
            }

            h2 {
                font-size: 3rem;
            }
        }


        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        @media only screen and (max-width: 600px) {

            /* Adjust table styles for smaller screens */
            table {
                width: 100% !important;
                height: auto;
                border: 0;
            }

            /* Hide table borders and adjust padding for smaller screens */
            td,
            th {
                border: none;
                padding: 6px;
            }

            /* Alternate row background color still visible for readability */
            tr:nth-child(even) {
                background-color: transparent;
            }
        }

        .hovercontainer {
            position: relative;
        }

        .icon {

            padding: 2px 5px;
            width: fit-content;
        }

        .hovercontainer:hover .popup {
            opacity: 1;
            display: block;
        }

        .popup {
            margin-top: 20%;
            width: fit-content;
            background-color: rgba(180, 180, 200);
            padding: 1px 20px;
            position: absolute;
            top: 20px;
            transition: all 0.25s ease;
            opacity: 0;
            display: none;
        }
    </style>
</head>

<body>

    <!--aside bar-->
    <nav class="navbar">
        <div class="navbar-container">
            <!--logo div-->
            <div class="navbar-logo-div">
                <a class="navbar-logo-link" href="#">
                    <i class="fas fa-shield-dog"></i>
                </a>
                <button class="navbar-toggler"><i class='fas fa-solid fa-bars'></i></button>
            </div>

            <!--search input-->
            <br>
            <br>

            <!--item list-->
            <ul class="menu-list">
                <li class="menu-item">
                    <a class="menu-link" href="{{ route('App.dashboard') }}">
                        <i class="fas fa-solid fa-table"></i>
                        <span class="menu-link-text">Dashboard </span>
                    </a>
                </li>
                @role('Project Manager')
                    <li class="menu-item">
                        <a class="menu-link" href="{{ route('users.index') }}">
                            <i class="fas fa-solid fa-user"></i>
                            <span class="menu-link-text">Users</span>
                        </a>
                    </li>
                @endrole
                @role('Project Manager')
                    <li class="menu-item">
                        <a class="menu-link" href="{{ route('projects.index') }}">
                            <i class="fas fa-solid fa-paw"></i>
                            <span class="menu-link-text">Project</span>
                        </a>
                    </li>
                @endrole
                @role('worker')
                    <li class="menu-item">
                        <a class="menu-link" href="{{ route('projects.index') }}">
                            <i class="fas fa-solid fa-paw"></i>
                            <span class="menu-link-text">Project</span>
                        </a>
                    </li>
                @endrole

                @role('Project Manager')
                    <li class="menu-item">
                        <a class="menu-link" href="{{ route('recommend.index') }}">
                            <i class="fas fa-solid fa-paw"></i>
                            <span class="menu-link-text">Recommend</span>
                        </a>
                    </li>
                @endrole

                <li class="menu-item">
                    <a class="menu-link" href="{{ route('materials.index') }}">
                        <i class="fas fa-regular fa-stethoscope"></i>
                        <span class="menu-link-text">Materials</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a class="menu-link" href="{{ route('equipments.index') }}">
                        <i class="fas fa-duotone fa-gear"></i>
                        <span class="menu-link-text">Equipment</span>
                    </a>
                </li>
            </ul>
        </div>

        <!--div user info-->
        <div class="user-container">
            <div class="user-info">
                {{-- <i class="fas fa-solid fa-user-secret"></i> --}}
                <div class="user-details">
                    <h3 class="user-name">Eleanor Pena</h3>
                    <p class="user-occupation">Veterinary </p>
                </div>
            </div>
            <a class="logout-btn" href="#">
                <i class="fas fa-solid fa-user-secret"></i>
            </a>
        </div>
    </nav>

    <!--dashboard-->
    <main class="dashboard">


        @role('worker')
            <x-tenant-app-layout>
                <x-slot name="header">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Dashboard') }}
                    </h2>
                </x-slot>

                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">


                            <div class="p-6 text-gray-900">


                                @role('worker')
                                    {{ __('view Task ') }}

                                    <x-btn-link href="{{ route('projects.index') }}">View Tasks</x-btn-link>

                                @endrole

                            </div>
                        </div>
                    </div>
                </div>
            </x-tenant-app-layout>
        @endrole




        @role('Project Manager')

            <x-tenant-app-layout>
                {{-- <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Dashboard') }}
                </h2>
            </x-slot> --}}
                \
                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                            <div class="p-6 text-gray-900">
                                <strong>
                                    <h1 style="font-size: 30px">Dashboard</h1>
                                </strong>
                            </div>

                            <div class="p-6 text-gray-900">
                                <div class="page">

                                    <div class="layout">
                                        <div>
                                            <div>
                                                <h2>Total user: {{ $totaluser }}</h2>
                                            </div>
                                        </div>
                                        <div class="hovercontainer">
                                            <div>
                                                <div>

                                                    <p class="icon">users engaged in tasks: {{ $totaluserwithtasks }} </p>

                                                </div>

                                            </div>
                                            <div class="popup">
                                                <p>

                                                <ul>

                                                    @foreach ($userwithtasks as $user)
                                                        <li>{{ $user->name }}</li>
                                                    @endforeach
                                                    
                                                </ul>

                                                </p>
                                            </div>
                                        </div>

                                        <div class="hovercontainer">
                                            <div>
                                                <div>

                                                    <p class="icon">

                                                        users not engaged in tasks:
                                                        {{ $totalUsersWithoutTasks }}

                                                    </p>
                                                </div>

                                            </div>
                                            <div class="popup">
                                                <p>
                                                <div class="users-without-tasks">
                                                    <ul>
                                                        @foreach ($usersWithoutTasks as $user)
                                                            <li>{{ $user->name }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                </p>
                                            </div>
                                        </div>


                                        <div>
                                            <div>
                                                <h2>Total Budget: {{ $totalCost }}</h2>
                                            </div>
                                        </div>

                                        {{-- <div>
                                        <div>
                                            <h2>Element 5</h2>
                                        </div>
                                    </div> --}}

                                    </div>
                                </div>


                            </div>

                            <div class="chartContainer">
                                <div class="charts" style="width:45%;">
                                    <div class="p-6 text-gray-900 ">
                                        <canvas id="myChart" style="width: 400px; height: 300px;"></canvas>

                                    </div>
                                </div>

                                <div class="charts" style="width:45%; ">
                                    <div class="p-6 text-gray-900 ">
                                        <canvas id="taskchart" style="width: 200px; height: 300px;"></canvas>

                                    </div>
                                </div>

                                <div class="charts" style="width:45%; ">
                                    <div class="p-6 text-gray-900 ">
                                        <canvas id="projectStatusChart"
                                            style="width:width: 200px; height: 300px;"></canvas>

                                    </div>
                                </div>

                                <div class="charts" style="width:45%; ">
                                    <div class="p-6 text-gray-900 ">
                                        <canvas id="totalTasksChart" style="width: 200px; height: 300px;"></canvas>

                                    </div>
                                </div>

                                <div class="charts" style="width:80%; ">
                                    <div class="p-6 text-gray-900 ">
                                        <canvas id="totalTasksByProjectChart" style="width: 100%; height: 300px;"></canvas>

                                    </div>
                                </div>




                            </div>


                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>

                            {{-- <div class="naavigatorbuttons">

                            <div class="p-6 text-gray-900">
                                {{ __("You're logged in!") }}

                                @role('Project Manager')
                                    <x-btn-link href="{{ route('users.index') }}">Users</x-btn-link>
                                @endrole
                            </div>

                            <div class="p-6 text-gray-900">


                                @role('Project Manager')
                                    {{ __('add Projects ') }}

                                    <x-btn-link href="{{ route('projects.index') }}">Projects</x-btn-link>
                                @endrole

                            </div>

                            <div class="p-6 text-gray-900">


                                @role('worker')
                                    {{ __('view Task ') }}

                                    <x-btn-link href="{{ route('projects.index') }}">View Tasks</x-btn-link>
                                @endrole

                            </div>
                        </div> --}}

                            <center><strong>
                                    <h1 style="font-size: 30px">Task In Progress</h1>
                                </strong></center>
                            <div class="p-6 text-gray-900">



                                <div class="Tasks">


                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>

                                                <th>Priority</th>
                                                <th>status</th>

                                                <th>Start Date</th>
                                                <th>End Date</th>
                                                <th>Assigned To </th>





                                            </tr>

                                        </thead>
                                        <tbody>
                                            @role('Project Manager')
                                                {{-- @if ($project->tasks) --}}
                                                @if ($tasks)
                                                    {{-- @foreach ($project->tasks as $task) --}}
                                                    @foreach ($tasks as $task)
                                                        <tr>
                                                            <td>{{ $task->id }}</td>
                                                            <td>{{ $task->title }}</td>

                                                            <td>{{ $task->priority }}</td>
                                                            <td>{{ $task->status == 0 ? 'Not Started' : '' }}
                                                                {{ $task->status == 1 ? 'Started' : '' }}
                                                                {{ $task->status == 2 ? 'Pending' : '' }}
                                                                {{ $task->status == 3 ? 'Complete' : '' }}</td>
                                                            <td>{{ $task->start_date }}</td>
                                                            <td>{{ $task->end_date }}</td>
                                                            <td>{{ $task->user->name }}</td>



                                                        </tr>
                                                    @endforeach
                                                @else
                                                    <tr>
                                                        <td colspan="3">No Tasks found</td>
                                                    </tr>
                                                @endif

                                            @endrole





                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </x-tenant-app-layout>
        @endrole
    </main>

    <script>
        //elements 
        const btnToggler = window.document.querySelector(".navbar-toggler");
        // const     = window.document.querySelector(".navbar-search");
        // const iconSearch = window.document.querySelector("#icon-search");
        const navbar = window.document.querySelector(".navbar");

        //events
        btnToggler.addEventListener('click', () => {
            navbar.classList.toggle('active');
        });
    </script>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    {{-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    @stack('scripts') --}}

    @push('scripts')
        <script>
            const data = {
                labels: @json($data->map(fn($data) => $data->date)),
                datasets: [{
                    label: 'Registered users in the last 30 days',
                    backgroundColor: 'rgba(255, 99, 132, 0.3)',
                    borderColor: 'rgb(255, 99, 132)',
                    data: @json($data->map(fn($data) => $data->aggregate)),
                }]
            };
            const config = {
                type: 'bar',
                data: data,
                options: {
                    maintainAspectRatio: false, // Disable aspect ratio to allow resizing
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true // Start y-axis from zero
                        }
                    }
                }
            };
            const myChart = new Chart(
                document.getElementById('myChart'),
                config
            );
        </script>
    @endpush

    {{-- @push('scripts')
        <script>
            const taskdata = {
                labels: @json($taskdata->map(fn($taskdata) => $taskdata->date)),
                datasets: [{
                    label: 'Registered users in the last 30 days',
                    backgroundColor: 'rgba(255, 99, 132, 0.3)',
                    borderColor: 'rgb(255, 99, 132)',
                    data: @json($taskdata->map(fn($taskdata) => $taskdata->aggregate)),
                }]
            };
            const config = {
                type: 'bar',
                taskdata: taskdata,
                options: {
                    maintainAspectRatio: false, // Disable aspect ratio to allow resizing
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true // Start y-axis from zero
                        }
                    }
                }
            };
            const taskchart = new Chart(
                document.getElementById('taskchart'),
                config
            );
          
        </script>
    @endpush --}}

    @push('scripts')
        <script>
            const taskdata = {
                labels: @json($taskdata->map(fn($taskdata) => $taskdata->date)),
                datasets: [{
                    label: 'Task completed in the last 30 days',
                    backgroundColor: 'rgba(255, 99, 132, 0.3)',
                    borderColor: 'rgb(255, 99, 132)',
                    data: @json($taskdata->map(fn($taskdata) => $taskdata->aggregate)),
                }]
            };
            const configTask = {
                type: 'line',
                data: taskdata,
                options: {
                    maintainAspectRatio: false, // Disable aspect ratio to allow resizing
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true // Start y-axis from zero
                        }
                    }
                }
            };
            const taskchart = new Chart(
                document.getElementById('taskchart'),
                configTask
            );
        </script>
    @endpush


    @push('scripts')
        <script>
            // Get the counts from the controller
            var completedCount = {{ $completedProjectsCount }};
            var incompleteCount = {{ $incompleteProjectsCount }};

            // Render pie chart
            var ctx = document.getElementById('projectStatusChart').getContext('2d');
            var myChartproject = new Chart(ctx, {
                type: 'pie',
                data: {

                    labels: ['Completed', 'Incomplete'],
                    datasets: [{
                        data: [completedCount, incompleteCount],
                        backgroundColor: ['#36a2eb', '#ff6384']
                    }]
                },
                options: {
                    // Disable responsiveness
                    maintainAspectRatio: false, // Disable aspect ratio
                    // Set height
                }
            });
        </script>
    @endpush


    @push('scripts')
        <script>
            // Get data from the PHP variables passed from the controller
            var projectLabels = <?php echo json_encode($projectLabels); ?>;
            var taskCounts = <?php echo json_encode($taskCounts); ?>;

            // Create the bar chart
            var ctx = document.getElementById('totalTasksChart').getContext('2d');
            var myCharttotaltask = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: projectLabels,
                    datasets: [{
                        label: 'Total Tasks',
                        data: taskCounts,
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    }]
                },
                options: {

                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>
        
    @endpush



    @push('scripts')
        <script>

            // Get data from the PHP variables passed from the controller
            var projectIds = <?php echo json_encode($projectIds); ?>;
            var completedTaskCounts = <?php echo json_encode($completedTaskCounts); ?>;
            var incompleteTaskCounts = <?php echo json_encode($incompleteTaskCounts); ?>;

            // Create the grouped bar chart
            var ctx = document.getElementById('totalTasksByProjectChart').getContext('2d');
            var totalcompleteincomplete = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: projectIds,
                    datasets: [{
                        label: 'Completed Tasks',
                        data: completedTaskCounts,
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    }, {
                        label: 'Incomplete Tasks',
                        data: incompleteTaskCounts,
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>
    @endpush





    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    @stack('scripts')


</body>

</html>
</body>

</html>
