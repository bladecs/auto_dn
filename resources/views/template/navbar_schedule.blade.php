<!-- Navbar -->
<nav class="container-fluid bg-white py-3 px-3 shadow d-flex flex-row justify-content-between">
    <button class="btn border-0 d-flex justify-content-center" id="toggleSidebar">
        <span class="material-symbols-outlined">menu</span>
    </button>
    <div class="filter d-flex flex-wrap gap-3">
        <div class="box">
            <select name="dock" id="dock" class="form-select">
                <option value="disable">Disable</option>
                <option value="option_1">Option 1</option>
                <option value="option_2">Option 2</option>
            </select>
        </div>
        <div class="box">
            <input type="date" name="date" id="date" class="form-control">
        </div>
        <a href="{{ route('dashboard') }}" class="me-4">
            <img src="{{ asset('img/LogoApi.png') }}" alt="Logo API" style="width:3rem;">
        </a>
    </div>
</nav>