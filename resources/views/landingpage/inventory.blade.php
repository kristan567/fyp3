<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/feature.css') }}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">



    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" />
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

</head>

<body>

    <div class="mainbody">




         @include('landingpage.layout.navbar')





        <div class="imageblog">

            <section class="ban_sec">
                <div class="blogcontainer">
                    <div class="ban_img">
                        <img src="https://403737.fs1.hubspotusercontent-na1.net/hubfs/403737/63bbca2d280184a6813575fa_Inventory-Management.jpg"
                            alt="banner" border="0">
                        <div class="ban_text">
                            <strong>
                                 Inventory<br>
                            </strong>
                            <p>Manage your Work Space.</p>
                            <a href="{{ route('contactus') }}">Create now</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- <div class="main-container" >
            <div>
                <h3>Container 1</h3>
                <p>This is some text</p><a href="">Button 1</a>
            </div>
            <div>
                <h3>Container 2</h3>
                <p>This is some text</p><a href="">Button 2</a>
            </div>
            <div>
                <h3>Container 3</h3>
                <p>This is some text</p><a href="">Button 3</a>
            </div>
        </div> -->

        
        <div class="site-content container">
            <div class="row">
                <div class="col-sm-4">
                    <img src="https://unsplash.it/250/250?image=1062" alt="Cute dog wrapped in a blanket"
                    class="rounded-circle" />
                </div><!-- .col-sm-4 -->
                <div class="col-sm-8">
                    <div class="description">
                        <h2>what is it?</h2>
                        <p> Efficient management of materials and equipment is crucial for construction projects to stay on schedule and within budget. An inventory management system tailored to the needs of construction projects can provide numerous benefits.</p>
                    </div><!-- .description -->
                </div><!-- .col-sm-8 -->
            </div><!-- .row -->
            <div class="row">
                <div class="col-sm-8">
                    <div class="description">
                        <h2>Tracking</h2>
                        <p>By enabling users to add and track resources needed for construction, such as building materials, tools, and equipment, the system offers visibility into available resources and their locations.</p>
                    </div><!-- .description -->
                </div><!-- .col-sm-8 -->
                <div class="col-sm-4">
                    <img src="https://unsplash.it/250/250?image=1062" alt="Cute dog wrapped in a blanket"
                    class="rounded-circle" />
                </div><!-- .col-sm-4 -->
            </div><!-- .row -->
            <div class="row">
                <div class="col-sm-4">
                    <img src="https://unsplash.it/250/250?image=1062" alt="Cute dog wrapped in a blanket"
                    class="rounded-circle" />
                </div><!-- .col-sm-4 -->
                <div class="col-sm-8">
                    <div class="description">
                        <h2>total Budget</h2>
                        <p>This visibility allows project managers to make informed decisions about resource allocation, preventing shortages or overstocking. Furthermore, integrating budget allocation features into the system enables project teams to monitor expenses in real-time and adjust plans accordingly, ensuring that projects stay within budget constraints.</p>
                    </div><!-- .description -->
                </div><!-- .col-sm-8 -->
            </div><!-- .row -->
            <div class="row">
                <div class="col-sm-8">
                    <div class="description">
                        <h2>conclusion</h2>
                        <p>Overall, a robust inventory management system can streamline operations, minimize waste, and optimize resource utilization, contributing to the overall success of construction projects.</p>
                    </div><!-- .description -->
                </div><!-- .col-sm-8 -->
                <div class="col-sm-4">
                    <img src="https://unsplash.it/250/250?image=1062" alt="Cute dog wrapped in a blanket"
                    class="rounded-circle" />
                </div><!-- .col-sm-4 -->
        
            </div><!-- .row -->

        </div><!-- .container -->









      <div class="secondarycontainer">
            @include( 'landingpage.layout.footer' )
        </div>

    </div>
</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>