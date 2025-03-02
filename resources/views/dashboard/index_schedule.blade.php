<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>

<body>
    <div class="container-fluid d-flex flex-column p-0 vh-100">
        @include('template.navbar_schedule')
        <div class="d-flex justify-content-between align-items-center p-3">
            <div class="container-fluid d-flex flex-row justify-content-between">
                <button class="btn border-secondary next-table" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">&lt;</button>
                <button class="btn border-secondary next-table" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">&gt;</button>
            </div>
        </div>

        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active bg-black"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2" class="bg-black"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3" class="bg-black"></button>
            </div>
            <div class="carousel-inner p-4">
                <div class="carousel-item active bg-white shadow rounded-4 p-3">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center">No</th>
                                    <th scope="col" class="text-center">Customer</th>
                                    <th scope="col" class="text-center">Dock</th>
                                    <th scope="col" class="text-center">Cycle</th>
                                    <th scope="col" class="text-center">Departures</th>
                                    <th scope="col" class="text-center">Appointment Date & Time</th>
                                    <th scope="col" class="text-center">Status</th>
                                    <th scope="col" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="text-center">TMMIN</td>
                                    <td class="text-center">53</td>
                                    <td class="text-center">20</td>
                                    <td class="text-center">09.00</td>
                                    <td class="text-center">13/08/2025</td>
                                    <td class="text-center">
                                        <span class="badge bg-success">Preparing</span> |
                                        <span class="badge bg-danger">On Time</span>
                                    </td>
                                    <td class="text-center">
                                        <button class="btn border-secondary">
                                            <span class="material-symbols-outlined">print</span>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="text-center">TMMIN</td>
                                    <td class="text-center">53</td>
                                    <td class="text-center">20</td>
                                    <td class="text-center">09.00</td>
                                    <td class="text-center">13/08/2025</td>
                                    <td class="text-center">
                                        <span class="badge bg-success">Preparing</span> |
                                        <span class="badge bg-danger">On Time</span>
                                    </td>
                                    <td class="text-center">
                                        <button class="btn border-secondary">
                                            <span class="material-symbols-outlined">print</span>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="text-center">TMMIN</td>
                                    <td class="text-center">53</td>
                                    <td class="text-center">20</td>
                                    <td class="text-center">09.00</td>
                                    <td class="text-center">13/08/2025</td>
                                    <td class="text-center">
                                        <span class="badge bg-success">Preparing</span> |
                                        <span class="badge bg-danger">On Time</span>
                                    </td>
                                    <td class="text-center">
                                        <button class="btn border-secondary">
                                            <span class="material-symbols-outlined">print</span>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="carousel-item bg-white shadow rounded-4 p-3">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center">No</th>
                                    <th scope="col" class="text-center">Customer</th>
                                    <th scope="col" class="text-center">Dock</th>
                                    <th scope="col" class="text-center">Cycle</th>
                                    <th scope="col" class="text-center">Departures</th>
                                    <th scope="col" class="text-center">Appointment Date & Time</th>
                                    <th scope="col" class="text-center">Status</th>
                                    <th scope="col" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td class="text-center">XYZ</td>
                                    <td class="text-center">60</td>
                                    <td class="text-center">15</td>
                                    <td class="text-center">10.30</td>
                                    <td class="text-center">14/08/2025</td>
                                    <td class="text-center">
                                        <span class="badge bg-warning">Pending</span>
                                    </td>
                                    <td class="text-center">
                                        <button class="btn border-secondary">
                                            <span class="material-symbols-outlined">print</span>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="text-center">TMMIN</td>
                                    <td class="text-center">53</td>
                                    <td class="text-center">20</td>
                                    <td class="text-center">09.00</td>
                                    <td class="text-center">13/08/2025</td>
                                    <td class="text-center">
                                        <span class="badge bg-success">Preparing</span> |
                                        <span class="badge bg-danger">On Time</span>
                                    </td>
                                    <td class="text-center">
                                        <button class="btn border-secondary">
                                            <span class="material-symbols-outlined">print</span>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="carousel-item bg-white shadow rounded-4 p-3">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center">No</th>
                                    <th scope="col" class="text-center">Customer</th>
                                    <th scope="col" class="text-center">Dock</th>
                                    <th scope="col" class="text-center">Cycle</th>
                                    <th scope="col" class="text-center">Departures</th>
                                    <th scope="col" class="text-center">Appointment Date & Time</th>
                                    <th scope="col" class="text-center">Status</th>
                                    <th scope="col" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td class="text-center">XYZ</td>
                                    <td class="text-center">60</td>
                                    <td class="text-center">15</td>
                                    <td class="text-center">10.30</td>
                                    <td class="text-center">14/08/2025</td>
                                    <td class="text-center">
                                        <span class="badge bg-warning">Pending</span>
                                    </td>
                                    <td class="text-center">
                                        <button class="btn border-secondary">
                                            <span class="material-symbols-outlined">print</span>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="text-center">TMMIN</td>
                                    <td class="text-center">53</td>
                                    <td class="text-center">20</td>
                                    <td class="text-center">09.00</td>
                                    <td class="text-center">13/08/2025</td>
                                    <td class="text-center">
                                        <span class="badge bg-success">Preparing</span> |
                                        <span class="badge bg-danger">On Time</span>
                                    </td>
                                    <td class="text-center">
                                        <button class="btn border-secondary">
                                            <span class="material-symbols-outlined">print</span>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>