<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ACme</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
<header>
    <?php echo $__env->make('inc.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</header>
<main>
    <div class="container">
        <?php if(Request::is('/')): ?>
        <?php echo $__env->make('inc.showcase', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
        <div class="row">
            <div class="col-md-8">
                <?php echo $__env->make('inc.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->yieldContent('content'); ?>
            </div>
            <div class="col-md-4"><?php echo $__env->make('inc.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
        </div>
    </div>
</main>
<footer class="text-center">
    <p>Copyright 2017 &copy; Acme</p>
</footer>
</body>
</html>
<?php /**PATH F:\Program Files\Ampps\www\basicwebsite\resources\views/layout/app.blade.php ENDPATH**/ ?>