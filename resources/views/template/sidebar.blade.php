<!-- Sidebar -->
<aside class="sidebar d-flex flex-column justify-content-center align-items-center p-2">
    <div class="text-center mb-4">
        <h1 class="fs-5 fw-bold">DASHBOARD<br>AUTO DN</h1>
        <img src="{{ asset('img/LogoApi.png') }}" alt="logo api">
    </div>
    <nav class="nav flex-column">
        <a href="{{ route('schedule') }}" class="nav-link d-flex align-items-center py-2 px-3 border rounded-1 mb-2">
            <span class="material-symbols-outlined">edit_calendar</span>
            <span class="menu-text">Schedule</span>
        </a>
        <a href="#" class="nav-link d-flex align-items-center py-2 px-3 border rounded-1 mb-2">
            <span class="material-symbols-outlined">monitoring</span>
            <span class="menu-text">Performance</span>
        </a>
        <a href="#" class="nav-link d-flex align-items-center py-2 px-3 border rounded-1 mb-2">
            <span class="material-symbols-outlined">description</span>
            <span class="menu-text">Document</span>
        </a>
        <a href="#" class="nav-link d-flex align-items-center py-2 px-3 border rounded-1">
            <span class="material-symbols-outlined">work_history</span>
            <span class="menu-text">History</span>
        </a>
    </nav>
    <div class="mt-auto text-center small">&copy; 2025 AUTO DN API</div>
</aside>