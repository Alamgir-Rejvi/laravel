<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
</head>
<body>
    <h1>Add New Student</h1>

    <form action="<?php echo e(route('students.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <label>First Name:</label><br>
        <input type="text" name="first_name" required><br><br>

        <label>Last Name:</label><br>
        <input type="text" name="last_name" required><br><br>

        <label>Subjects:</label><br>
        <?php $__currentLoopData = $subjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subject): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <input type="checkbox" name="subjects[]" value="<?php echo e($subject->id); ?>">
            <?php echo e($subject->name); ?> (<?php echo e($subject->code); ?>) <br>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <br>
        <button type="submit">Save</button>
    </form>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\laravel\laearning_in_class\exam_many_to_many\resources\views/students/create.blade.php ENDPATH**/ ?>