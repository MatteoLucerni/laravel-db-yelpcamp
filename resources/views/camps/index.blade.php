<!DOCTYPE html>
<html lang="en">
@include('includes.head')

<body>
    <div id="alert" class="bg-dark d-flex reounded-0 justify-content-between align-items-middle text-white p-3">
        <h5 class="mb-0">
            This project was made by <a href="https://github.com/MatteoLucerni">Matteo Lucerni</a>
        </h5>
        <div class="close">
            <i id="close-alert" class="fa-solid fa-xmark"></i>
        </div>
    </div>
    <div class="container">
        <header class="py-4">
            <div class="navbar navbar-expand-lg">
                <a class="navbar-brand pt-0">
                    <img src="Assets/Logo.svg" alt="YelpCamp Logo">
                </a>
                <button class="navbar-toggler border-0 bg-main py-2" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                        </li>
                    </ul>
                    <a class="nav-link active" aria-current="page" href="#">Login</a>
                    <a href="login.html" class="btn ms-4">Create an account</a>
                </div>
            </div>
        </header>
        <section id="hero">
            <div class="card border-0 bg-main p-4">
                <div class="box">
                    <h1>Welcome to YelpCamp</h1>
                    <p>
                        View our hand-picked campgrounds from all over the world, or add your own.
                    </p>
                    <div class="search-box d-flex flex-column flex-md-row align-items-middle gap-2 mb-3">
                        <div class="input-group">
                            <span class="input-group-text border-end-0" id="basic-addon1">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </span>
                            <input type="search" id="search" class="form-control border-start-0"
                                placeholder="Search for camps" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <button id="searchButton" class="btn">Search</button>
                    </div>
                    <a href="addCamp.html" class="text-gray">Or add your own campground</a>
                </div>
            </div>
        </section>
        <main class="my-5">
            <div class="row" id="camps-row">
                <div class="col-12 col-md-6 col-lg-4 pb-4">
                    <div class="card p-4">
                        <img class="rounded mb-4" src="Assets/Camp Images/Compressed Images/Mount Ulap.jpg"
                            alt="Mount Ulat view">
                        <h5>Mount Ulap</h5>
                        <p>One of the most famous hikes in Benguet is Mt Ulap in Itogon.</p>
                        <a href="" class="btn">View Campground</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 pb-4">
                    <div class="card p-4">
                        <img class="rounded mb-4" src="Assets/Camp Images/Compressed Images/Calaguas Island.jpg"
                            alt="Calaguas Island view">
                        <h5>Calaguas Islands</h5>
                        <p>A paradise of islands that can rival the white sand beauty of Boracay.</p>
                        <a href="" class="btn">View Campground</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 pb-4">
                    <div class="card p-4">
                        <img class="rounded mb-4" src="Assets/Camp Images/Compressed Images/Onay Beach.jpg"
                            alt="Mount Ulat view">
                        <h5>Onay Beach</h5>
                        <p>This is one of the best beach camping sites, beautiful and pristine.</p>
                        <a href="" class="btn">View Campground</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 pb-4">
                    <div class="card p-4">
                        <img class="rounded mb-4" src="Assets/Camp Images/Compressed Images/Seven Sisters Waterfall.jpg"
                            alt="Seven Sisters Waterfall view">
                        <h5>Seven Sisters Waterfall</h5>
                        <p>The Seven Sisters is the 39th tallest waterfall in Norway.</p>
                        <a href="" class="btn">View Campground</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 pb-4">
                    <div class="card p-4">
                        <img class="rounded mb-4" src="Assets/Camp Images/Compressed Images/Latik Riverside.jpg"
                            alt="Latik Riverside view">
                        <h5>Latik Riverside</h5>
                        <p>Philippines is one of the most dazzling countries in all of Asia.</p>
                        <a href="" class="btn">View Campground</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 pb-4">
                    <div class="card p-4">
                        <img class="rounded mb-4" src="Assets/Camp Images/Compressed Images/Buloy Springs.jpg"
                            alt="Buloy Springs view">
                        <h5>Buloy Springs</h5>
                        <p>This is one of the best beach camping sites, beautiful and pristine.</p>
                        <a href="" class="btn">View Campground</a>
                    </div>
                </div>
            </div>
        </main>
        <footer class="mb-5">
            <img src="Assets/Logo.svg" alt="YelpCamp Logo">
        </footer>
    </div>

    <script src="js/script.js"></script>
</body>

</html>
