<ul class="menu">
    <li class="sidebar-title">Menu</li>

    <li class="sidebar-item @yield('dashboard')">
        <a href="#" class='sidebar-link'>
            <i class="bi bi-grid-fill"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <li class="sidebar-item @yield('data')">
        <a href="#" class='sidebar-link'>
            <i class="bi bi-grid-1x2-fill"></i>
            <span>Library Data</span>
        </a>
    </li>

    <li class="sidebar-title">Tes &amp; Wawancara</li>

    <li class="sidebar-item @yield('adm')">
        <a href="#" class='sidebar-link'>
            <i class="fa-solid fa-laptop-file"></i>
            <span>Administrasi</span>
        </a>
    </li>

    <li class="sidebar-item @yield('akademik')">
        <a href="#" class='sidebar-link'>
            <i class="fa-solid fa-scroll"></i>
            <span>Akademik</span>
        </a>
    </li>

    {{-- <li class="sidebar-item @yield('penilaian')">
        <a href="{{ route('operate.penilaian_index') }}" class='sidebar-link'>
    <i class="bi bi-file-earmark-person"></i>
    <span>Penilaian</span>
    </a>
    </li>

    <li class="sidebar-item @yield('hasil_seleksi')">
        <a href="" class='sidebar-link'>
            <i class="fa-solid fa-person-circle-check"></i>
            <span>Hasil Seleksi</span>
        </a>
    </li> --}}

    <li class="sidebar-item ">
        <a href="#" class='sidebar-link'>
            <i class="bi bi-power"></i>
            <span>LogOut</span>
        </a>
    </li>

</ul>