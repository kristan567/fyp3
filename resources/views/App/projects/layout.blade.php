<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>



    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>




    <!--fonts-->
    <link rel="preconnect" `href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    {{-- <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;1,400;1,500&display=swap"
        rel="stylesheet"> --}}

    <!--fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.3.0/css/all.css">






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
            max-width: 4rem;
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
            /* padding: 1rem; */



        }

        /*logo*/
        .navbar .navbar-container .navbar-logo-div {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.7rem;
            /* padding-left: 1rem; */
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
            /* padding-left: 1rem; */
        }

        .navbar.active .navbar-container .navbar-logo-div .navbar-logo-link {
            display: block;
        }

        /*navbar.active search input*/
        .navbar.active .navbar-search {
            background-position: 1rem 0.7rem;
            padding: 1rem;
            /* padding-left: 3rem; */
        }

        .navbar.active #icon-search {
            top: 5.1rem;
            /* left: 1.6rem; */
        }

        .navbar.active .navbar-search::placeholder {
            visibility: visible;
            opacity: 1;
        }

        /*navbar.active menu*/
        .navbar.active .menu-list {
            /* padding-left: 1rem; */
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

        .blink {
            animation: blinker 1.5s linear infinite;
            color: black;
            font-family: sans-serif;
        }

        @keyframes blinker {
            50% {
                opacity: 0;
            }
        }
    </style>



</head>

<body>
    <nav class="navbar">
        <div class="navbar-container">
            <!--logo div-->
            <div class="navbar-logo-div">
                {{-- <img width="40" height="40" class="rounded-circle" style="border-radius: 30px;" src="{{ global_asset('images/forApp/Untitled-1.png') }}" > --}}
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


    <main class="dashboard">

        <x-tenant-app-layout>
            {{-- <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('projects') }}
                @role('Project Manager')
                    <x-btn-link class="ml-4 float-right" href="{{ route('projects.create') }}">Add Projects</x-btn-link>
                @endrole
            </h2>
             </x-slot> --}}



            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                        <div class="p-6 text-gray-900">
                            @role('Project Manager')
                                <x-btn-link class="ml-4 float-right" href="{{ route('projects.create') }}">Add
                                    Projects</x-btn-link>
                            @endrole

                            <a href="{{ route('finishedproject') }}" class="btn btn-secondary">Show Completed
                                project</a>

                            <a class= "btn btn-success" href="{{ route('export_project_pdf') }}">Export PDF</a>


                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif



                            @role('worker')
                                <center><strong>
                                        <h2 style="font-size: 35px">Projects</h2>
                                </center>
                                <br>
                                <br></strong>

                                <div style="overflow-x:auto;">

                                    <table class="table table-bordered">
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Lalitude</th>
                                            <th>Longitude</th>
                                            <th>status</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            @role('Project Manager')
                                                <th>status</th>
                                            @endrole

                                            <th width="280px">Action</th>

                                        </tr>
                                        @foreach ($projects as $project)
                                        @if (!$project->completed)
                                            <tr onclick="showmap({{ $project->latitude }},{{ $project->longitude }})">
                                                <td>{{ $project->id }}</td>
                                                <td>{{ $project->title }}</td>
                                                <td>{{ $project->description }}</td>
                                                <td>{{ $project->latitude }}</td>
                                                <td>{{ $project->longitude }}</td>
                                                <td>{{ $project->status == 0 ? 'Not Started' : '' }}
                                                    {{ $project->status == 1 ? 'Started' : '' }}
                                                    {{ $project->status == 2 ? 'Pending' : '' }}
                                                    {{ $project->status == 3 ? 'Complete' : '' }}
                                                </td>
                                                <td>{{ $project->start_date }}</td>
                                                <td>{{ $project->end_date }}</td>
                                                <td><a class="btn btn-info"
                                                        href="{{ route('projects.show', $project->id) }}">Show</a>
                                                </td>
                                                        {{-- <td>
                                                    <form action="{{ route('projects.destroy', $project->id) }}" method="POST">
                                                        <a class="btn btn-info"
                                                            href="{{ route('projects.show', $project->id) }}">Show</a>
                                                        <a class="btn btn-primary"
                                                            href="{{ route('projects.edit', $project->id) }}">Edit</a>

                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </td> --}}

                                            </tr>
                                            @endif
                                        @endforeach

                                    </table>
                                </div>
                            @endrole

                            @role('Project Manager')
                                <center><strong>
                                        <h2 style="font-size: 35px">Projects</h2>
                                    </strong></center>
                                <br>

                                <div style="overflow-x:auto;">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Lalitude</th>
                                            <th>Longitude</th>
                                            <th>status</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th width="280px">Action</th>
                                            @role('Project Manager')
                                                <th>status</th>
                                            @endrole
                                        </tr>
                                        @foreach ($projects as $project)
                                            @if (!$project->completed)
                                                <tr onclick="showmap({{ $project->latitude }},{{ $project->longitude }})">
                                                    <td>{{ $project->id }}</td>
                                                    <td>{{ $project->title }}</td>
                                                    <td>{{ $project->description }}</td>
                                                    <td>{{ $project->latitude }}</td>
                                                    <td>{{ $project->longitude }}</td>

                                                    <td>{{ $project->status == 0 ? 'Not Started' : '' }}
                                                        {{ $project->status == 1 ? 'Started' : '' }}
                                                        {{ $project->status == 2 ? 'Pending' : '' }}
                                                        {{ $project->status == 3 ? 'Complete' : '' }}
                                                    </td>
                                                    <td>{{ $project->start_date }}</td>
                                                    <td>{{ $project->end_date }}</td>
                                                    <td>
                                                        <form action="{{ route('projects.destroy', $project->id) }}"
                                                            method="POST">
                                                            <a class="btn btn-info"
                                                                href="{{ route('projects.show', $project->id) }}">Show</a>
                                                            <a class="btn btn-primary"
                                                                href="{{ route('projects.edit', $project->id) }}">Edit</a>

                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger"
                                                                onclick="return confirm('Are you sure you want to delete this Project?')">Delete</button>
                                                        </form>
                                                    </td>
                                                    <td>

                                                        @if (!$project->completed)
                                                            <a class="btn btn-warning"
                                                                href="{{ url('projects/' . $project->id . '/complete') }}"
                                                                onclick="return confirm('Are you sure you want this Project to Be completed?')">complete</a>
                                                        @endif
                                                    </td>

                                                </tr>
                                            @endif
                                        @endforeach

                                    </table>
                                </div>

                            @endrole

                            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDlm67NPf8HL9XL8zyiFAMyX2RSRgenQKI&libraries=places">
                            </script>


                            <center>
                                <div class="mapcontainer">
                                    <marquee class="blink" width="20%" behavior="scroll" direction="left"
                                        scrollamount="5=10">
                                        Please click the lat and lng of the project to see location

                                    </marquee>
                                    <div id="map" style="width: 500px; height: 200px;"></div>
                                </div>
                            </center>


                            <script>
                                function showmap(lat, lng) {
                                    console.log('Latitude:', lat, 'Longitude:', lng);
                                    var coord = {
                                        lat: lat,
                                        lng: lng
                                    };
                                    var map = new google.maps.Map(document.getElementById("map"), {
                                        zoom: 10,
                                        center: coord
                                    });

                                    new google.maps.Marker({
                                        position: coord,
                                        map: map
                                    });
                                }
                                showmap(0, 0);
                            </script>




                        </div>
                    </div>
                </div>
            </div>






        </x-tenant-app-layout>
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








    <!-- Button trigger modal -->


    <!-- Modal -->
    {{-- <div class="modal fade" id="updateTask" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="" >
            <div class="modal-body">
                @csrf
                <div class="form-group">
                    <label for="">Enter Title</label>
                    <input type="text"  class="form-control form-control-lg">

                    @error('edit_title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                
                   
                </div>


                <div class="form-group">
                    <label for="">Enter Description</label>
                    <textarea  cols="30" rows="4" class="form-control"></textarea>

                    @error('edit_description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                   
                </div>
                <div class="form-group">
                    <label for="">Enter Status</label>
                    <select  class="form-control">
                        <option value="0">Not started</option>
                        <option value="1">Started</option>
                        <option value="2">Pending</option>
                        <option value="3">Complete</option>
                    </select>

                    @error('edit_status')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
               
                </div>
                <div class="form-group">
                    <label for="">Enter Start Date</label>
                    <input type="date"  class="form-control form-control-lg">

                    @error('edit_start_date')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
              
                </div>
                <div class="form-group">
                    <label for="">Enter End Date</label>
                    <input type="date"  class="form-control form-control-lg">

                    @error('edit_end_date')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form> 
    
    
   
    </div> --}}

    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

</body>

</html>
