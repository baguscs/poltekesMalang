<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="index.html">
        <img src="{{ asset('image/logo.png') }}" alt="" width="20%"> POLTEKESMA</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
            class="fas fa-bars"></i></button>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" style="margin-right: 35px" id="navbarDropdown" href="#"
                role="button" data-bs-toggle="dropdown" aria-expanded="false"><img
                    src="{{ 'https://ui-avatars.com/api/?name=' . auth()->user()->name }}" alt class="rounded-circle"
                    width="50%" /></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i
                            class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>Logout</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </li>
    </ul>
</nav>
