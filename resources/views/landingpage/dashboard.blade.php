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
                        <img src="https://triare.net/wp-content/uploads/2022/03/TRIARE-cases-logistics-transport-air-01-1920x1080.webp"
                            alt="banner" border="0">
                        <div class="ban_text">
                            <strong style="color: black;">
                                 Dashboard<br>
                            </strong>
                            <p style="color: black;">Drive Decisions with Data</p>
                            <a href="{{ route('contactus') }}">Create now!</a>
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
                        <h2>Visualized Progress: </h2>
                        <p>Stay informed at a glance with interactive dashboards, empowering data-driven decision-making. Anticipate future trends and challenges with predictive analytics, allowing for proactive decision-making and risk mitigation.</p>
                    </div><!-- .description -->
                </div><!-- .col-sm-8 -->
            </div><!-- .row -->
            <div class="row">
                <div class="col-sm-8">
                    <div class="description">
                        <h2>Resource Optimization: </h2>
                        <p>Harness insights to optimize resource allocation, maximizing efficiency and minimizing waste.  Learn from past projects with in-depth analysis of historical data, identifying patterns and trends to inform future strategies. </p>
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
                        <h2>Financial Insights: </h2>
                        <p>Monitor project finances in real-time, ensuring adherence to budget constraints and maximizing profitability.</p>
                    </div><!-- .description -->
                </div><!-- .col-sm-8 -->
            </div><!-- .row -->
            <div class="row">
                <div class="col-sm-8">
                    <div class="description">
                        <h2>Custom Reporting:</h2>
                        <p> Generate tailored reports on project performance metrics, facilitating comprehensive analysis and strategic planning.</p>
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