

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Add Course</h1>

        <form method="POST" action="<?php echo e(route('courses.store')); ?>">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Code</label>
                <input type="text" name="code" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Hours</label>
                <input type="number" name="hours" class="form-control" required>
            </div>
            <button class="btn btn-success">Save</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\university-management\university-management\resources\views/courses/create.blade.php ENDPATH**/ ?>