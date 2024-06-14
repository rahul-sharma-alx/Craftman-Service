<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Images</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            display: flex;
            transition: background-color 0.3s, color 0.3s; /* Smooth transition for night mode */
        }
        body.night-mode {
            background-color: #121212;
            color: #ffffff;
        }
        body.night-mode .card, body.night-mode .sidebar, body.night-mode .navbar, body.night-mode .btn {
            background-color: #343a40;
            color: #ffffff;
        }
        .sidebar {
            width: 250px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: -250px; /* Hide sidebar initially */
            background: #343a40;
            padding-top: 60px;
            display: flex;
            flex-direction: column;
            transition: left 0.3s ease-in-out; /* Smooth transition */
        }
        .sidebar a {
            color: #fff;
            padding: 15px;
            text-decoration: none;
            display: block;
        }
        .sidebar a:hover {
            background: #495057;
        }
        .main-content {
            margin-left: 0;
            padding: 20px;
            width: 100%;
            transition: margin-left 0.3s ease-in-out; /* Smooth transition */
        }
        .main-content.expanded {
            margin-left: 250px;
        }
        .card {
            position: relative;
        }
        .more-content {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            z-index: 5;
            background: rgba(255, 255, 255, 0.9); /* Semi-transparent background */
            border: none; /* Remove border */
            padding: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
                left: 0;
            }
            .main-content {
                margin-left: 0;
                width: 100%;
            }
            .main-content.expanded {
                margin-left: 0;
            }
        }
        .btn-outline-light {
            border: none; /* Remove border */
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">Craftman Service</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
        <button class="btn btn-outline-light" id="sidebarToggle"><i class="fa-solid fa-bars"></i></button>
        <button class="btn btn-outline-light ml-2" id="toggleNightMode"><i class="fa-solid fa-moon" id="nightModeIcon"></i></button>
    </nav>

    <!-- Sidebar -->
    <div class="sidebar bg-dark" id="sidebar">
        <a href="#">Dashboard</a>
        <a href="#">Services</a>
        <a href="#">Craftmen</a>
        <a href="#">Settings</a>
    </div>

    <!-- Main content -->
    <div class="main-content" id="mainContent">
        <div class="container mt-4">
            <div class="row">
                @foreach ($Craftman as $cftman)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ $cftman->image }}" class="card-img-top" alt="{{ $cftman->name }}">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h5 class="card-title">{{ $cftman->name }}</h5>
                                <h5 class="card-para"> Per Day Fee: {{$cftman->fee}}</h5>
                            </div>
                            <p class="card-text description" id="desc-{{ $cftman->id }}">
                                {{ \Illuminate\Support\Str::limit($cftman->description, 100) }}
                            </p>
                            <button class="btn btn-primary see-more" data-id="{{ $cftman->id }}">
                                See More
                            </button>
                            <div class="more-content" id="more-{{ $cftman->id }}">
                                <p>{{ substr($cftman->description, 100) }}</p>
                                <button class="btn btn-secondary see-less" data-id="{{ $cftman->id }}">See Less</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Custom Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sidebar = document.getElementById('sidebar');
            const mainContent = document.getElementById('mainContent');
            const sidebarToggle = document.getElementById('sidebarToggle');
            const nightModeToggle = document.getElementById('toggleNightMode');
            const nightModeIcon = document.getElementById('nightModeIcon');

            sidebarToggle.addEventListener('click', function() {
                sidebar.style.left = sidebar.style.left === '0px' ? '-250px' : '0';
                mainContent.classList.toggle('expanded');
            });

            nightModeToggle.addEventListener('click', function() {
                document.body.classList.toggle('night-mode');
                nightModeIcon.classList.toggle('fa-moon');
                nightModeIcon.classList.toggle('fa-sun');
            });

            document.querySelectorAll('.see-more').forEach(button => {
                button.addEventListener('click', function() {
                    const itemId = this.getAttribute('data-id');
                    const moreContent = document.getElementById('more-' + itemId);
                    moreContent.style.display = 'block';
                    this.style.display = 'none';
                });
            });

            document.querySelectorAll('.see-less').forEach(button => {
                button.addEventListener('click', function() {
                    const itemId = this.getAttribute('data-id');
                    const moreContent = document.getElementById('more-' + itemId);
                    moreContent.style.display = 'none';
                    document.querySelector('.see-more[data-id="' + itemId + '"]').style.display = 'block';
                });
            });
        });
    </script>
</body>
</html>
