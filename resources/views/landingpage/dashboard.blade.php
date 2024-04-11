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
                        <img src="https://www.snsltd.com.np/public/upload/images/slider/sindhuli-road-maintenace-project.jpg"
                            alt="banner" border="0">
                        <div class="ban_text">
                            <strong>
                                 Dashboard<br>
                            </strong>
                            <p>You can prioritize a child’s mental, emotional, <br>
                                behavioral, and physical health </p>
                            <a href="#">Lend a hand</a>
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
                        <h2>Heading</h2>
                        <p>Bacon ipsum dolor amet short ribs doner jowl capicola. Rump drumstick pork pork loin. Shankle
                            meatball beef ribs, short ribs leberkas meatloaf beef swine picanha. Ribeye ham hock jowl
                            fatback picanha turkey, ground round shankle salami brisket.</p>
                    </div><!-- .description -->
                </div><!-- .col-sm-8 -->
            </div><!-- .row -->
            <div class="row">
                <div class="col-sm-8">
                    <div class="description">
                        <h2>Heading</h2>
                        <p>Bacon ipsum dolor amet short ribs doner jowl capicola. Rump drumstick pork pork loin. Shankle
                            meatball beef ribs, short ribs leberkas meatloaf beef swine picanha. Ribeye ham hock jowl
                            fatback picanha turkey, ground round shankle salami brisket.</p>
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
                        <h2>Heading</h2>
                        <p>Bacon ipsum dolor amet short ribs doner jowl capicola. Rump drumstick pork pork loin. Shankle
                            meatball beef ribs, short ribs leberkas meatloaf beef swine picanha. Ribeye ham hock jowl
                            fatback picanha turkey, ground round shankle salami brisket.</p>
                    </div><!-- .description -->
                </div><!-- .col-sm-8 -->
            </div><!-- .row -->
            <div class="row">
                <div class="col-sm-8">
                    <div class="description">
                        <h2>Heading</h2>
                        <p>Bacon ipsum dolor amet short ribs doner jowl capicola. Rump drumstick pork pork loin. Shankle
                            meatball beef ribs, short ribs leberkas meatloaf beef swine picanha. Ribeye ham hock jowl
                            fatback picanha turkey, ground round shankle salami brisket.</p>
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