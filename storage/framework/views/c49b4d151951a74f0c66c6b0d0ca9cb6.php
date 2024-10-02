<div class="card overflow-hidden">
    <div class="card-body pt-3">
        <ul class="nav nav-link-secondary flex-column fw-bold gap-2">
            <li class="nav-item">
                <a class="<?php echo e((Route::is('dashboard')) ? 'text-white bg-primary rounded' : ''); ?> nav-link" href="<?php echo e(route('dashboard')); ?>">
                    <span>Home</span></a>
            </li>
            <li class="nav-item">
                <a class="<?php echo e((Route::is('feed')) ? 'text-white bg-primary rounded' : ''); ?> nav-link" href="<?php echo e(route('feed')); ?>">
                    <span>Feed</span></a>
            </li>
            <li class="nav-item">
                <a class="<?php echo e((Route::is('terms')) ? 'text-white bg-primary rounded' : ''); ?> nav-link" href="<?php echo e(route('terms')); ?>">
                    <span>Terms</span></a>
            </li>
        </ul>
    </div>
    <div class="card-footer text-center py-2">
        <a class="btn btn-link btn-sm" href="<?php echo e(route('dashboard')); ?>">View Profile </a>
    </div>
</div>
<?php /**PATH C:\Users\user\OneDrive\Desktop\Laravel\ideas\resources\views\shared\left-sidebar.blade.php ENDPATH**/ ?>