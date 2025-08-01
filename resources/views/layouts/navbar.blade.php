<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm p-3 mb-4 rounded">
    <div class="container-fluid d-flex justify-content-between align-items-center">
        <div>
            <a class="navbar-brand fw-bold text-primary" href="{{ route('dashboard') }}">University Management</a>
        </div>
        <div class="d-flex align-items-center">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex flex-row gap-3">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('students.index') }}">Students</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('doctors.index') }}">Doctors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('courses.index') }}">Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('departments.index') }}">Departments</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('employees.index') }}">Employees</a>
                </li>
            </ul>

            {{-- اسم المستخدم وزر تسجيل الخروج --}}
            @auth
                <div class="ms-4">
                    <span class="me-3 fw-semibold">{{ Auth::user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn btn-outline-danger btn-sm">Logout</button>
                    </form>
                </div>
            @endauth
        </div>
    </div>
</nav>
