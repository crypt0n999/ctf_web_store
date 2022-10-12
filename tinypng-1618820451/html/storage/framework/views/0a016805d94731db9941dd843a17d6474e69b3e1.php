<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>TinyPng</h1>
<h2>input your png file path that you want to compress</h2>

<form action="<?php echo e(route('image.handle')); ?>" method="post">
    <input type="text" name="image">
    <input type="submit">
</form>
<?php if($filePath = Session::get('image_name')): ?>
    <p>Your file store at: <?php echo e($filePath); ?>}</p>
<?php endif; ?>

<?php if(count($errors) > 0): ?>
    <h2>
        <strong>Whoops!</strong> There were some problems with your input.
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </h2>
<?php endif; ?>
</body>
</html>
<?php /**PATH /Users/spencer/Sites/CTF/tinypng-1618820451/html/resources/views/image.blade.php ENDPATH**/ ?>