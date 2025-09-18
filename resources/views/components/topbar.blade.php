<div class="topbar d-flex justify-content-between align-items-center p-2 bg-light shadow-sm">
    <!-- Hamburger (mobile) -->
    <button class="btn btn-primary d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileSidebar">
        ☰
    </button>

    <!-- Search bar -->
    <form class="d-flex w-50" method="GET" action="{{ route('siswa.index') }}">
        <input class="form-control me-2" type="search" name="search" placeholder="Cari siswa..." value="{{ request('search') }}">
        <button class="btn btn-primary" type="submit">Search</button>
    </form>

    <!-- User menu -->
    <div class="dropdown ms-3">
        <button class="btn btn-light dropdown-toggle" type="button" id="userMenu" data-bs-toggle="dropdown" aria-expanded="false">
            👤 {{ Auth::user()->name }}
        </button>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userMenu">
            <li>
                <a class="dropdown-item" href="{{ route('profile.edit') }}">
                    {{ __('Profile') }}
                </a>
            </li>
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="dropdown-item">
                        {{ __('Log Out') }}
                    </button>
                </form>
            </li>
        </ul>
    </div>
</div>
