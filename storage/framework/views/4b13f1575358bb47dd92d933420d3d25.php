<nav class="navbar navbar-expand-lg bg-dark border-bottom border-bottom-dark ticky-top bg-body-tertiary"
data-bs-theme="dark">
<div class="container">
    <a class="navbar-brand fw-light" href="/"><span class="fas fa-brain me-1"> </span><?php echo e(config('app.name')); ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
            <?php if(auth()->guard()->guest()): ?>
                <li class="nav-item">
                    <a class="<?php echo e(Route::is('login') ? 'active' : ''); ?> nav-link" aria-current="page" href="<?php echo e(route('login')); ?>">Login</a>
                </li>
                <li class="nav-item">
                    <a class="<?php echo e((Route::is('register')) ? 'active' : ''); ?> nav-link" href="<?php echo e(route('register')); ?>">Register</a>
                </li>
            <?php endif; ?>
            <?php if(auth()->guard()->check()): ?>
                <li class="nav-item">
                    <a class="<?php echo e((Route::is('profile')) ? 'active' : ''); ?> nav-link" href="<?php echo e(route('profile')); ?>"><?php echo e(Auth::user()->name); ?> </a>
                </li>
                <li class="nav-item">
                    <form action="<?php echo e(route('logout')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <Button class="btn btn-danger btn-sm mt-1" type="submit"> Logout</Button>
                    </form>
                </li>
            <?php endif; ?>

        </ul>
    </div>
</div>
</nav>
<?php /**PATH C:\Users\user\OneDrive\Desktop\Laravel\ideas\resources\views\layout\nav.blade.php ENDPATH**/ ?>