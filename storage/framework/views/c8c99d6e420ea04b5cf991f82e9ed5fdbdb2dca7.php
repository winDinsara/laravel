<!DOCTYPE html>
<link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet" />

<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>My Laravel App</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-br from-gray-100 via-blue-50 to-blue-100 min-h-screen flex flex-col">

    <!-- Navbar -->
    <nav class="bg-purple-600 shadow-lg">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center text-white">
            <a href="<?php echo e(route('dashboard')); ?>" class="text-2xl font-bold hover:text-blue-200 transition">
                My Laravel App
            </a>
            <div class="flex items-center space-x-4">
                <?php if(auth()->guard()->check()): ?>
                    <span class="text-sm">Hello, <strong><?php echo e(Auth::user()->name); ?></strong></span>
                    <form method="POST" action="<?php echo e(route('logout')); ?>">
                        <?php echo csrf_field(); ?>
                        <a href="<?php echo e(route('account.edit')); ?>" class="bg-blue-600 text-white px-2 py-2 rounded hover:bg-blue-700 transition">Manage Account</a>
                        <button type="submit" class="bg-red-500 hover:bg-red-600 px-4 py-2 rounded text-sm">
                            Logout
                        </button>
                    </form>
                <?php else: ?>
                    <a href="<?php echo e(route('login')); ?>" class="hover:underline">Login</a>
                    <a href="<?php echo e(route('register.form')); ?>" class="hover:underline">Register</a>
                <?php endif; ?>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-12 flex-grow">
        <div class="bg-white bg-opacity-90 backdrop-blur-md rounded-xl shadow-2xl p-8">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-purple-600 text-white text-center py-4 text-sm shadow-inner">
        &copy; <?php echo e(date('Y')); ?> My Laravel App. All rights reserved.
    </footer>

</body>
</html>
<?php /**PATH E:\laravel-auth-app\project-app\resources\views/layout.blade.php ENDPATH**/ ?>