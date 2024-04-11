<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

    <div class="mainbody">

        {{-- <header class="navbar-header">
            <nav class="navbar navbar-expand-lg navbar-light navbar-hover-bg " >
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarNavDropdown" style="margin-left: 55%;">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <strong><a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a></strong>
                        </li>
                        <li class="nav-item">
                            <strong> <a class="nav-link"  href="#">Features</a></strong>
                        </li>
                        <li class="nav-item">
                            <strong> <a class="nav-link"  href="#">Pricing</a></strong>
                        </li>
                        <li class="nav-item dropdown">
                            <strong> <a class="nav-link dropdown-toggle"  href="#" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown link
                            </a></strong>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item"  href="#">Action</a>
                                <a class="dropdown-item"  href="#">Another action</a>
                                <a class="dropdown-item"  href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <strong><a class="nav-link"  href="#">Pricing</a></strong>
                        </li>
                        <li class="nav-item">
                            <strong> <a class="nav-link"  href="#">Pricing</a></strong>
                        </li>
                    </ul>
                </div>

            </nav>
        </header> --}}
        
        @include( 'landingpage.layout.navbar' )


    <div class="firstcontainer">


        <img class="banner" src="{{ asset('images/blog/newspaper.jpg') }}" style="height: 500px;" alt="Image banner which reads Tech Talk Tutorials">

        <hr style="width: 100%;">

        <h1 class="title">HOW TO CREATE A RESPONSIVE NEWSPAPER LAYOUT</h1>



        <div class="container">


            <p><img class="col-img" src="{{ asset('images/blog/pic.png') }}" alt=""></p>

            <p class="paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi vero blanditiis accusamus
                ratione voluptates. Sapiente corporis assumenda, perspiciatis eaque blanditiis ex molestiae sunt ducimus
                veritatis. Non fugiat optio molestiae dolorem laboriosam doloremque labore distinctio officiis. Optio quos
                dolor ex laudantium sit voluptatem reiciendis eum tempora.</p>

            <p class="paragraph">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor, doloribus, eos ad
                consequatur quibusdam debitis quod perspiciatis, sequi hic quisquam itaque facilis. A dolor deleniti culpa,
                aperiam voluptatem dolore saepe voluptatum modi ratione possimus, sint, porro ipsam reprehenderit eligendi.
                Ipsa.</p>

            <p class="paragraph">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam explicabo laborum nesciunt,
                doloribus, sint excepturi provident repudiandae eius voluptatem veniam, aspernatur odit perferendis
                necessitatibus cumque officia aliquam. Quos accusantium nesciunt temporibus, impedit enim optio assumenda
                iusto itaque praesentium. Eos nisi esse consequuntur fugit autem? Doloremque!</p>

            <p class="paragraph">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor, doloribus, eos ad
                consequatur quibusdam debitis quod perspiciatis, sequi hic quisquam itaque facilis. A dolor deleniti culpa,
                aperiam voluptatem dolore saepe voluptatum modi ratione possimus, sint, porro ipsam reprehenderit eligendi.
                Ipsa.</p>

            <p class="paragraph">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam explicabo laborum nesciunt,
                doloribus, sint excepturi provident repudiandae eius voluptatem veniam, aspernatur odit perferendis
                necessitatibus cumque officia aliquam. Quos accusantium nesciunt temporibus, impedit enim optio assumenda
                iusto itaque praesentium. Eos nisi esse consequuntur fugit autem? Doloremque!</p>

            <p class="paragraph">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor, doloribus, eos ad
                consequatur quibusdam debitis quod perspiciatis, sequi hic quisquam itaque facilis. A dolor deleniti culpa,
                aperiam voluptatem dolore saepe voluptatum modi ratione possimus, sint, porro ipsam reprehenderit eligendi.
                Ipsa.</p>

            <p class="paragraph">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam explicabo laborum nesciunt,
                doloribus, sint excepturi provident repudiandae eius voluptatem veniam, aspernatur odit perferendis
                necessitatibus cumque officia aliquam. Quos accusantium nesciunt temporibus, impedit enim optio assumenda
                iusto itaque praesentium. Eos nisi esse consequuntur fugit autem? Doloremque!</p>

            <p class="paragraph">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor, doloribus, eos ad
                consequatur quibusdam debitis quod perspiciatis, sequi hic quisquam itaque facilis. A dolor deleniti culpa,
                aperiam voluptatem dolore saepe voluptatum modi ratione possimus, sint, porro ipsam reprehenderit eligendi.
                Ipsa.</p>

        </div>

        <hr style="width: 100%;">

        <!--Next Row-->

        <h1 class="title">This Is The Second Article</h1>

        <div class="container">

            <p class="paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut mollitia quae laudantium facere
                impedit aperiam possimus? Officia earum cum ut blanditiis magni quasi officiis nulla asperiores quia saepe
                facere quaerat voluptates, suscipit quos doloremque nesciunt, architecto aut atque perferendis! Totam
                ratione aut, quae consectetur corporis natus inventore ex eius quibusdam ullam officia unde, dolores, vero
                id aliquam. Rem, officiis explicabo.</p>

            <p class="paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis ad iure illo velit fuga
                dolorum qui, facilis veritatis ipsam ea ab hic, consectetur corrupti quis. Hic placeat impedit numquam
                voluptatibus natus libero aliquid cupiditate amet consequuntur. Consectetur provident enim fugiat.</p>

            <p class="paragraph">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam explicabo laborum nesciunt,
                doloribus, sint excepturi provident repudiandae eius voluptatem veniam, aspernatur odit perferendis
                necessitatibus cumque officia aliquam. Quos accusantium nesciunt temporibus, impedit enim optio assumenda
                iusto itaque praesentium. Eos nisi esse consequuntur fugit autem? Doloremque!</p>

            <p class="paragraph">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos dolore eaque
                voluptates odio debitis, labore earum adipisci est non explicabo fugit doloribus deserunt dolorem. A
                blanditiis tenetur, sapiente eum officia reiciendis maiores ducimus sint architecto quae temporibus unde
                voluptatum itaque modi perspiciatis eius harum ab quis eos expedita odit quia accusamus. At perferendis
                voluptas saepe?.</p>

        </div>

        <hr style="width: 100%;">

        <!--Next Row-->

        <h1 class="title">This Is The Third Article</h1>

        <div class="container">


            <p class="paragraph">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam explicabo laborum nesciunt,
                doloribus, sint excepturi provident repudiandae eius voluptatem veniam, aspernatur odit perferendis
                necessitatibus cumque officia aliquam. Quos accusantium nesciunt temporibus, impedit enim optio assumenda
                iusto itaque praesentium. Eos nisi esse consequuntur fugit autem? Doloremque!</p>

            <p class="paragraph">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor, doloribus, eos ad
                consequatur quibusdam debitis quod perspiciatis, sequi hic quisquam itaque facilis. A dolor deleniti culpa,
                aperiam voluptatem dolore saepe voluptatum modi ratione possimus, sint, porro ipsam reprehenderit eligendi.
                Ipsa.</p>

            <p class="paragraph">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam explicabo laborum nesciunt,
                doloribus, sint excepturi provident repudiandae eius voluptatem veniam, aspernatur odit perferendis
                necessitatibus cumque officia aliquam. Quos accusantium nesciunt temporibus, impedit enim optio assumenda
                iusto itaque praesentium. Eos nisi esse consequuntur fugit autem? Doloremque!</p>

            <p class="paragraph">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor, doloribus, eos ad
                consequatur quibusdam debitis quod perspiciatis, sequi hic quisquam itaque facilis. A dolor deleniti culpa,
                aperiam voluptatem dolore saepe voluptatum modi ratione possimus, sint, porro ipsam reprehenderit eligendi.
                Ipsa.</p>

            <p class="paragraph">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam explicabo laborum nesciunt,
                doloribus, sint excepturi provident repudiandae eius voluptatem veniam, aspernatur odit perferendis
                necessitatibus cumque officia aliquam. Quos accusantium nesciunt temporibus, impedit enim optio assumenda
                iusto itaque praesentium. Eos nisi esse consequuntur fugit autem? Doloremque!</p>

            <p class="paragraph">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor, doloribus, eos ad
                consequatur quibusdam debitis quod perspiciatis, sequi hic quisquam itaque facilis. A dolor deleniti culpa,
                aperiam voluptatem dolore saepe voluptatum modi ratione possimus, sint, porro ipsam reprehenderit eligendi.
                Ipsa.</p>

            <p class="paragraph">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam explicabo laborum nesciunt,
                doloribus, sint excepturi provident repudiandae eius voluptatem veniam, aspernatur odit perferendis
                necessitatibus cumque officia aliquam. Quos accusantium nesciunt temporibus, impedit enim optio assumenda
                iusto itaque praesentium. Eos nisi esse consequuntur fugit autem? Doloremque!</p>

            <p class="paragraph">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor, doloribus, eos ad
                consequatur quibusdam debitis quod perspiciatis, sequi hic quisquam itaque facilis. A dolor deleniti culpa,
                aperiam voluptatem dolore saepe voluptatum modi ratione possimus, sint, porro ipsam reprehenderit eligendi.
                Ipsa.</p>

            <p><img class="col-img" src="{{ asset('images/blog/pic2.png') }}" alt=""></p>

        </div>





    </div>

    <div class="secondcontainer">

        @include( 'landingpage.layout.footer' )
    </div>


    


    </div>
    
</body>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>