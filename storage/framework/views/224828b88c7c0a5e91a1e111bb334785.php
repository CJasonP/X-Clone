<div class="card">
    <div class="px-3 pt-4 pb-2">
        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <img style="width:50px" class="me-2 avatar-sm rounded-circle"
                    src="<?php echo e($idea->user->getImageURL()); ?>"
                    alt="<?php echo e($idea->user->name); ?>">
                <div>
                    <h5 class="card-title mb-0"><a href="<?php echo e(route('users.show',$idea->user->id)); ?>"> <?php echo e($idea->user->name); ?>

                        </a></h5>
                </div>
            </div>
            <div>
                <form method="POST" action="<?php echo e(route('ideas.destroy',$idea->id)); ?>">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('delete'); ?>
                    <a class ="mx-2" href="<?php echo e(route('ideas.edit',$idea->id)); ?> "> Edit </a>
                    <a href="<?php echo e(route('ideas.show',$idea->id)); ?> "> View </a>
                    <button class="ms-1 btn btn-danger btn-sm"> X </button>
                </form>
            </div>
        </div>
    </div>
    <div class="card-body">
        <?php if($editing ?? false): ?>
            <form action="<?php echo e(route('ideas.update', $idea->id)); ?>" method="post">
                <?php echo csrf_field(); ?>
                <?php echo method_field('put'); ?>
                <div class="mb-3">
                    <textarea name="content" class="form-control" id="content" rows="3"><?php echo e($idea->content); ?></textarea>
                    <?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class='d-block fs-6 text-danger mt-2'> <?php echo e($message); ?> </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="">
                    <button type="submit" class="btn btn-dark mb-2 btn-sm"> Update </button>
                </div>
            </form>
        <?php else: ?>
        <p class="fs-6 fw-light text-muted">
            <?php echo e($idea->content); ?>

        </p>
        <?php endif; ?>
        <div class="d-flex justify-content-between">
            <?php echo $__env->make('ideas.shared.like-button', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div>
                <span class="fs-6 fw-light text-muted"> <span class="fas fa-clock"> </span>
                    <?php echo e($idea->created_at); ?> </span>
            </div>
        </div>
        <?php echo $__env->make('shared.comment-box', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<?php /**PATH C:\Users\user\OneDrive\Desktop\Laravel\ideas\resources\views\ideas\shared\idea-card.blade.php ENDPATH**/ ?>