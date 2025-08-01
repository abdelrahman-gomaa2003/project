<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard | University Management</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
        }
        .sidebar {
            height: 100vh;
            background-color: #343a40;
            color: white;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 12px 20px;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .dashboard-content {
            padding: 30px;
        }
        .card {
            border-radius: 15px;
        }
        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logout-form {
            margin: 0;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-2 sidebar d-flex flex-column">
            <h4 class="text-center mt-4 mb-4">University</h4>
            <a href="/dashboard">Dashboard</a>
            <a href="/departments">Departments</a>
            <a href="/students">Students</a>
            <a href="/doctors">Doctors</a>
            <a href="/courses">Courses</a>
            <a href="/employees">Employees</a>
        </div>

        <!-- Main Content -->
        <div class="col-md-10 dashboard-content">
            {{-- Top bar with heading and logout --}}
            <div class="top-bar mb-4">
                <h2>Dashboard</h2>
                <form method="POST" action="{{ route('logout') }}" class="logout-form">
                    @csrf
                    <button type="submit" class="btn btn-outline-danger">Logout</button>
                </form>
            </div>

            <div class="row">
                <!-- Total Students -->
                <div class="col-md-3 mb-4">
                    <div class="card bg-primary text-white text-center p-3">
                        <h5>Total Students</h5>
                        <h3>{{ $totalStudents }}</h3>
                    </div>
                </div>

                <!-- Total Departments -->
                <div class="col-md-3 mb-4">
                    <div class="card bg-success text-white text-center p-3">
                        <h5>Total Departments</h5>
                        <h3>{{ $totalDepartments }}</h3>
                    </div>
                </div>

                <!-- Total Courses -->
                <div class="col-md-3 mb-4">
                    <div class="card bg-info text-white text-center p-3">
                        <h5>Total Courses</h5>
                        <h3>{{ $totalCourses }}</h3>
                    </div>
                </div>

                <!-- Total Doctors -->
                <div class="col-md-3 mb-4">
                    <div class="card bg-warning text-white text-center p-3">
                        <h5>Total Doctors</h5>
                        <h3>{{ $totalDoctors }}</h3>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
