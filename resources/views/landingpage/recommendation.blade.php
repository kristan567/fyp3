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
                        <img src="  https://online.abertay.ac.uk/wp-content/uploads/2023/06/recommender-systems.jpg"
                            alt="banner" border="0">
                        {{-- <div class="ban_text">
                            <strong>
                                 Recommendation<br>
                            </strong>
                            <p>"Build Smarter with Personalized Insights"</p>
                            <a href="{{ route('contactus') }}">Create Now</a>
                        </div> --}}
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
                        <h2>Tailored Guidance:</h2>
                        <p> Receive personalized suggestions for materials, construction methods, and project planning, based on the data from previous successful projects. Anticipate potential issues and challenges by leveraging data-driven recommendations, allowing you to address them before they impact your project.</p>
                    </div><!-- .description -->
                </div><!-- .col-sm-8 -->
            </div><!-- .row -->
            <div class="row">
                <div class="col-sm-8">
                    <div class="description">
                        <h2>Customized Plans:</h2>
                        <p> Get tailored recommendations to suit your specific needs and budget, ensuring your construction project aligns perfectly with your vision. Continuously refine and optimize your construction plans and strategies based on feedback and insights gathered from previous projects, ensuring ongoing success and innovation.</p>
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
                        <h2>Data-Driven Decision Making: </h2>
                        <p>Utilize insights from past projects to make informed choices, maximizing efficiency and achieving optimal outcomes for your build..</p>
                    </div><!-- .description -->
                </div><!-- .col-sm-8 -->
            </div><!-- .row -->
            <div class="row">
                <div class="col-sm-8">
                    <div class="description">
                        <h2>Expert Advice:</h2>
                        <p> Benefit from expert guidance and recommendations, backed by real-world data and experience, to navigate the complexities of construction with confidence.</p>
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