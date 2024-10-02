<div>
    <?php if(auth()->guard()->check()): ?>
        <form action="<?php echo e(route('ideas.comments.store', $idea->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <textarea name="content" class="fs-6 form-control" rows="1"></textarea>
            </div>
            <div>
                <button type="submit" class="btn btn-primary btn-sm"> Post Comment </button>
            </div>
        </form>
    <?php endif; ?>
    <hr>
    <?php $__empty_1 = true; $__currentLoopData = $idea->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="d-flex align-items-start">
            <img style="width:35px" class="me-2 avatar-sm rounded-circle" src="<?php echo e($comment->user->getImageURL()); ?>"
                alt="<?php echo e($comment->user->name); ?>">
            <div class="w-100">
                <div class="d-flex justify-content-between">
                    <h6 class=""> <?php echo e($comment->user->name); ?></h6>
                    <small class="fs-6 fw-light text-muted"> <?php echo e($comment->created_at); ?></small>
                </div>
                <p class="fs-6 mt-3 fw-light">
                    <?php echo e($comment->content); ?>

                </p>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <p class="text-center mt-4">No comments found. </p>
<?php endif; ?>
</div>
<?php /**PATH C:\Users\user\OneDrive\Desktop\Laravel\ideas\resources\views\shared\comment-box.blade.php ENDPATH**/ ?>