<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <style>
        .manifest-header {
            font-weight: bold;
            background-color: #007bff;
            color: white;
            padding: 10px;
            margin-top: 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .manifest-header:hover {
            background-color: #0056b3;
        }

        .material-table {
            display: none;
            margin-top: 10px;
        }

        .material-row {
            cursor: pointer;
        }

        .material-details {
            display: none;
            background-color: #f8f9fa;
            padding: 10px;
            border: 1px solid #ddd;
            margin-top: 5px;
        }
    </style>
</head>

<body>

    <div class="container-fluid d-flex flex-row m-0 p-0 ">
        @include('template.sidebar')
        <div class="navbar flex-grow-1 bg-black-50 d-flex flex-column align-items-start p-0">
            @include('template.navbar')
            <div class="content p-3 d-flex flex-grow-1 w-100 flex-column align-items-start gap-0 m-0 overflow-auto">
                <main class="container d-flex flex-column gap-3 px-0">
                    <div class="container d-flex flex-wrap flex-row gap-3 py-3 px-0">
                        <div class="card shadow border-0 col-3">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                <p class="card-text text-center ">Manifest</p>
                                <h1 class="card-text">1</h1>
                            </div>
                        </div>
                        <div class="card shadow border-0 col-3">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                <p class="card-text text-center ">Dock</p>
                                <h1 class="card-text">1</h1>
                            </div>
                        </div>
                        <div class="card shadow border-0 col-3">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                <p class="card-text text-center ">Cycle</p>
                                <h1 class="card-text">1</h1>
                            </div>
                        </div>
                    </div>
                    <div class="container py-3 px-0">
                        <div class="row g-3">
                            <div class="col-6 col-md-3">
                                <div class="card shadow border-0 bg-warning">
                                    <div class="card-body d-flex justify-content-between align-items-center">
                                        <p class="card-text fw-bold mb-0">On Progress</p>
                                        <h1 class="card-text p-3 shadow bg-white rounded-3 mb-0">1</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="card shadow border-0">
                                    <div class="card-body d-flex justify-content-between align-items-center">
                                        <p class="card-text fw-bold mb-0">Ready To Pick Up</p>
                                        <h1 class="card-text p-3 shadow bg-white rounded-3 mb-0">1</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="card shadow border-0 bg-danger text-white">
                                    <div class="card-body d-flex justify-content-between align-items-center">
                                        <p class="card-text fw-bold mb-0">Delay</p>
                                        <h1 class="card-text p-3 shadow bg-white rounded-3 text-dark mb-0">1</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="card shadow border-0 bg-success text-white">
                                    <div class="card-body d-flex justify-content-between align-items-center">
                                        <p class="card-text fw-bold mb-0">Close</p>
                                        <h1 class="card-text p-3 shadow bg-white rounded-3 text-dark mb-0">1</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <main class="container p-3 rounded-3 bg-white shadow">
                    <h1 class="text-center">TABLE MANIFEST TODAY</h1>
                    <table class="table table-strip">

                    </table>
                </main>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById("toggleSidebar").addEventListener("click", function () {
            document.querySelector(".sidebar").classList.toggle("active");
        });
    </script>
    <script>
        // Toggle tampil/tutup tabel material saat klik Manifest Header
        document.querySelectorAll('.manifest-header').forEach(header => {
            header.addEventListener('click', function () {
                const targetId = this.getAttribute('data-toggle');
                const targetTable = document.getElementById(targetId);
                if (targetTable) {
                    targetTable.style.display = targetTable.style.display === 'none' ? 'block' : 'none';
                }
            });
        });

        // Toggle tampil/tutup detail material saat klik baris material
        document.querySelectorAll('.material-row').forEach(row => {
            row.addEventListener('click', function () {
                const targetId = this.getAttribute('data-toggle');
                const targetDetail = document.getElementById(targetId);
                if (targetDetail) {
                    targetDetail.style.display = targetDetail.style.display === 'none' ? 'table-row' : 'none';
                }
            });
        });

        // Pastikan semua material-table & material-details diawali hidden
        document.querySelectorAll('.material-table, .material-details').forEach(el => {
            el.style.display = 'none';
        });
    </script>
</body>

</html>