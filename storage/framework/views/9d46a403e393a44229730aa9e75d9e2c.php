

<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>All Doctors</h2>

    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <a href="<?php echo e(route('doctors.create')); ?>" class="btn btn-success mb-3">Add Doctor</a>

    <table class="table">
        <thead>
            <tr>
                <th>Name</th><th>Email</th><th>Phone</th><th>Department</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($doctor->name); ?></td>
                    <td><?php echo e($doctor->email); ?></td>
                    <td><?php echo e($doctor->phone); ?></td>
                    <td><?php echo e($doctor->department->name ?? 'N/A'); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\university-management\university-management\resources\views/doctors/index.blade.php ENDPATH**/ ?>