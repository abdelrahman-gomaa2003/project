

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Courses</h1>
        <a href="<?php echo e(route('courses.create')); ?>" class="btn btn-primary mb-3">Add Course</a>

        <?php if(session('success')): ?>
            <div class="alert alert-success"><?php echo e(session('success')); ?></div>
        <?php endif; ?>

        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Code</th>
                    <th>Hours</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($course->name); ?></td>
                        <td><?php echo e($course->code); ?></td>
                        <td><?php echo e($course->hours); ?></td>
                        <td>
                            <a href="<?php echo e(route('courses.edit', $course)); ?>" class="btn btn-warning btn-sm">Edit</a>
                            <form action="<?php echo e(route('courses.destroy', $course)); ?>" method="POST" class="d-inline">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\university-management\university-management\resources\views/courses/index.blade.php ENDPATH**/ ?>