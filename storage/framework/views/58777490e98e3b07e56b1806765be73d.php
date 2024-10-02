<div>
    <?php if(auth()->guard()->check()): ?>
        <?php if(Auth::user()->likesIdea($idea)): ?>
            <form action="<?php echo e(route('ideas.unlike', $idea->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <button type="submit" class="fw-light nav-link fs-6"> <span class="fas fa-heart me-1">
                    </span> <?php echo e($idea->likes()->count()); ?> </button>
            </form>
        <?php else: ?>
            <form action="<?php echo e(route('ideas.like', $idea->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <button type="submit" class="fw-light nav-link fs-6"> <span class="far fa-heart me-1">
                    </span> <?php echo e($idea->likes()->count()); ?> </button>
            </form>
        <?php endif; ?>
    <?php endif; ?>
    <?php if(auth()->guard()->guest()): ?>
        <a href="<?php echo e(route('login')); ?>" class="fw-light nav-link fs-6"> <span class="far fa-heart me-1">
            </span> <?php echo e($idea->likes()->count()); ?> </a>
    <?php endif; ?>
</div>
<?php /**PATH C:\Users\user\OneDrive\Desktop\Laravel\ideas\resources\views/ideas/shared/like-button.blade.php ENDPATH**/ ?>