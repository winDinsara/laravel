<?php if(session('success')): ?>
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4 shadow-md" role="alert">
        <strong class="font-bold">Success!</strong>
        <span class="block sm:inline"><?php echo e(session('success')); ?></span>
    </div>
<?php endif; ?>




<?php $__env->startSection('content'); ?>
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Welcome, <?php echo e(Auth::user()->name); ?>!
    </h2>

    <div class="py-12 max-w-3xl mx-auto text-center">
        <h1 class="text-3xl font-bold mb-4">Hello, <?php echo e(Auth::user()->name); ?> 👋</h1>
        <p class="mb-6">You have successfully logged in to your Laravel application.</p>
    </div>

    
    <?php if(session('login_success') || session('register_success')): ?>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: '<?php echo e(session("login_success") ?? session("register_success")); ?>',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
            });
        </script>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laravel-auth-app\project-app\resources\views/dashboard.blade.php ENDPATH**/ ?>