<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Welcome</title>
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet" />
</head>
<body class="welcome-page">
    <div class="container">
        <h1>Welcome to Laravel Auth App</h1>
        <div class="buttons">
            <a href="<?php echo e(route('login')); ?>" class="btn btn-login">Login</a>
            <a href="<?php echo e(route('register')); ?>" class="btn btn-register">Register</a>
        </div>
    </div>
</body>
</html>
<?php /**PATH E:\laravel-auth-app\project-app\resources\views/welcome.blade.php ENDPATH**/ ?>