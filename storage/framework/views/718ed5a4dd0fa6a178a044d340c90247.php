<div class="mb-3">
    <label>Name</label>
    <input type="text" name="name" class="form-control" value="<?php echo e(old('name', $student->name ?? '')); ?>">
</div>
<div class="mb-3">
    <label>Email</label>
    <input type="email" name="email" class="form-control" value="<?php echo e(old('email', $student->email ?? '')); ?>">
</div>
<div class="mb-3">
    <label>Phone</label>
    <input type="text" name="phone" class="form-control" value="<?php echo e(old('phone', $student->phone ?? '')); ?>">
</div>
<div class="mb-3">
    <label>Address</label>
    <input type="text" name="address" class="form-control" value="<?php echo e(old('address', $student->address ?? '')); ?>">
</div>
<?php /**PATH C:\xampp\htdocs\university-management\university-management\resources\views/students/form.blade.php ENDPATH**/ ?>