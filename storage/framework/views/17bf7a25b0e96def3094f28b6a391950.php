<?php if(auth()->guard()->check()): ?>
<h4> Share yours ideas </h4>
<div class="row">
    <form action="<?php echo e(route('ideas.store')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <textarea class="form-control" id="content" name="content" rows="3"></textarea>
            <?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class='d-block fs-6 text-danger mt-2'> <?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="">
            <button type="submit" class="btn btn-dark"> Share </button>
        </div>
    </form>
</div>
<?php endif; ?>
<?php if(auth()->guard()->guest()): ?>
    <h4>Login Share yours idea</h4>
<?php endif; ?>
<?php /**PATH C:\Users\user\OneDrive\Desktop\Laravel\ideas\resources\views/ideas/shared/submit-idea.blade.php ENDPATH**/ ?>