<!DOCTYPE html>
<html lang="en">
@include('includes.head')

<body>
    <div class="container-fluid">
        <div class="row justify-content-between">
            <div class="col-12 col-lg-7 d-lg-flex justify-content-center px-0">
                <div class="">
                    <!-- header -->
                    <header class="py-4">
                        <div class="container">
                            <img src="{{ asset('Assets/Logo.svg') }}" alt="YelpCamp Logo">
                        </div>
                    </header>
                    <main class="d-lg-flex flex-column justify-content-center h-75">
                        <!-- hero image -->
                        <div id="hero">
                            <img class="w-100 d-lg-none" src="{{ asset('Assets/Hero Image (Tablet and Mobile).jpg') }}"
                                alt="People camping with mountanis and lake in the backgroud">
                        </div>
                        <!-- main content -->
                        <section id="main-content" class="py-4">
                            <div class="container">
                                <h1 class="fw-bold">Explore the best<br>
                                    camps on Earth.</h1>
                                <p>
                                    YelpCamp is a curated list od the best camping sports on Earth.<br> Unfiltered and
                                    unbiased reviews.
                                </p>
                                <!-- list -->
                                <ul class="fa-ul w-100">
                                    <li>
                                        <span class="fa-li">
                                            <i class="fa-solid fa-circle-check"></i>
                                        </span>
                                        Add your own camp suggestions.
                                    </li>
                                    <li>
                                        <span class="fa-li">
                                            <i class="fa-solid fa-circle-check"></i>
                                        </span>
                                        Leave reviews and experiences.
                                    </li>
                                    <li>
                                        <span class="fa-li">
                                            <i class="fa-solid fa-circle-check"></i>
                                        </span>
                                        See locations for all camps.
                                    </li>
                                </ul>
                                <!-- button -->
                                <a href="search.html" class="btn">
                                    View Campgrounds
                                </a>
                            </div>
                        </section>
                        <!-- footer partners -->
                        <footer>
                            <div class="container">
                                <p>Partnered with:</p>
                                <div class="partners d-flex">
                                    <img src="{{ asset('Assets/Booking.svg') }}" alt="Booking logo">
                                    <img src="{{ asset('Assets/Plum Guide.svg') }}" alt="Booking logo">
                                </div>
                            </div>
                        </footer>
                    </main>
                </div>
            </div>
            <div class="col-lg-5 d-none d-lg-block px-0">
                <img class="w-100 vh-100" src="{{ asset('Assets/Hero Image.jpg') }}"
                    alt="People camping with mountanis and lake inthe backgroud">
            </div>
        </div>
    </div>
</body>

</html>
