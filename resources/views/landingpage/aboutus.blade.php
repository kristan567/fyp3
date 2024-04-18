<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/aboutus.css') }}">

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">



    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css"/>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css"/>
</head>
<body>
    <section class="hero">


        @include( 'landingpage.layout.navbar' )


        <img class="banner" src="{{ asset('images/aboutus/aboutus.jpg') }}" style="height: 500px;" alt="Image banner which reads Tech Talk Tutorials">




        <!-- <div class="heading">
            <h1>About us</h1>
        </div> -->
        <div class="aboutuscontainer">
            <div class="hero-content">
                <h2>Company Overview</h2>
                <p>At Field Magnet, we pride ourselves on revolutionizing the way construction projects are managed. With a team of seasoned professionals in both construction and technology, we've created a robust platform designed to streamline every aspect of the construction process.Whether you're a small contracting firm or a large-scale development company, our innovative solutions are tailored to meet your unique needs, ensuring smooth project execution from inception to completion.</p>
                {{-- <button class="cta-button">Learn more</button> --}}
            </div>
            <div class="hero-image">
                <img class="banner" src="{{ asset('images/blog/newspaper.jpg') }}" style="height: 400px;" alt="Image banner which reads Tech Talk Tutorials">
            </div>
        </div>
        <div class="aboutuscontainer">
            <div class="hero-image">
                <img class="banner" src="{{ asset('images/blog/newspaper.jpg') }}" style="height: 400px;" alt="Image banner which reads Tech Talk Tutorials">
            </div>
            <div class="hero-content">
                <h2>History</h2>
                <p>Our journey began with a simple yet ambitious goal: to bridge the gap between traditional construction practices and the digital age. With a commitment to innovation and a relentless pursuit of excellence, we've developed a suite of tools that address the industry's most pressing challenges, from project scheduling and budget management to communication and collaboration. </p>
              
            </div>
            
        </div>

        <div class="aboutuscontainer">
            <div class="hero-content">
                <h2>What We Provide</h2>
                <p>Beyond our commitment to our clients, we are also deeply invested in the communities we serve. We believe that sustainable development is not just a buzzword, but a responsibility, and we're proud to support environmentally friendly practices that minimize our impact on the planet. From utilizing cutting-edge construction materials to implementing energy-efficient technologies, we're constantly seeking ways to build a better future for generations to come.</p>
                <button class="cta-button">Learn more</button>
            </div>
            <div class="hero-image">
                <img class="banner" src="{{ asset('images/blog/newspaper.jpg') }}" style="height: 400px;" alt="Image banner which reads Tech Talk Tutorials">
            </div>
        </div>
    </section>


    <div class="secondcontainer">

        @include( 'landingpage.layout.footer' )
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>
