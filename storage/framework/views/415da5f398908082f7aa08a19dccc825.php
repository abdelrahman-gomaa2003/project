<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar-center {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        }
    </style>
</head>
<body>
    
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark position-relative">
        <div class="container position-relative justify-content-center">
            <div class="navbar-center">
                <ul class="navbar-nav d-flex flex-row gap-3">
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(route('dashboard')); ?>">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(route('students.index')); ?>">Students</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(route('departments.index')); ?>">Departments</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(route('courses.index')); ?>">Courses</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(route('doctors.index')); ?>">Doctors</a></li>
                </ul>
            </div>

            <?php if(auth()->guard()->check()): ?>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        <?php echo e(Auth::user()->name); ?>

                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <form method="POST" action="<?php echo e(route('logout')); ?>">
                                <?php echo csrf_field(); ?>
                                <button class="dropdown-item" type="submit">Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
            <?php endif; ?>
        </div>
    </nav>

    
    <div class="container mt-5 pt-4">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\university-management\university-management\resources\views/layouts/app.blade.php ENDPATH**/ ?>