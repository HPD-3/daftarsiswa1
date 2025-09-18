<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            height: 100vh;
            background: linear-gradient(to right, #6a11cb, #2575fc);
        }

        .sidebar {
            min-width: 220px;
            max-width: 220px;
            background: rgba(0, 0, 0, 0.7);
            color: white;
        }

        .sidebar a {
            color: #fff;
            text-decoration: none;
            padding: 8px 12px;
            border-radius: 6px;
            display: block;
        }

        .sidebar a:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }

        .content {
            flex: 1;
            padding: 20px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 12px;
            margin: 15px;
            overflow-y: auto;
        }

        .topbar {
            background-color: rgba(255, 255, 255, 0.95);
            border-bottom: 1px solid #dee2e6;
            padding: 10px 20px;
            border-radius: 12px 12px 0 0;
            margin: 15px 15px 0 15px;
        }

        @media (max-width: 768px) {
            .sidebar {
                display: none;
            }
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <div class="d-flex h-100">
        <!-- Sidebar (desktop) -->
        <x-sidebar />

        <!-- Offcanvas Sidebar (mobile) -->
        <div class="offcanvas offcanvas-start bg-dark text-white" tabindex="-1" id="mobileSidebar">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title">📒 Contacts</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="nav flex-column">
                    <li class="nav-item mb-2">
                        <a href="{{ route('siswa.index') }}" class="nav-link text-white">🏠 Home</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="{{ route('siswa.create') }}" class="nav-link text-white">➕ Add Contact</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Main content -->
        <div class="d-flex flex-column flex-grow-1">
            <!-- Topbar -->
            <div class="topbar d-flex justify-content-between align-items-center">
                <!-- Hamburger button -->
                <button class="btn btn-primary d-md-none" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#mobileSidebar">
                    ☰
                </button>

                <!-- Search bar -->
                <form class="d-flex w-50" method="GET" action="{{ route('siswa.index') }}">
                    <input class="form-control me-2" type="search" name="search" placeholder="Cari siswa..."
                        value="{{ request('search') }}">
                    <button class="btn btn-primary" type="submit">Cari</button>
                </form>
                <div class="dropdown ms-3">
                    <button class="btn btn-light dropdown-toggle" type="button" id="userMenu" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        {{ Auth::user()->name }}
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

            <!-- Page content -->
            <div class="content shadow">
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @yield('content')
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>