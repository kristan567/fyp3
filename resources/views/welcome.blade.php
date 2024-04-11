<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" href="{{ asset('css/home.css') }}">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">



    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" />

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->

</head>

<body class="antialiased">

    <div class="mainbody">

        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light ">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarNavDropdown" style="margin-left: 55%;">
                    <ul class="navbar-nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('home') }}">Home <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('aboutus') }}">About Us</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="{{ route('mainblogpage') }}">Blog</a>
                        </li> --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Our Services
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="{{ route('task') }}">Task Mamangement</a>
                                <a class="dropdown-item" href="{{ route('recommendation') }}">View Recommendation</a>
                                <a class="dropdown-item" href="{{ route('notification') }}">Notifying Users</a>
                                <a class="dropdown-item" href="{{ route('inventory') }}">Inventory</a>
                                <a class="dropdown-item" href="{{ route('dashboardV') }}">Analytical Dashboard</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contactus') }}">contact us</a>
                        </li>
                        @if (Route::has('login'))
                            @auth
                                <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                                    </li>
                                @endif
                            @endauth
                        @endif

                    </ul>
                </div>

            </nav>
        </header>




        <div class="firstcontainer">
            <div class="image">
                <img src="{{ asset('images/homeimages/image1.jpg') }}" alt="Image Description">

                <p class="imageparagraph">Rocky Cliff</p>
            </div>
        </div>

        <br>
        <br>


        <div class="secondcontainer">
            <div class="Cdiv">
                <div class="video  ">
                    <iframe class="vids " src="https://www.youtube.com/embed/cpP-fCo8Dn4?rel=0" frameborder="0"
                        allowfullscreen></iframe>
                </div>

                <div class="intro">
                    <h3 style="color:#3b103e"><Strong>Design & Make with Field Magnet: Discover stories, insights, and
                            innovations</Strong></h3>
                    <br>

                    <p>Submit an application to renowned international colleges and universities. Select a course or
                        contact our counselor to discuss your options.
                        Plan to Study Abroad is easier with our mission which is to provide any students who are eager
                        to study abroad with the opportunity to enroll in the
                        top international institutions and pursue their dreams.
                    </p>

                    <button class="call"
                        style="margin-left: 0px; width:150px; height:50px; border-radius: 15px; border: 0px; background-color: blue; color: white; ">
                        Join Now! </button>
                </div>


            </div>

        </div>


        <br>
        <br>

        <center><strong>
                <h2 style="font-size: 35px; font-weight:900">Go beyond hammers and nails:<br>
                    Digital tools to empower your entire business</h2>
            </strong>
        </center>

        <div class="thirdcontainer">

            <div class="task">
                <div class="taskimage">
                    <img src="{{ asset('images/homeimages/image1.jpg') }}" alt="Image Description">
                    <div class="taskimageoverlay taskimageoverlay--blur "> info


                    </div>


                </div>

                <div class="taskdesc">

                    ggggggggggggggggggggggggggg

                </div>

            </div>

            <div class="Project">
                <div class="Projectimage">
                    <img src="{{ asset('images/homeimages/image1.jpg') }}" alt="Image Description">
                    <div class="Projectimageoverlay Projectimageoverlay--blur "> info


                    </div>
                </div>

                <div class="Projectdesc">

                    sssssssssssssssssssssssssssss
                </div>

            </div>

            <div class="User">
                <div class="Userimage">
                    <img src="{{ asset('images/homeimages/image1.jpg') }}" alt="Image Description">
                    <div class="Userimageoverlay Userimageoverlay--blur "> info


                    </div>
                </div>

                <div class="Userdesc">

                    wwwwwwwwwwwwwwwwwwww
                </div>

            </div>

            <div class="email">
                <div class="emailimage">
                    <img src="{{ asset('images/homeimages/image1.jpg') }}" alt="Image Description">
                    <div class="emailimageoverlay emailimageoverlay--blur "> info


                    </div>
                </div>


                <div class="emaildesc">

                    eeeeeeeeeeeeeeeeeee

                </div>

            </div>

        </div>


        <div class="fourthcontainer">



            <div class="anotherbranch">
                <h1><strong>Push the boundaries of what's possible with Autodesk</strong></h1>
                <p><strong>A Field management system is a management assistance by executing operations by
                        involving coordination and optimization of the activities that are performed in the field
                        such as Project Scheduling, cost, quality</strong></p>
                <button class="call"
                    style="margin-left: 0px; width:200px; height:50px; border-radius: 15px; border: 0px; color: black; ">
                    <a href="https://www.seek.com.au/" target="blank">Visit </a></button>
            </div>


        </div>


        <div class="fifthcontainer">
            <div class="y-us-section">
                <div class="container">

                    <div class="row">
                        <div class="col-md col-md-offset-2 col-sm-12 col-xs-12">
                            <div class="y-us-head">

                                <div class="y-us-title">
                                    <h2>Why choose us</h2>
                                    <p>Here’s how our builder software sets you up for success</p>
                                    <span class="y-us-title-border"></span>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="y-us-content">
                                <div class="service-3">
                                    <div class="service-box">
                                        <div class="clearfix">
                                            <div class="iconset">
                                                <span class="glyphicon glyphicon-cog icon"></span>
                                            </div>
                                            <div class="y-us-content">
                                                <h4>Stay on top of everything in one place</h4>
                                                <p>Globally incubate standards compliant channels before scalable
                                                    benefits. Quickly disseminate superior del</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="service-box">
                                        <div class="clearfix">
                                            <div class="iconset">
                                                <span class="glyphicon glyphicon-cog icon"></span>
                                            </div>
                                            <div class="y-us-content">
                                                <h4>Update clients without lifting a finger</h4>
                                                <p>Globally incubate standards compliant channels before scalable
                                                    benefits. Quickly disseminate superior del</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="service-box">
                                        <div class="clearfix">
                                            <div class="iconset">
                                                <span class="glyphicon glyphicon-cog icon"></span>
                                            </div>
                                            <div class="y-us-content">
                                                <h4>Avoid surprise delays and costly errors</h4>
                                                <p>Globally incubate standards compliant channels before scalable
                                                    benefits. Quickly disseminate superior del</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="why-choose-banner">
                                <img src="http://themeinnovation.com/demo2/html/build-up/img/home1/why-choose.jpg"
                                    alt="">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="y-us-contentbox">
                                <div class="service-3">
                                    <div class="service-box">
                                        <div class="clearfix">
                                            <div class="iconset">
                                                <span class="glyphicon glyphicon-cog icon"></span>
                                            </div>
                                            <div class="y-us-content">
                                                <h4>Stand out from the competition</h4>
                                                <p>Globally incubate standards compliant channels before scalable
                                                    benefits. Quickly disseminate superior del</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="service-box">
                                        <div class="clearfix">
                                            <div class="iconset">
                                                <span class="glyphicon glyphicon-cog icon"></span>
                                            </div>
                                            <div class="y-us-content">
                                                <h4>Modern and Easy Communications</h4>
                                                <p>Globally incubate standards compliant channels before scalable
                                                    benefits. Quickly disseminate superior del</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="service-box">
                                        <div class="clearfix">
                                            <div class="iconset">
                                                <span class="glyphicon glyphicon-cog icon"></span>
                                            </div>
                                            <div class="y-us-content">
                                                <h4>Real Time Monitoring</h4>
                                                <p>Globally incubate standards compliant channels before scalable
                                                    benefits. Quickly disseminate superior del</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="sixthcontainer">


            <div class="product-list">
                <div class="slider-container">
                    <div class="product-item">
                        <img src="https://plus.unsplash.com/premium_photo-1675186049574-061fba2d243c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTl8fGZhc2hpb258ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60"
                            alt="Product 1">
                        <div class="button-container">
                            <a class="btn btn-primary" href="{{ route('blog') }}"> Nepal Construction</a>
                        </div>
                    </div>
                    <div class="product-item">
                        <img src="https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8ZmFzaGlvbnxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60"
                            alt="Product 2">
                        <div class="button-container">
                            <a class="btn btn-primary" href="{{ route('blog2') }}">Nepal Construction</a>
                        </div>
                    </div>
                    <div class="product-item">
                        <img src="https://plus.unsplash.com/premium_photo-1675130119382-6f891206f406?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTN8fGZhc2hpb258ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60"
                            alt="Product 3">
                        <div class="button-container">
                            <a class="btn btn-primary" href="{{ route('blog3') }}">Nepal Contruction</a>
                        </div>
                    </div>

                </div>
            </div>

            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
            <script>
                $('.slider-container').slick({
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true,
                    prevArrow: '<button class="slick-prev">Previous</button>',
                    nextArrow: '<button class="slick-next">Next</button>',
                    responsive: [{
                        breakpoint: 768, // Adjust this breakpoint as needed
                        settings: {
                            slidesToShow: 1, // Show only one slide on small screens
                            slidesToScroll: 1, // Scroll one slide at a time on small screens
                            infinite: false,
                            // Disable infinite loop
                        }
                    }]
                });
            </script>






        </div>
        <br>
        <br>
        <br>

        <div class="seventhcontainer">
            <footer class="footer">
                <div class="container">
                    <div class="row">
                        <div class="footer-col">
                            <h4>company</h4>
                            <ul>
                                <li><a href="#">about us</a></li>
                                <li><a href="#">our services</a></li>
                                <li><a href="#">privacy policy</a></li>
                                <li><a href="#">affiliate program</a></li>
                            </ul>
                        </div>
                        <div class="footer-col">
                            <h4>get help</h4>
                            <ul>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">shipping</a></li>
                                <li><a href="#">returns</a></li>
                                <li><a href="#">order status</a></li>
                                <li><a href="#">payment options</a></li>
                            </ul>
                        </div>
                        <div class="footer-col">
                            <h4>online shop</h4>
                            <ul>
                                <li><a href="#">watch</a></li>
                                <li><a href="#">bag</a></li>
                                <li><a href="#">shoes</a></li>
                                <li><a href="#">dress</a></li>
                            </ul>
                        </div>
                        <div class="footer-col">
                            <h4>follow us</h4>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>


    </div>







    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    {{-- @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            @auth
                <a href="{{ url('/dashboard') }}"
                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
            @else
                <a href="{{ route('login') }}"
                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                    in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                @endif
            @endauth
        </div>
    @endif --}}

    {{-- <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/66152024a0c6737bd129e7a3/1hr18b42i';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script--> --}}
</body>

</html>
