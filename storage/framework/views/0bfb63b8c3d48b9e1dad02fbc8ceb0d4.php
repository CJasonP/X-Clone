<div class="card">
    <div class="px-3 pt-4 pb-2">
        <form enctype="multipart/form-data" method="POST" action="<?php echo e(route('users.update',$user->id)); ?>">
            <?php echo csrf_field(); ?>
            <?php echo method_field('put'); ?>
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <img style="width:150px" class="me-3 avatar-sm rounded-circle"
                        src="<?php echo e($user->getImageURL()); ?>" alt="Mario Avatar">
                    <div>
                        <input name="name" value="<?php echo e($user->name); ?>" type="text" class="form-control">
                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger fs-6"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div>
                    <?php if(auth()->guard()->check()): ?>
                        <?php if(Auth::id() === $user->id): ?>
                            <a href="<?php echo e(route('users.show', $user->id)); ?>"> View</a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="mt-4">
                <label for="">Profile Picture</label>
                <input name="image" class="form-control" type="file">
                <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-danger fs-6"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="px-2 mt-4">
                <h5 class="fs-5"> Bio : </h5>
                <div class="mb-3">
                    <textarea name="bio" class="form-control" id="bio" rows="3"> <?php echo e($user->bio); ?> </textarea>
                    <?php $__errorArgs = ['bio'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="d-block fs-6 text-danger mt-2"> <?php echo e($message); ?> </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <button class="btn btn-dark btn-sm mb-3 ">Save</button>
                <?php echo $__env->make('users.shared.user-stats', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </form>
    </div>
</div>
<?php /**PATH C:\Users\user\OneDrive\Desktop\Laravel\ideas\resources\views\users\shared\user-edit-card.blade.php ENDPATH**/ ?>