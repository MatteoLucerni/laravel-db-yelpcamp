<header class="py-4">
    <div class="navbar navbar-expand-lg">
        <a class="navbar-brand pt-0">
            <img src="{{ asset('Assets/Logo.svg') }}" alt="YelpCamp Logo">
        </a>
        <button class="navbar-toggler border-0 bg-main py-2" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
            </ul>
            <a class="nav-link active" aria-current="page" href="#">Login</a>
            <a href="#" class="btn ms-4">Create an account</a>
        </div>
    </div>
</header>
