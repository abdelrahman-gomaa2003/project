

<?php $__env->startSection('content'); ?>
    <h2>Add New Department</h2>

    <form action="<?php echo e(route('departments.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <div class="mb-3">
            <label for="name" class="form-label">Department Name</label>
            <input type="text" class="form-control" name="name" required>
        </div>

        <div class="mb-3">
            <label for="faculty" class="form-label">Faculty</label>
            <input type="text" class="form-control" name="faculty" required>
        </div>

        <button type="submit" class="btn btn-success">Save</button>
        <a href="<?php echo e(route('departments.index')); ?>" class="btn btn-secondary">Back</a>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\university-management\university-management\resources\views/departments/create.blade.php ENDPATH**/ ?>