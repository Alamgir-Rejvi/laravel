<!DOCTYPE html>
<html>
<head>
    <title>Students List</title>
</head>
<body>
    <h1>All Students</h1>
    <a href="<?php echo e(route('students.create')); ?>">+ Add New Student</a>

    <?php if(session('success')): ?>
        <p style="color: green;"><?php echo e(session('success')); ?></p>
    <?php endif; ?>

    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Subjects</th>
        </tr>

        <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($student->id); ?></td>
            <td><?php echo e($student->first_name); ?> <?php echo e($student->last_name); ?></td>
            <td>
                <?php $__currentLoopData = $student->subjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($sub->name); ?> (<?php echo e($sub->code); ?>)<br>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\laravel\laearning_in_class\exam_many_to_many\resources\views/students/index.blade.php ENDPATH**/ ?>