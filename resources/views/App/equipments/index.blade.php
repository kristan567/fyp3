<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="preconnect" `href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;1,400;1,500&display=swap"
        rel="stylesheet">

    <!--fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.3.0/css/all.css">



    <style>
        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2
        }

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
            {{-- <div class="bg-dark py-3">
        <h3 class="text-white text-center">equipment Add</h3>
    </div> --}}

            <div class="container">
                {{-- <div class="row justify-content-center mt-4">
                    <div class="col-md-10 d-flex jestify-content-end float-right ">
                        <a href="{{ route('equipments.create') }}" class="btn btn-dark float-right">
                            Create
                        </a>

                    </div>

                </div> --}}

                <div class="row d-flex justify-content-center">
                    @if (Session::has('success'))
                        <div class="col-md-10 mt-4">
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>

                        </div>
                    @endif
                    <div class="col-md-10 my-20">
                        <div class="card borde-0 shadow-lg my-3">
                            <div class="card-header  text-center">
                                <h1 class="text" style="font-size: 30px;">Equipments
                                    <a href="{{ route('equipments.create') }}" class="btn btn-dark float-right">
                                        Create
                                    </a>
                                    <a class= "btn btn-success float-left" href="{{ route('export_equipment_pdf') }}">Export PDF</a>
                                </h1>


                            </div>

                            <div class="card-body">
                                <div style="overflow-x:auto;">
                                    <table>
                                        <tr>
                                            <th>Name</th>
                                            <th>Equipment Type</th>
                                            <th>Price</th>
                                            <th>Availability in (Count)</th>
                                            <th>total Cost</th>
                                            <th>item Added At</th>
                                            <th>image</th>

                                            <th>Action</th>
                                        </tr>

                                        @if ($equipments->isNotEmpty())
                                            @foreach ($equipments as $equipment)
                                                <tr>
                                                    <td>{{ $equipment->name }}</td>
                                                    <td>
                                                        {{ $equipment->type == 0 ? 'hauling' : '' }}
                                                        {{ $equipment->type == 1 ? 'Earth Moving' : '' }}
                                                        {{ $equipment->type == 2 ? 'compact' : '' }}
                                                        {{ $equipment->type == 3 ? 'Excavating Equipment' : '' }}

                                                    </td>
                                                    <td>{{ $equipment->price }}</td>
                                                    <td>{{ $equipment->qty }}</td>
                                                    <td>{{ $equipment->price * $equipment->qty }}</td>
                                                    <td>{{ \Carbon\Carbon::parse($equipment->created_at)->format('d,M,Y') }}
                                                    </td>
                                                    <td>
                                                        @if ($equipment->image != '')
                                                            <img width="80"
                                                                src="{{ global_asset('equipmentuploads\equipmentproducts' . '/' . $equipment->image) }}" />
                                                        @endif
                                                    </td>

                                                    <td> <a href="{{ route('equipments.edit', $equipment->id) }}"
                                                            class="btn btn-primary">Edit</a>

                                                        <a href="#"
                                                            onclick="deleteEquipment({{ $equipment->id }});"
                                                            class="btn btn-danger">Delete</a>

                                                        <form id="delete-product-from-{{ $equipment->id }}"
                                                            action="{{ route('equipments.destroy', $equipment->id) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('delete')
                                                        </form>
                                                    </td>

                                                </tr>
                                            @endforeach

                                        @endif

                                        <tfoot  style="margin-top: 10px;">
                                            <tr>
                                                <th style="border: 1px solid black; ">Total Cost Sum:</th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th style="border: 1px solid black; ">{{ $totalCost }}</th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </tfoot>

                                    </table>
                                </div>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </x-tenant-app-layout>
    </main>








</body>

</html>

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




<script>
    function deleteEquipment(id) {
        if (confirm("Are you want to delete the Equipment")) {
            document.getElementById("delete-product-from-" + id).submit();
        }
    }
</script>
