<?php if(session()->has('success')): ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <?php echo e(session('success')); ?>

    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php endif; ?>
<?php /**PATH C:\Users\user\OneDrive\Desktop\Laravel\ideas\resources\views\shared\success-message.blade.php ENDPATH**/ ?>