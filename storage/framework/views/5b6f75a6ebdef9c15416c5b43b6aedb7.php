<div class="card">
    <div class="px-3 pt-4 pb-2">
        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <img style="width:150px" class="me-3 avatar-sm rounded-circle" src="<?php echo e($user->getImageURL()); ?>"
                    alt="Mario Avatar">
                <div>
                    <h3 class="card-title mb-0"><a href="#"> <?php echo e($user->name); ?>

                        </a></h3>
                    <span class="fs-6 text-muted"><?php echo e($user->email); ?> </span>
                </div>
            </div>
            <div>
                <?php if(auth()->guard()->check()): ?>
                    <?php if(Auth::id() === $user->id): ?>
                        <a href="<?php echo e(route('users.edit', $user->id)); ?>"> Edit</a>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="px-2 mt-4">
            <h5 class="fs-5"> Bio : </h5>
            <p class="fs-6 fw-light">
                <?php echo e($user->bio); ?>

            </p>
            <?php echo $__env->make('users.shared.user-stats', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php if(auth()->guard()->check()): ?>
                <?php if(Auth::id() !== $user->id): ?>
                    <div class="mt-3">
                        <?php if(Auth::user()->follows($user)): ?>
                            <form method="POST" action="<?php echo e(route('users.unfollow', $user->id)); ?>">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="btn btn-danger btn-sm"> UnFollow </button>
                            </form>
                        <?php else: ?>
                            <form method="POST" action="<?php echo e(route('users.follow', $user->id)); ?>">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="btn btn-primary btn-sm"> Follow </button>
                            </form>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\user\OneDrive\Desktop\Laravel\ideas\resources\views\users\shared\user-card.blade.php ENDPATH**/ ?>