<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="preconnect" `href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;1,400;1,500&display=swap"
        rel="stylesheet">

    <!--fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.3.0/css/all.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <style>
        .card-list {
            display: flex;

            flex-wrap: wrap;
            gap: 16px;
            container-type: inline-size;
            resize: horizontal;
            overflow: auto;
        }

        .card-list__item {
            width: 100%;
        }



        @media (min-width: 600px) {
            .card-list__item {
                width: calc((100% - 16px) / 2);
            }
        }

        .card {
            border: 2px solid gray;
            border-radius: 16px;
            padding: 1.5rem 1rem;
            display: flex;
            flex-direction: column;
        }

        .card__title {
            font-size: 18px;
            text-align: center;
        }

        .card__content {
            margin-top: 1rem;
            display: flex;
            flex-direction: row;
            gap: 1rem;
            flex-grow: 1;
        }

        .card__image-wrapper {
            width: 35%;
            flex-shrink: 0;
        }

        .card__image {
            overflow: hidden;
            border-radius: 16px;
        }

        .card__text {
            font-family: serif;
        }

        .card__button-wrapper {
            margin-top: 1rem;
            text-align: center;
        }

        .card__button {
            appearance: none;
            border: none;
            background-color: #4B7CB6;
            color: white;
            padding: 1rem;
            min-width: 50%;
            border-radius: 100vh;
            cursor: pointer;
        }

        .section {
            margin: 32px;


        }

        * {
            margin: 0;
            box-sizing: border-box;
        }

        /* img {
            width: 100%;
            height: auto;
            vertical-align: bottom;
        } */

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

            .navbar+.content-wrapper {
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

            .navbar+.content-wrapper {
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

            .navbar+.content-wrapper {
                margin-left: 15%;
            }
        }
    </style>


</head>

<body>

    {{-- <section class="section">
        <div class="card-list">
            <div class="card-list__item card">
                <h3 class="card__title">タイトル1</h3>
                <div class="card__content">
                    <div class="card__image-wrapper">
                        <div class="card__image">
                            <img src="https://picsum.photos/800/600?random=1" alt="">
                        </div>
                    </div>
                    <div class="card__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen book.</div>
                </div>
                <div class="card__button-wrapper">
                    <button class="card__button">記事を見る</button>
                </div>
            </div>
            <div class="card-list__item card">
                <h3 class="card__title">タイトル2</h3>
                <div class="card__content">
                    <div class="card__image-wrapper">
                        <div class="card__image">
                            <img src="https://picsum.photos/800/600?random=2" alt="">
                        </div>
                    </div>
                    <div class="card__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </div>
                </div>
                <div class="card__button-wrapper">
                    <button class="card__button">記事を見る</button>
                </div>
            </div>
            <div class="card-list__item card">
                <h3 class="card__title">タイトル3</h3>
                <div class="card__content">
                    <div class="card__image-wrapper">
                        <div class="card__image">
                            <img src="https://picsum.photos/800/600?random=3" alt="">
                        </div>
                    </div>
                    <div class="card__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen book.</div>
                </div>
                <div class="card__button-wrapper">
                    <button class="card__button">記事を見る</button>
                </div>
            </div>
            <div class="card-list__item card">
                <h3 class="card__title">タイトル4</h3>
                <div class="card__content">
                    <div class="card__image-wrapper">
                        <div class="card__image">
                            <img src="https://picsum.photos/800/600?random=4" alt="">
                        </div>
                    </div>
                    <div class="card__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen book. It has survived not
                        only five centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem
                        Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
                        including versions of Lorem Ipsum.</div>
                </div>
                <div class="card__button-wrapper">
                    <button class="card__button">記事を見る</button>
                </div>
            </div>
        </div>
    </section> --}}


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


    <div class="content-wrapper">
    <x-tenant-app-layout>
        <main class="dashboard">

            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">


                        <div class="p-6 text-gray-900">

                            <form id="filterForm">
                                <!-- Price Range -->
                                <input type="number" id="min_price" name="min_price" placeholder="Min Price">
                                <input type="number" id="max_price" name="max_price" placeholder="Max Price">

                                <!-- Project Type Checkboxes -->
                                <input type="checkbox" class="project_type" name="project_types[]"
                                    value="Vacation Home">
                                Vacation Home
                                <input type="checkbox" class="project_type" name="project_types[]" value="residential">
                                Residential

                                <input type="checkbox" class="project_type" name="project_types[]" value="Apartment Renovation">
                                Apartment Renovation
                                
                                <!-- Add other project types as needed -->

                                <!-- Land Size -->
                                <input type="number" id="size" name="size" placeholder="Land Size (sq)">

                                <!-- Time -->
                                <input type="text" id="duration" name="duration" placeholder="Time">
                                <button type="submit" class="btn btn-primary">Apply Filters</button>
                            </form>

                            <div class="filteredData">

                                <section class="section">

                                    <div class="card-list">
                                        @foreach ($data as $filteredItem)
                                            <div class="card-list__item card">
                                                <h3 class="card__title">{{ $filteredItem->Project_Name }}</h3>
                                                <div class="card__content">
                                                    <div class="card__image-wrapper">
                                                        <div class="card__image">
                                                            <img src="https://picsum.photos/800/600?random=1"
                                                                alt="">
                                                        </div>
                                                    </div>  

                                                    <div class="card__text">{{ $filteredItem->description }}
                                                    </div>
                                                </div>
                                                <div class="card__button-wrapper">

                                                    <td>
                                                        <a href="{{ url('recommend/' . $filteredItem->id . '/show') }}"
                                                            class="btn btn-primary">Show</a>
                                                    </td>


                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </section>
                            </div>

                            {{-- <section class="section">

                                <div class="card-list">
                                    @foreach ($recommends as $recommend)
                                        <div class="card-list__item card">
                                            <h3 class="card__title">{{ $recommend->Project_Name }}</h3>
                                            <div class="card__content">
                                                <div class="card__image-wrapper">
                                                    <div class="card__image">
                                                        <img src="https://picsum.photos/800/600?random=1"
                                                            alt="">
                                                    </div>
                                                </div>

                                                <div class="card__text">{{ $recommend->description }}
                                                </div>
                                            </div>
                                            <div class="card__button-wrapper">

                                                <td>
                                                    <a href="{{ url('recommend/' . $recommend->id . '/show') }}"
                                                        class="btn btn-primary">Show</a>
                                                </td>


                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </section> --}}


                        </div>
                    </div>
                </div>
        </main>
    </x-tenant-app-layout>
    </div>



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
//        $(document).ready(function() {
//     $('#filterForm input').on('change', function() {
//         index();
//     });

//     function index() {
//         var formData = $('#filterForm').serialize();

//         $.ajax({
//             url: "{{ route('recommend.index') }}",
//             method: "GET",
//             data: formData,
//             success: function(response) {
//                 $('.content-wrapper .filteredData').html(response); // Update the content inside .dashboard
//             }
//         });
//     }
// });

$(document).ready(function() {
        // Function to handle form submission and update filtered data
        $('#filterForm').on('submit', function(event) {
            event.preventDefault(); // Prevent default form submission

            // Serialize form data
            var formData = $(this).serialize();
            // console.log(formData)
            // AJAX request to fetch filtered data
            $.ajax({
                url: "{{ route('recommend.create') }}", // Update the URL as needed
                method: "GET",
                data: formData,
                success: function(response) {
                    // Update the content inside .filteredData with the filtered data
                    $('.filteredData .card-list').html(response);
                },
                error: function(xhr, status, error) {
                    // Handle errors
                    console.error(error);
                }
            });
        });
    });

    </script>





    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    {{-- </div> --}}
</body>

</html>
