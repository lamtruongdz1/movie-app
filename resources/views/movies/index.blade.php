@extends('layouts.master', ['title' => 'Trang chủ'])
@section('navbar')
    @include('layouts.header')
@endsection
@section('content')
    <!-- SLIDE SECTION -->
    <div class="big-section" id="big-section">
        <!-- BIG SLIDES -->
        <div class="slide-container" id="big-slider">

            <div class="big-slide-item active">
                <img src="./assets/img/Images/p-2.jpg" alt="Poster">

                <div class="big-slide-item-content">
                    <div class="item-content-wrapper">
                        <div class="item-content-title">
                            Pirate caribbean
                        </div>

                        <div class="movies-infors">
                            <div class="movies-infor">
                                <ion-icon name="bookmark-outline"></ion-icon>
                                <span>9.5</span>
                            </div>
                            <div class="movies-infor">
                                <ion-icon name="time-outline"></ion-icon>
                                <span>120 mins</span>
                            </div>
                            <div class="movies-infor">
                                <ion-icon name="cube-outline"></ion-icon>
                                <span>FHD</span>
                            </div>
                        </div>

                        <div class="item-content-description ">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Quas, possimus eius. Deserunt non odit, cum vero reprehenderit
                            laudantium odio vitae autem quam, incidunt molestias ratione mollitia accusantium,
                            facere ab suscipit.
                        </div>
                    </div>
                </div>

                <div class="play-movies">
                    <div class="ring"></div>
                    <a href="https://www.youtube.com/watch?v=Hgeu5rhoxxY&t=10s">
                        <i class='bx bxs-right-arrow'></i>
                    </a>
                    <div class="btn-watch">
                        <span>watch trailer</span>
                    </div>
                </div>
            </div>

            <div class="big-slide-item">
                <img src="./assets/img/Images/p-6.jpg" alt="Poster">

                <div class="big-slide-item-content">
                    <div class="item-content-wrapper">
                        <div class="item-content-title ">
                            black widow
                        </div>

                        <div class="movies-infors">
                            <div class="movies-infor">
                                <ion-icon name="bookmark-outline"></ion-icon>
                                <span>9.5</span>
                            </div>
                            <div class="movies-infor">
                                <ion-icon name="time-outline"></ion-icon>
                                <span>120 mins</span>
                            </div>
                            <div class="movies-infor">
                                <ion-icon name="cube-outline"></ion-icon>
                                <span>FHD</span>
                            </div>
                        </div>

                        <div class="item-content-description ">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Quas, possimus eius. Deserunt non odit, cum vero reprehenderit
                            laudantium odio vitae autem quam, incidunt molestias ratione mollitia accusantium,
                            facere ab suscipit.
                        </div>
                    </div>
                </div>

                <div class="play-movies ">
                    <div class="ring"></div>
                    <a href="https://www.youtube.com/watch?v=ybji16u608U">
                        <i class='bx bxs-right-arrow'></i>
                    </a>
                    <div class="btn-watch">
                        <span>watch trailer</span>
                    </div>
                </div>
            </div>

            <div class="big-slide-item">
                <img src="./assets/img/Images/transformer-banner.jpg" alt="Poster">

                <div class="big-slide-item-content">
                    <div class="item-content-wrapper">
                        <div class="item-content-title">
                            Transformer
                        </div>

                        <div class="movies-infors ">
                            <div class="movies-infor">
                                <ion-icon name="bookmark-outline"></ion-icon>
                                <span>9.5</span>
                            </div>
                            <div class="movies-infor">
                                <ion-icon name="time-outline"></ion-icon>
                                <span>120 mins</span>
                            </div>
                            <div class="movies-infor">
                                <ion-icon name="cube-outline"></ion-icon>
                                <span>FHD</span>
                            </div>
                        </div>

                        <div class="item-content-description  ">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Quas, possimus eius. Deserunt non odit, cum vero reprehenderit
                            laudantium odio vitae autem quam, incidunt molestias ratione mollitia accusantium,
                            facere ab suscipit.
                        </div>
                    </div>
                </div>

                <div class="play-movies ">
                    <div class="ring"></div>
                    <a href="https://www.youtube.com/watch?v=Q3VKie4pChs">
                        <i class='bx bxs-right-arrow'></i>
                    </a>
                    <div class="btn-watch">
                        <span>watch trailer</span>
                    </div>
                </div>
            </div>

            <div class="big-slide-item">
                <img src="./assets/img/Images/p-3.jpg" alt="Poster">

                <div class="big-slide-item-content">
                    <div class="item-content-wrapper">
                        <div class="item-content-title ">
                            bloodShot
                        </div>

                        <div class="movies-infors">
                            <div class="movies-infor">
                                <ion-icon name="bookmark-outline"></ion-icon>
                                <span>9.5</span>
                            </div>
                            <div class="movies-infor">
                                <ion-icon name="time-outline"></ion-icon>
                                <span>120 mins</span>
                            </div>
                            <div class="movies-infor">
                                <ion-icon name="cube-outline"></ion-icon>
                                <span>FHD</span>
                            </div>
                        </div>

                        <div class="item-content-description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Quas, possimus eius. Deserunt non odit, cum vero reprehenderit
                            laudantium odio vitae autem quam, incidunt molestias ratione mollitia accusantium,
                            facere ab suscipit.
                        </div>
                    </div>
                </div>

                <div class="play-movies ">
                    <div class="ring"></div>
                    <a href="https://www.youtube.com/watch?v=vOUVVDWdXbo">
                        <i class='bx bxs-right-arrow'></i>
                    </a>
                    <div class="btn-watch">
                        <span>watch trailer</span>
                    </div>
                </div>
            </div>

            <ul class="slide-control">
                <li class="slide-prev">
                    <ion-icon name="chevron-back-outline"></ion-icon>
                </li>

                <li class="slide-next">
                    <ion-icon name="chevron-forward-outline"></ion-icon>
                </li>
            </ul>

        </div>
    </div>

    <!--END SLIDE SECTION -->
    <!-- LATEST SECTION -->
    <div class="section" id="latest-section">
        <div class="section-wrapper" id="section-wrapper">
            <div class="section-header">
                Last updated
            </div>

            <div class="movies-slide row">
                @foreach ($getMovie as $movie)
                <a href="phim/{{ $movie['slug'] }}" class="movie-item col-3-5 m-5 s-11 to-top show-on-scroll">
                    <div>
                        <img src="./assets/img/Images/raya1.jpg" alt="">
                        <div class="movie-item-content">
                            <div class="movie-item-title">
                                {{ $movie['name'] }}

                            </div>

                            <div class="movies-infors-card">
                                <div class="movies-infor">
                                    <ion-icon name="bookmark-outline"></ion-icon>
                                    <span></span>
                                </div>
                                <div class="movies-infor">
                                    <ion-icon name="calendar-outline"></ion-icon>
                                    <span>{{ $movie['year'] }}</span>
                                </div>
                                <div class="movies-infor">
                                    <ion-icon name="cube-outline"></ion-icon>
                                    <span>FHD</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="movie-item-overlay">
                    </div>
                    <div class="movie-item-act">
                        <!-- <div class="ring"></div> -->
                        <i class='bx bxs-right-arrow'></i>

                        <div>
                            <i class='bx bxs-share-alt'></i>
                            <i class='bx bxs-heart'></i>
                            <i class='bx bx-plus-medical'></i>
                        </div>
                    </div>

                </a>
                @endforeach



                <div class="btn-load btn-load-tb">
                    <span>load more</span>
                </div>

            </div>



        </div>
    </div>

    <!-- END LATEST SECTION -->
@endsection
