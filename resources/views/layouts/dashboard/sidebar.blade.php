<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}" href="{{ route('home') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <a class="nav-link {{ Str::startsWith(Route::currentRouteName(), 'profile.') ? 'active' : '' }}"
                    href="{{ route('profile.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-building"></i></div>
                    Profil
                </a>
                <a class="nav-link {{ Str::startsWith(Route::currentRouteName(), 'news.') ? 'active' : '' }}"
                    href="{{ route('news.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-newspaper"></i></div>
                    Berita dan Artikel
                </a>
                <a class="nav-link {{ Str::startsWith(Route::currentRouteName(), 'gallery.') ? 'active' : '' }}"
                    href="{{ route('gallery.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-image"></i></div>
                    Galeri
                </a>
                <a class="nav-link {{ Str::startsWith(Route::currentRouteName(), 'testimoni.') ? 'active' : '' }}"
                    href="{{ route('testimoni.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-comments"></i></div>
                    Testimoni
                </a>
            </div>
        </div>
    </nav>
</div>
