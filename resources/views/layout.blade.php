<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Student Management System</title>

    <style>
        /* The side navigation menu */
        .sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            background-color: #f1f1f1;
            padding-top: 20px;
        }

        /* Sidebar links */
        .sidebar a {
            display: block;
            color: black;
            padding: 16px;
            text-decoration: none;
        }

        /* Active/current link */
        .sidebar a.active {
            background-color: #04AA6D;
            color: white;
        }

        /* Links on mouse-over */
        .sidebar a:hover:not(.active) {
            background-color: #555;
            color: white;
        }

        /* Page content */
        .content {
            margin-left: 260px; /* Adjust this margin based on sidebar width */
            padding: 20px;
            background-color: #a49a94;
            min-height: 100vh;
        }

        /* Responsive adjustments */
        @media screen and (max-width: 768px) {
            .sidebar {
                width: 100%;
                position: relative;
                height: auto;
            }
            .sidebar a {
                float: left;
            }
            .content {
                margin-left: 0;
            }
        }

        @media screen and (max-width: 400px) {
            .sidebar a {
                text-align: center;
                float: none;
            }
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <a class="active" href="#home">Home</a>
        <a href="{{ url('students') }}">Student</a>
        <a href="{{ url('teachers') }}">Teacher</a>
        <a href="{{ url('courses') }}">Courses</a>
        <a href="{{ url('batches') }}">Batches</a>
        <a href="{{ url('enrollments') }}">Enrollment</a>
        <a href="{{ url('payments') }}">Payment</a>
    </div>

    <!-- Content -->
    <div class="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"><h2>Student Management System</h2></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>

        <!-- Main content area -->
        <div class="container">
            @yield('content')
        </div>
    </div>

</body>
</html>
