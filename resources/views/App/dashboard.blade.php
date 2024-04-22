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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>



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

            .navbar+.dashboard {
                margin-left: 15%;
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

            .navbar+.dashboard {
                margin-left: 15%;
            }


        }

        @media only screen and (max-width: 350px) {
            .dashboard .title {
                font-size: 1.7rem;
            }

            .navbar+.dashboard {
                margin-left: 15%;
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
            border-radius: 10px;
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



        .charts {
            width: 45%;
        }

        #myChart,
        #userchart,
        #taskchart,
        #projectStatusChart,
        #totalTasksChart,
        #totalTasksByProjectChart,
        #equipmentChart,
        #materialChart {

            width: 400px;
            height: 300px;

        }

        .descharts {
            display: block;
            border-radius: 10px;
            inline-size: 100%;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 0 8px grey;
            height: 300px;
            padding: 50px;
        }

        .descharts {
            width: 45%;
        }

        /* .descharts:hover {
            box-shadow: 0 0 16px grey;
            transition-duration: 0.2s;
        } */

        @media only screen and (max-width: 600px) {

            .charts {
                width: 100%;
            }

            .descharts {

                height: 400px;
                width: 100%;
                padding: 10px;
            }
        }
    </style>



</head>

<body>

    <!--aside bar-->
    <nav class="navbar">
        <div class="navbar-container">
            <!--logo div-->
            <div class="navbar-logo-div">
                <img width="40" height="40" class="rounded-circle" style="border-radius: 30px;" src="{{ global_asset('images/forApp/Untitled-1.png') }}" >
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-kanban" viewBox="0 0 16 16">
                                <path d="M13.5 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-11a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zm-11-1a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h11a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
                                <path d="M6.5 3a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1zm-4 0a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1zm8 0a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1z"/>
                              </svg>
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lightbulb-fill" viewBox="0 0 16 16">
                                <path d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13h-5a.5.5 0 0 1-.46-.302l-.761-1.77a2 2 0 0 0-.453-.618A5.98 5.98 0 0 1 2 6m3 8.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1-.5-.5"/>
                              </svg>
                            <span class="menu-link-text">Recommend</span>
                        </a>
                    </li>
                @endrole

                <li class="menu-item">
                    <a class="menu-link" href="{{ route('materials.index') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bricks" viewBox="0 0 16 16">
                            <path d="M0 .5A.5.5 0 0 1 .5 0h15a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5H14v2h1.5a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5H14v2h1.5a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-3a.5.5 0 0 1 .5-.5H2v-2H.5a.5.5 0 0 1-.5-.5v-3A.5.5 0 0 1 .5 6H2V4H.5a.5.5 0 0 1-.5-.5zM3 4v2h4.5V4zm5.5 0v2H13V4zM3 10v2h4.5v-2zm5.5 0v2H13v-2zM1 1v2h3.5V1zm4.5 0v2h5V1zm6 0v2H15V1zM1 7v2h3.5V7zm4.5 0v2h5V7zm6 0v2H15V7zM1 13v2h3.5v-2zm4.5 0v2h5v-2zm6 0v2H15v-2z"/>
                          </svg>
                        <span class="menu-link-text">Materials</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a class="menu-link" href="{{ route('equipments.index') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hammer" viewBox="0 0 16 16">
                            <path d="M9.972 2.508a.5.5 0 0 0-.16-.556l-.178-.129a5 5 0 0 0-2.076-.783C6.215.862 4.504 1.229 2.84 3.133H1.786a.5.5 0 0 0-.354.147L.146 4.567a.5.5 0 0 0 0 .706l2.571 2.579a.5.5 0 0 0 .708 0l1.286-1.29a.5.5 0 0 0 .146-.353V5.57l8.387 8.873A.5.5 0 0 0 14 14.5l1.5-1.5a.5.5 0 0 0 .017-.689l-9.129-8.63c.747-.456 1.772-.839 3.112-.839a.5.5 0 0 0 .472-.334"/>
                          </svg>
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
                    <h3 class="user-name"><div>{{ Auth::user()->name }}</div></h3>
                  
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
                                        <div style="background-color:#86afec; color:whitesmoke; ">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                                                <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4"/>
                                              </svg>

                                              
                                            <div>
                                                <h2>   Total user: {{ $totaluser }}</h2>
                                            </div>
                                        </div>
                                        <div class="hovercontainer" style="background-color:#edcd8d; color:whitesmoke  ">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-fill-gear" viewBox="0 0 16 16">
                                                <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4m9.886-3.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382zM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0"/>
                                              </svg>

                                            <div>
                                                
                                                <div>
                                                   
                                                    <h2>users engaged: {{ $totaluserwithtasks }}
                                                    </h2>

                                                </div>

                                            </div>
                                            <div class="popup" style="border-radius: 10px;">
                                                <p>

                                                <ul>

                                                    @foreach ($userwithtasks as $user)
                                                        <li>{{ $user->name }}</li>
                                                    @endforeach

                                                </ul>

                                                </p>
                                            </div>
                                        </div>

                                        <div class="hovercontainer" style="background-color:#5fa88e; color:whitesmoke ">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
                                                <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
                                                <path d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z"/>
                                              </svg>
                                            <div>
                                                <div>

                                                    <p class="icon">

                                                        users not engaged:
                                                        {{ $totalUsersWithoutTasks }}

                                                    </p>
                                                </div>

                                            </div>
                                            <div class="popup" style="border-radius: 10px;">
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


                                        <div style="background-color:#ca6e65; color:whitesmoke  ">
                                            
                                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"  fill="currentColor" class="bi bi-cash" viewBox="0 0 16 16">
                                                <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
                                                <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2z"/>
                                              </svg>
                                            <div>
                                                <h2 style="margin-left: 10px;">Total Budget: {{ $totalCost }}</h2>
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

                            <div class="p-6 text-gray-900 ">
                                <div class="chartContainer">
                                    <div data-aos="fade-down-right" class="charts">

                                        <canvas id="myChart"></canvas>



                                    </div>

                                    <div data-aos="flip-right" class="descharts">
                                        <div class="head">
                                            <strong>
                                                <h1 style="font-size:30px; ">User Added In Month</h1>
                                            </strong>

                                        </div>
                                        <div class="text"
                                            style="display: flex; justify-content:center; align-items: center; text-align:center; margin-top:10%; font-size:20px; !important">
                                            <p>This shows the total number of user which was added in the company from last
                                                30 days</p>
                                        </div>


                                    </div>

                                    <div data-aos="flip-left" class="descharts">
                                        <div class="head">
                                            <strong>
                                                <h1 style="font-size:30px; ">User who left</h1>
                                            </strong>

                                        </div>
                                        <div class="text"
                                            style="display: flex; justify-content:center; align-items: center; text-align:center; margin-top:10%; font-size:20px; !important">
                                            <p>This shows the total numbwe of user who have left the team from last 30 days.
                                            </p>
                                        </div>
                                    </div>

                                    <div data-aos="fade-left" class="charts">

                                        <canvas id="userchart"></canvas>


                                    </div>

                                    <div data-aos="fade-right" class="charts">

                                        <canvas id="taskchart"></canvas>

                                    </div>

                                    <div data-aos="flip-left" class="descharts">
                                        <div class="head">
                                            <strong>
                                                <h1 style="font-size:30px; ">Task Completion</h1>
                                            </strong>

                                        </div>
                                        <div class="text"
                                            style="display: flex; justify-content:center; align-items: center; text-align:center; margin-top:10%; font-size:20px; !important">
                                            <p>This shows the total number of task which was completed in the last 30 days.
                                            </p>
                                        </div>


                                    </div>

                                    <div data-aos="flip-right" class="descharts">
                                        <div class="head">
                                            <strong>
                                                <h1 style="font-size:30px; ">Project Evaluation</h1>
                                            </strong>

                                        </div>
                                        <div class="text"
                                            style="display: flex; justify-content:center; align-items: center; text-align:center; margin-top:10%; font-size:20px; !important">
                                            <p>The pie chart visually represents the distribution of projects, illustrating
                                                the proportion of completed projects versus those still in progress or
                                                pending completion. </p>
                                        </div>


                                    </div>

                                    <div data-aos="fade-left" class="charts">

                                        <canvas id="projectStatusChart"></canvas>


                                    </div>

                                    <div data-aos="fade-right" class="charts">

                                        <canvas id="totalTasksChart"></canvas>

                                    </div>

                                    <div data-aos="flip-left" class="descharts">
                                        <div class="head">
                                            <strong>
                                                <h1 style="font-size:30px; ">Project Task </h1>
                                            </strong>

                                        </div>
                                        <div class="text"
                                            style="display: flex; justify-content:center; align-items: center; text-align:center; margin-top:10%; font-size:20px; !important">
                                            <p>The chart provides an insightful overview of the total number of tasks
                                                associated with each project. </p>
                                        </div>


                                    </div>


                                    <div data-aos="flip-right" class="descharts">
                                        <div class="head">
                                            <strong>
                                                <h1 style="font-size:30px; ">Project Task Status</h1>
                                            </strong>

                                        </div>
                                        <div class="text"
                                            style="display: flex; justify-content:center; align-items: center; text-align:center; margin-top:10%; font-size:20px; !important">
                                            <p>The bar graph offers a comprehensive depiction of the task status for each
                                                project, providing valuable insights into project progress and performance.
                                            </p>
                                        </div>


                                    </div>



                                    <div data-aos="fade-left" class="charts">

                                        <canvas id="totalTasksByProjectChart"></canvas>


                                    </div>



                                    <div data-aos="fade-right" class="charts">

                                        <canvas id="equipmentChart"></canvas>

                                    </div>


                                    <div data-aos="flip-right" class="descharts">
                                        <div class="head">
                                            <strong>
                                                <h1 style="font-size:30px; ">Availabilty of each Equipment</h1>
                                            </strong>

                                        </div>
                                        <div class="text"
                                            style="display: flex; justify-content:center; align-items: center; text-align:center; margin-top:10%; font-size:20px; !important">
                                            <p>To track the availability of each equipment, you can implement a system that
                                                monitors the usage and status of equipment in your inventory. </p>
                                        </div>


                                    </div>



                                    <div data-aos="flip-left" class="descharts">
                                        <div class="head">
                                            <strong>
                                                <h1 style="font-size:30px; ">Quantity of each Material</h1>
                                            </strong>

                                        </div>
                                        <div class="text"
                                            style="display: flex; justify-content:center; align-items: center; text-align:center; margin-top:10%; font-size:20px; !important">
                                            <p>To allow users to detect the number of materials they can utilize before
                                                needing to restore a certain material</p>
                                        </div>


                                    </div>

                                    


                                    <div data-aos="fade-up-left" class="charts">

                                        <canvas id="materialChart"></canvas>


                                    </div>



                                </div>
                            </div>


                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>

                            <div class="old">

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
                            </div>


                            <center>
                                <strong>
                                    <h1 style="font-size: 30px">Task In Progress</h1>
                                </strong>
                            </center>

                            <div class="p-6 text-gray-900">

                                <div class="Tasks">
                                    <div style="overflow-x:auto;">
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

    {{-- @push('scripts')
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
                    maintainAspectRatio: false,
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true 
                        }
                    }
                }
            };
            const myChart = new Chart(
                document.getElementById('myChart'),
                config
            );
        </script>
    @endpush --}}

    @push('scripts')
    <script>
        try {
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
                    maintainAspectRatio: false,
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true 
                        }
                    }
                }
            };
            const myChart = new Chart(
                document.getElementById('myChart'),
                config
            );
        } catch (error) {
            console.error('Error occurred while rendering chart:', error);
            alert('An error occurred while rendering the chart. Please try again later or contact support for assistance.');
        }
    </script>
@endpush


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
            const userdata = {
                labels: @json($userdata->map(fn($userdata) => $userdata->date)),
                datasets: [{
                    label: 'Task completed in the last 30 days',
                    backgroundColor: 'rgba(255, 99, 132, 0.3)',
                    borderColor: 'rgb(255, 99, 132)',
                    data: @json($userdata->map(fn($userdata) => $userdata->aggregate)),
                }]
            };
            const configUser = {
                type: 'line',
                data: userdata,
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
            const userchart = new Chart(
                document.getElementById('userchart'),
                configUser
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



    @push('scripts')
        <script>
            var equipmentLabels = <?php echo json_encode($equipmentLabels); ?>;
            var equipmentQuantities = <?php echo json_encode($equipmentQuantities); ?>;

            console.log('Completed  Count:',equipmentLabels);
            console.log('Incomplete  Count:',equipmentQuantities);

            var ctx = document.getElementById('equipmentChart').getContext('2d');
            var qtyChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: equipmentLabels,
                    datasets: [{
                        label: 'Quantity',
                        data: equipmentQuantities,
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        borderColor: 'rgba(255, 99, 132, 1)',
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
            var materialLabels = <?php echo json_encode($materialLabels); ?>;
            var materialQuantities = <?php echo json_encode($materialQuantities); ?>;

    

            var ctx = document.getElementById('materialChart').getContext('2d');
            var materialChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: materialLabels,
                    datasets: [{
                        label: 'Quantity',
                        data: materialQuantities,
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








    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    @stack('scripts')


    <script>
        AOS.init();
    </script>
</body>

</html>
