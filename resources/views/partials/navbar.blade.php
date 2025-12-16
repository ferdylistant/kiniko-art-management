<nav class="navbar navbar-expand-lg navbar-light bg-transparent border-bottom">
    <div class="container">

        <a class="navbar-brand fw-bold" href="{{ route('home') }}">
            <img src="{{ asset('img/logo.png') }}" height="40" alt="Kiniko Art Management">
        </a>

        <button class="navbar-toggler kiniko-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMain"
            aria-controls="navMain" aria-expanded="false" aria-label="Toggle navigation">

            <span class="toggler-line"></span>
            <span class="toggler-line"></span>
            <span class="toggler-line"></span>

        </button>


        <div class="collapse navbar-collapse" id="navMain">
            <ul class="navbar-nav ms-auto gap-3 text-uppercase small">

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('gallery.*') ? 'active' : '' }}"
                        href="{{ route('gallery.index') }}">
                        Gallery
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('exhibitions.*') ? 'active' : '' }}"
                        href="{{ route('exhibitions.index') }}">
                        Exhibition
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('artists.*') ? 'active' : '' }}"
                        href="{{ route('artists.index') }}">
                        Artist
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('artworks.*') ? 'active' : '' }}"
                        href="{{ route('artworks.index') }}">
                        Artwork
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">
                        About
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}"
                        href="{{ route('contact') }}">
                        Contact
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>
