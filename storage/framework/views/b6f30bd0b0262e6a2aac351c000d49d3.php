

<?php $__env->startSection('title', 'Students'); ?>

<?php $__env->startSection('content'); ?>
<div class="container mt-4">
    <h2>Students List</h2>
    <a href="<?php echo e(route('students.create')); ?>" class="btn btn-primary mb-3">Add Student</a>

    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th><th>Email</th><th>Phone</th><th>Address</th><th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($student->name); ?></td><td><?php echo e($student->email); ?></td><td><?php echo e($student->phone); ?></td><td><?php echo e($student->address); ?></td>
                <td>
                    <a href="<?php echo e(route('students.edit', $student->id)); ?>" class="btn btn-warning btn-sm">Edit</a>
                    <form action="<?php echo e(route('students.destroy', $student->id)); ?>" method="POST" style="display:inline-block;">
                        <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Delete this student?')">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\university-management\university-management\resources\views/students/index.blade.php ENDPATH**/ ?>