

<?php $__env->startSection('title', 'Edit Student'); ?>

<?php $__env->startSection('content'); ?>
<div class="container mt-4">
    <h2>Edit Student</h2>
    <form action="<?php echo e(route('students.update', $student->id)); ?>" method="POST">
        <?php echo csrf_field(); ?> <?php echo method_field('PUT'); ?>
        <?php echo $__env->make('students.form', ['student' => $student], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\university-management\university-management\resources\views/students/edit.blade.php ENDPATH**/ ?>