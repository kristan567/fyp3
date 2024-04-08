

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


  

    <div class="content-wrapper">

        <main class="dashboard">

            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">


                        <div class="p-6 text-gray-900">
                            <form id="filterForm" style="opacity: 0; pointer-events: none;" >
                                <!-- Price Range -->
                                <input type="number" id="min_price" name="min_price" placeholder="Min Price">
                                <input type="number" id="max_price" name="max_price" placeholder="Max Price">

                                <!-- Project Type Checkboxes -->
                                <input type="checkbox" class="project_type" name="project_types[]"
                                    value="Vacation Home">
                                Vacation Home
                                <input type="checkbox" class="project_type" name="project_types[]" value="residential">
                                Residential
                                <!-- Add other project types as needed -->
                                <!-- Land Size -->
                                <input type="number" id="size" name="size" placeholder="Land Size (sq)">

                                <!-- Time -->
                                <input type="text" id="time" name="time" placeholder="Time">
                                <button type="submit" class="btn btn-primary">Apply Filters</button>
                            </form>

                            <div class="filteredData">

                                <section class="section">

                                    <div class="card-list">
                                        @foreach ($data as $filteredItem)
                                            <div class="card-list__item card">
                                                <h3 class="card__title">{{ $filteredItem->Project_Name }}</h3>
                                                <div class="card__content">
                                                    <div class="card__image-wrapper">
                                                        <div class="card__image">
                                                            <img src="https://picsum.photos/800/600?random=1"
                                                                alt="">
                                                        </div>
                                                    </div>

                                                    <div class="card__text">{{ $filteredItem->description }}
                                                    </div>
                                                </div>
                                                <div class="card__button-wrapper">

                                                    <td>
                                                        <a href="{{ url('recommend/' . $filteredItem->id . '/show') }}"
                                                            class="btn btn-primary">Show</a>
                                                    </td>


                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </section>
                            </div>

                            {{-- <section class="section">

                                <div class="card-list">
                                    @foreach ($recommends as $recommend)
                                        <div class="card-list__item card">
                                            <h3 class="card__title">{{ $recommend->Project_Name }}</h3>
                                            <div class="card__content">
                                                <div class="card__image-wrapper">
                                                    <div class="card__image">
                                                        <img src="https://picsum.photos/800/600?random=1"
                                                            alt="">
                                                    </div>
                                                </div>

                                                <div class="card__text">{{ $recommend->description }}
                                                </div>
                                            </div>
                                            <div class="card__button-wrapper">

                                                <td>
                                                    <a href="{{ url('recommend/' . $recommend->id . '/show') }}"
                                                        class="btn btn-primary">Show</a>
                                                </td>


                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </section> --}}


                        </div>
                    </div>
                </div>
        </main>
    </div>



   
