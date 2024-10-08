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

        <h1 class="title">Nepal's Seismic Shift: Building a Resilient Future in the Shadow of the Himalayas </h1>



        <div class="container">


            <p><img class="col-img" src="{{ asset('images/blog/pic.png') }}" alt=""></p>

            <p class="paragraph">Nepal, a nation forever etched with the dramatic scars of its geological history, faces a unique challenge in the realm of construction. Nestled amidst towering peaks forged by immense seismic forces, the country is highly susceptible to earthquakes. This reality demands a robust and innovative approach to construction management, particularly in areas with high seismic activity. Here's a closer look at how Nepal is navigating this ever-present threat and building a more resilient future</p>

            <p class="paragraph">Building Back Better: Lessons Learned from the Rubble
                The devastating 2015 earthquake that shook Nepal to its core served as a stark wake-up call. In the aftermath, the nation embarked on a massive reconstruction effort, determined to emerge stronger and more prepared for future seismic events. A key focus of this initiative has been on implementing stricter building codes and promoting earthquake-resistant construction practices. This multi-pronged approach includes:
                </p>

            <p class="paragraph">Focus on Retrofitting Existing Structures: Many existing buildings in Nepal, particularly those constructed before the implementation of modern seismic codes, require retrofitting to withstand the destructive forces of an earthquake. Construction companies are specializing in these techniques, employing a range of strategies such as reinforcing foundations, adding shear walls, and strengthening load-bearing elements. Retrofitting existing structures plays a crucial role in ensuring the safety of residents and safeguarding the nation's cultural heritage</p>

            <p class="paragraph">Embracing New Materials for a Seismic Future: Research and development efforts are driving the adoption of innovative, earthquake-resistant building materials like Engineered Wood Products (EWP). These advanced materials, such as laminated veneer lumber (LVL) and cross-laminated timber (CLT), offer superior strength, flexibility, and lighter weight compared to traditional methods. This not only enhances the seismic performance of structures but also facilitates faster construction times.</p>

            <p class="paragraph">	Community Involvement: Building Ownership and Resilience: Local communities are actively engaged in the reconstruction process, moving beyond being passive recipients of aid. Training programs empower residents with basic construction skills and knowledge of earthquake-resistant building techniques. This fosters a sense of ownership and preparedness within communities, enabling them to participate actively in building a safer future.</p>

            <p class="paragraph">p class="paragraph">Looking Ahead: A Seismic Shift Towards a Safer Future
                The unwavering emphasis on earthquake-resistant construction management in Nepal is a testament to the nation's unwavering commitment to building a safer future for its citizens. By embracing innovative technologies, fostering community involvement, and implementing stricter building codes, Nepal is setting a strong example for other earthquake-prone regions around the world. This ongoing journey towards seismic resilience serves as a beacon of hope, demonstrating that even in the face of immense geological challenges, proactive measures and a spirit of innovation can pave the way for a more secure and sustainable future.        </p>/p>

                <p class="paragraph"> </p>

            <p class="paragraph">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor, doloribus, eos ad
                consequatur quibusdam debitis quod perspiciatis, sequi hic quisquam itaque facilis. A dolor deleniti culpa,
                aperiam voluptatem dolore saepe voluptatum modi ratione possimus, sint, porro ipsam reprehenderit eligendi.
                Ipsa.</p>

        </div>

        <hr style="width: 100%;">

        <!--Next Row-->

        {{-- <h1 class="title">This Is The Second Article</h1>

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

        <hr style="width: 100%;"> --}}

        <!--Next Row-->

        {{-- <h1 class="title">This Is The Third Article</h1>

        <div class="container">


    

            <

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

        </div> --}}





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