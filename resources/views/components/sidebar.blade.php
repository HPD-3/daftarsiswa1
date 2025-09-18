<!-- Sidebar (desktop) -->
<div class="sidebar d-none d-md-flex flex-column p-3 text-white" 
     style="min-height: 100vh; background: linear-gradient(to bottom, #6a11cb, #2575fc);">
    <h4 class="fw-bold mb-4">📚 Daftar Siswa</h4>
    <ul class="nav flex-column">
        <li class="nav-item mb-2">
            <a href="{{ route('siswa.index') }}" 
               class="nav-link text-white {{ request()->routeIs('siswa.index') ? 'active fw-bold' : '' }}">
                🏠 Home
            </a>
        </li>
        <li class="nav-item mb-2">
            <a href="{{ route('siswa.create') }}" 
               class="nav-link text-white {{ request()->routeIs('siswa.create') ? 'active fw-bold' : '' }}">
                ➕ Tambah Siswa
            </a>
        </li>
    </ul>
</div>

<!-- Offcanvas Sidebar (mobile) -->
<div class="offcanvas offcanvas-start text-white" tabindex="-1" id="mobileSidebar" 
     style="background: linear-gradient(to bottom, #6a11cb, #2575fc);">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title fw-bold">📚 Daftar Siswa</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="nav flex-column">
            <li class="nav-item mb-2">
                <a href="{{ route('siswa.index') }}" 
                   class="nav-link text-white {{ request()->routeIs('siswa.index') ? 'active fw-bold' : '' }}">
                    🏠 Home
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="{{ route('siswa.create') }}" 
                   class="nav-link text-white {{ request()->routeIs('siswa.create') ? 'active fw-bold' : '' }}">
                    ➕ Tambah Siswa
                </a>
            </li>
        </ul>
    </div>
</div>
