<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-3">
        <?php echo $__env->make('shared.left-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <div class="col-6">
        <h1>Terms</h1>
        <div>
            Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more
            obscure Latin
            words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical
            literature,
            discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus
            Bonorum et
            Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory
            of
            ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..",
            comes
            from a line in section 1.10.32.
        </div>
    </div>
    <div class="col-3">
        <?php echo $__env->make('shared.search-bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('shared.follow-box', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\OneDrive\Desktop\Laravel\ideas\resources\views\terms.blade.php ENDPATH**/ ?>