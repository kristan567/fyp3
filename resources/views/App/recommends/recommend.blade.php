<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        .card-list {
            display: flex;
       
            flex-wrap: wrap;
            gap: 16px;
            container-type: inline-size;
            resize: horizontal;
            overflow: auto;
        }

        .card-list__item {
            width: 100%;
        }



        @media (min-width: 600px) {
            .card-list__item {
                width: calc((100% - 16px) / 2);
            }
        }

        .card {
            border: 2px solid gray;
            border-radius: 16px;
            padding: 1.5rem 1rem;
            display: flex;
            flex-direction: column;
        }

        .card__title {
            font-size: 18px;
            text-align: center;
        }

        .card__content {
            margin-top: 1rem;
            display: flex;
            flex-direction: row;
            gap: 1rem;
            flex-grow: 1;
        }

        .card__image-wrapper {
            width: 35%;
            flex-shrink: 0;
        }

        .card__image {
            overflow: hidden;
            border-radius: 16px;
        }

        .card__text {
            font-family: serif;
        }

        .card__button-wrapper {
            margin-top: 1rem;
            text-align: center;
        }

        .card__button {
            appearance: none;
            border: none;
            background-color: #4B7CB6;
            color: white;
            padding: 1rem;
            min-width: 50%;
            border-radius: 100vh;
            cursor: pointer;
        }

        .section {
            margin: 32px;
            
       
        }

        * {
            margin: 0;
            box-sizing: border-box;
        }

        img {
            width: 100%;
            height: auto;
            vertical-align: bottom;
        }
    </style>


</head>

<body>

    {{-- <section class="section">
        <div class="card-list">
            <div class="card-list__item card">
                <h3 class="card__title">タイトル1</h3>
                <div class="card__content">
                    <div class="card__image-wrapper">
                        <div class="card__image">
                            <img src="https://picsum.photos/800/600?random=1" alt="">
                        </div>
                    </div>
                    <div class="card__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen book.</div>
                </div>
                <div class="card__button-wrapper">
                    <button class="card__button">記事を見る</button>
                </div>
            </div>
            <div class="card-list__item card">
                <h3 class="card__title">タイトル2</h3>
                <div class="card__content">
                    <div class="card__image-wrapper">
                        <div class="card__image">
                            <img src="https://picsum.photos/800/600?random=2" alt="">
                        </div>
                    </div>
                    <div class="card__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </div>
                </div>
                <div class="card__button-wrapper">
                    <button class="card__button">記事を見る</button>
                </div>
            </div>
            <div class="card-list__item card">
                <h3 class="card__title">タイトル3</h3>
                <div class="card__content">
                    <div class="card__image-wrapper">
                        <div class="card__image">
                            <img src="https://picsum.photos/800/600?random=3" alt="">
                        </div>
                    </div>
                    <div class="card__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen book.</div>
                </div>
                <div class="card__button-wrapper">
                    <button class="card__button">記事を見る</button>
                </div>
            </div>
            <div class="card-list__item card">
                <h3 class="card__title">タイトル4</h3>
                <div class="card__content">
                    <div class="card__image-wrapper">
                        <div class="card__image">
                            <img src="https://picsum.photos/800/600?random=4" alt="">
                        </div>
                    </div>
                    <div class="card__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen book. It has survived not
                        only five centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem
                        Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
                        including versions of Lorem Ipsum.</div>
                </div>
                <div class="card__button-wrapper">
                    <button class="card__button">記事を見る</button>
                </div>
            </div>
        </div>
    </section> --}}


    <section class="section">
        
            <div class="card-list">
                @foreach ($recommends as $recommend)
                <div class="card-list__item card">
                    <h3 class="card__title">{{ $recommend->id }}</h3>
                    <div class="card__content">
                        <div class="card__image-wrapper">
                            <div class="card__image">
                                <img src="https://picsum.photos/800/600?random=1" alt="">
                            </div>
                        </div>

                        <div class="card__text">{{ $recommend->description }}
                        </div>
                    </div>
                    <div class="card__button-wrapper">
                        <button class="card__button">Button</button>
                        <td>
                            <a href="{{ url('recommend/' . $recommend->id . '/show' ) }}"
                                class="card__button">Show</a>
                        </td>
                    </div>
                </div>
                @endforeach
            </div>
      

    </section>


</body>

</html>
