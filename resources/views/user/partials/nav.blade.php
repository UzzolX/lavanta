<section class="nav-menu">
    <div class="container-1550">
        <div class="row">
            <div class="col-xxl-12">
                <nav class="navbar navbar-expand-lg navbar-light ">
                    <div class="container-fluid p-0">
                        <a class="navbar-brand" href="/">
                            <img src="{{asset('frontend-assets/assets/image/logo/logo1.png')}}" alt="">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                            <ul class="navbar-nav d-flex align-items-center main-menu">
                                <div class="menu-list navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('about.index')}}">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('whyus.index')}}">Why Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page"
                                            href="{{route('investors.index')}}">investor</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page"
                                            href="{{route('developers.index')}}">Developers</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page"
                                            href="{{route('property-search.index')}}">Property Search</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('faq.index')}}">FAQ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('contact.index')}}">Contact</a>
                                    </li>
                                </div>

                                <li class="nav-items">
                                    <a class="nav-link" href="{{route('login')}}"><button>Login</button></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>
