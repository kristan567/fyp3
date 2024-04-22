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
                <a class="navbar-brand" href="{{ route('home') }}"><img width="50" height="50" class="rounded-circle" src="{{ global_asset('images/forApp/Untitled-1.png') }}" ></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarNavDropdown" style="margin-left: 60%;">
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
                                <a class="dropdown-item" href="{{ route('inventory') }}">Inventory MAnagment system</a>
                                <a class="dropdown-item" href="{{ route('dashboardV') }}">Analytical Dashboard</a>
                                <a class="dropdown-item" href="{{ route('realtimemonitor') }}">Real Time Monitoring</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contactus') }}">contact us</a>
                        </li>
                        @if (Route::has('login'))
                            @auth
                                <a class="nav-link" target="blank" href="{{ url('/dashboard') }}">Dashboard</a>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link" target="blank" href="{{ route('login') }}">Login</a>
                                </li>
                                {{-- @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                                    </li>
                                @endif --}}
                            @endauth
                        @endif

                    </ul>
                </div>

            </nav>
        </header>




        <div class="firstcontainer">
            <div class="image">
                <img src="https://www.adanirealty.com/-/media/Project/Realty/Blogs/Under-Construction-Projects_-Pros-and-Cons-of-Buying-an-Under-Construction-Property.png" alt="Image Description">

                <p class="imageparagraph">Field Magnet</p><br>
                {{-- <h6 class="talakop" >MAKE YOUR BUSINESS AS FLEXIBLE AS POSSIBLE</h6> --}}
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

                    <p>"Discover Field Magnet: Your Ultimate Construction Management Solution! Seamlessly control every aspect of your projects with Field Magnet—a cutting-edge software designed to empower your construction endeavors. Revolutionize task organization, enhance communication, and elevate decision-making with intuitive features all centralized in one powerful platform."
                    </p>

                    {{-- <button class="call"
                        style="margin-left: 0px; width:150px; height:50px; border-radius: 15px; border: 0px; background-color: blue; color: white; ">
                        Join Now! </button> --}}

                        <a class="btn btn-primary"  href="{{ route('contactus') }}">Join Now!</a>

                        
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
                    <img src="https://startinfinity.s3.us-east-2.amazonaws.com/production/blog/post/5/main/1SvzKctRCi8bwB0QPdOZkBP0pRhsOqZpl0wjs6y0.png" alt="Image Description">
                    <a class="dropdown-item" href="{{ route('task') }}">
                    <div class="taskimageoverlay taskimageoverlay--blur "> Task Management


                    </div>
                    </a>

                </div>

                {{-- <div class="taskdesc">

                    ggggggggggggggggggggggggggg

                </div> --}}

            </div>

            <div class="Project">
                <div class="Projectimage">
                    <img src="https://www.breathehr.com/hubfs/communication%20resized%20min.jpg" alt="Image Description">
                    <a class="dropdown-item" href="{{ route('realtimemonitor') }}">
                    <div class="Projectimageoverlay Projectimageoverlay--blur "> 
                        Real Time Communication

                    
                    </div>
                </a>
                </div>

                {{-- <div class="Projectdesc">

                    sssssssssssssssssssssssssssss
                </div> --}}

            </div>

            <div class="User">
                <div class="Userimage">
                    <img src="https://s3.resume.io/cdn-cgi/image/width=544,height=476,fit=cover,quality=70,format=auto/uploads/blog_post/featured_image/4477/Letter-of-recommendation.jpg" alt="Image Description">
                    <a class="dropdown-item" href="{{ route('recommendation') }}">
                    <div class="Userimageoverlay Userimageoverlay--blur "> Recommendation Feature


                    </div>
                </a>
                </div>

                {{-- <div class="Userdesc">

                    wwwwwwwwwwwwwwwwwwww
                </div> --}}

            </div>

            {{-- <div class="email">
                <div class="emailimage">
                    <img src="{{ asset('images/homeimages/image1.jpg') }}" alt="Image Description">
                    <div class="emailimageoverlay emailimageoverlay--blur "> Real Time Work Updates


                    </div>
                </div>


                {{-- <div class="emaildesc">

                    eeeeeeeeeeeeeeeeeee

                </div> 

            </div> --}} 

            {{-- <div class="inventory">
                <div class="inventoryimage">
                    <img src="{{ asset('images/homeimages/image1.jpg') }}" alt="Image Description">
                    <div class="inventoryimageoverlay inventoryimageoverlay--blur "> real time Work updates


                    </div>
                </div>


              

            </div> --}}

        </div>

        <div class="thirdcontainer">

          
            <div class="task">
                <div class="taskimage">
                    <img src="https://cdn.botpenguin.com/assets/website/Inventory_Management_7424602b6c.png" alt="Image Description">
                    <a class="dropdown-item" href="{{ route('inventory') }}">
                    <div class="taskimageoverlay taskimageoverlay--blur "> Inventory management


                    </div>
                </a>
                 


                </div>

                {{-- <div class="taskdesc">

                    ggggggggggggggggggggggggggg

                </div> --}}

            </div>

            <div class="Project">
                
                <div class="Projectimage">
                    <img src="https://www.vervesys.com/wp-content/uploads/2017/10/Image_1_fullsize.jpg" alt="Image Description">
                    <a class="dropdown-item" href="{{ route('dashboardV') }}">
                    <div class="Projectimageoverlay Projectimageoverlay--blur "> Analytical dashboard


                    </div>
                    </a>
                </div>

                {{-- <div class="Projectdesc">

                    sssssssssssssssssssssssssssss
                </div> --}}

            </div>

            <div class="User">
                <div class="Userimage">
                    <img src="https://static.wixstatic.com/media/a4978e_f2f10abd6f6f4645a3ad489648b00bc6~mv2.png/v1/fill/w_560,h_390,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/Communication-Free-PNG-Image.png" alt="Image Description">
                    <a class="dropdown-item" href="{{ route('realtimemonitor') }}">
                    <div class="Userimageoverlay Userimageoverlay--blur "> Real time Comment


                    </div>
                </a>
                </div>

                {{-- <div class="Userdesc">

                    wwwwwwwwwwwwwwwwwwww
                </div> --}}

            </div>

            {{-- <div class="email">
                <div class="emailimage">
                    <img src="{{ asset('images/homeimages/image1.jpg') }}" alt="Image Description">
                    <div class="emailimageoverlay emailimageoverlay--blur "> Project Location


                    </div>
                </div>


                {{-- <div class="emaildesc">

                    eeeeeeeeeeeeeeeeeee

                </div> 

            </div> --}}

            {{-- <div class="inventory">
                <div class="inventoryimage">
                    <img src="{{ asset('images/homeimages/image1.jpg') }}" alt="Image Description">
                    <div class="inventoryimageoverlay inventoryimageoverlay--blur "> real time Work updates


                    </div>
                </div>


              

            </div> --}}

        </div>


        <div class="fourthcontainer">



            <div class="anotherbranch">
                <h1><strong>Push the boundaries of what's possible with field magnet</strong></h1>
                <p><strong>A Field management system is a management assistance by executing operations by
                        involving coordination and optimization of the activities that are performed in the field
                        such as Project Scheduling, cost, quality</strong></p>
                <button class="call"
                    style="margin-left: 0px; width:200px; height:50px; border-radius: 15px; border: 0px; color: black; ">
                    <a href="{{ route('login') }}" target="blank">Visit </a></button>
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
                                                <h4>1.	Effortless Task Management: </h4>
                                                <p>Clear assignments, Streamlined progress tracking, and optimized resource allocation. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="service-box">
                                        <div class="clearfix">
                                            <div class="iconset">
                                                <span class="glyphicon glyphicon-cog icon"></span>
                                            </div>
                                            <div class="y-us-content">
                                                <h4>2.	Boosted Collaboration: </h4>
                                                <p>Seamless communication, updates, and document exchange between office and field teams.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="service-box">
                                        <div class="clearfix">
                                            <div class="iconset">
                                                <span class="glyphicon glyphicon-cog icon"></span>
                                            </div>
                                            <div class="y-us-content">
                                                <h4>3.	Data-Driven Decisions</h4>
                                                <p>Comprehensive dashboards for project insights, resource analysis, and informed decision-making. </p>
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
                                                <h4>4.	Cost Efficiency, Profit Maximization: </h4>
                                                <p>Reduced costs, and increased profits through streamlined workflows and budget control. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="service-box">
                                        <div class="clearfix">
                                            <div class="iconset">
                                                <span class="glyphicon glyphicon-cog icon"></span>
                                            </div>
                                            <div class="y-us-content">
                                                <h4>6.	Robust Security: </h4>
                                                <p>Strong measures to safeguard your sensitive project data, ensuring peace of mind.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="service-box">
                                        <div class="clearfix">
                                            <div class="iconset">
                                                <span class="glyphicon glyphicon-cog icon"></span>
                                            </div>
                                            <div class="y-us-content">
                                                <h4>R5.	Enhanced Field Visibility:</h4>
                                                <p> Clear insights, worker locations, and project progress updates for a comprehensive overview. l</p>
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
                        <img src="https://c8.alamy.com/comp/D1YP92/building-construction-pokhara-nepal-D1YP92.jpg"
                            alt="Product 1">
                        <div class="button-container">
                            <a class="btn btn-primary" href="{{ route('blog') }}"> In himalayas</a>
                        </div>
                    </div>
                    <div class="product-item">
                        <img src="https://c8.alamy.com/comp/A4CRRR/bamboo-scaffolding-on-a-house-being-built-in-kathmandu-nepal-A4CRRR.jpg"
                            alt="Product 2">
                        <div class="button-container">
                            <a class="btn btn-primary" href="{{ route('blog2') }}">sustainable construction</a>
                        </div>
                    </div>
                    <div class="product-item">
                        <img src="https://c8.alamy.com/comp/2C666MG/new-building-in-kathmandu-in-nepal-2C666MG.jpg"
                            alt="Product 3">
                        <div class="button-container">
                            <a class="btn btn-primary" href="{{ route('blog3') }}">Built Future Shadow</a>
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
                        {{-- <div class="footer-col">
                            <h4>get help</h4>
                            <ul>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">shipping</a></li>
                                <li><a href="#">returns</a></li>
                                <li><a href="#">order status</a></li>
                                <li><a href="#">payment options</a></li>
                            </ul>
                        </div> --}}
                        <div class="footer-col">
                            <h4>Read Our Blogs</h4>
                            <ul>
                                <li><a href="#">Blog1</a></li>
                                <li><a href="#">blog2</a></li>
                                <li><a href="#">blog3</a></li>
                                {{-- <li><a href="#">dress</a></li> --}}
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
