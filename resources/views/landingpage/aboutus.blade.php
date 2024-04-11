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
                <h2>Welcome to the website</h2>
                <p>This is the text.</p>
                <button class="cta-button">Learn more</button>
            </div>
            <div class="hero-image">
                <img class="banner" src="{{ asset('images/blog/newspaper.jpg') }}" style="height: 500px;" alt="Image banner which reads Tech Talk Tutorials">
            </div>
        </div>
        <div class="aboutuscontainer">
            <div class="hero-image">
                <img class="banner" src="{{ asset('images/blog/newspaper.jpg') }}" style="height: 500px;" alt="Image banner which reads Tech Talk Tutorials">
            </div>
            <div class="hero-content">
                <h2>Welcome to the website</h2>
                <p>This is the text.</p>
                <button class="cta-button">Learn more</button>
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
