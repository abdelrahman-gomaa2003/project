

<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <h1>Welcome, Employee <?php echo e(auth()->user()->name); ?></h1>
    <a href="<?php echo e(route('logout')); ?>" class="btn btn-danger">Logout</a>
</div>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('title', 'Employee Dashboard'); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Welcome, <?php echo e(Auth::user()->name); ?>!</h3>
            <p class="card-text">You are logged in as an employee.</p>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\university-management\university-management\resources\views/employee/dashboard.blade.php ENDPATH**/ ?>