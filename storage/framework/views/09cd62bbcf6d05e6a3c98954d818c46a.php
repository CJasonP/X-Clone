<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
    <div class="col-12 col-sm-8 col-md-6">
        <form class="form mt-5" action="<?php echo e(route('register')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <h3 class="text-center text-dark">Register</h3>
            <div class="form-group">
                <label for="name" class="text-dark">Name:</label><br>
                <input type="text" name="name" id="name" class="form-control">
                <?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class='d-block fs-6 text-danger mt-2'><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="form-group mt-3">
                <label for="email" class="text-dark">Email:</label><br>
                <input type="email" name="email" id="email" class="form-control">
            </div>
            <div class="form-group mt-3">
                <label for="password" class="text-dark">Password:</label><br>
                <input type="password" name="password" id="password" class="form-control">
            </div>
            <div class="form-group mt-3">
                <label for="confirm-password" class="text-dark">Confirm Password:</label><br>
                <input type="password" name="password_confirmation" id="confirm-password" class="form-control">
            </div>
            <div class="form-group">
                <label for="remember-me" class="text-dark"></label><br>
                <input type="submit" name="submit" class="btn btn-dark btn-md" value="submit">
            </div>
            <div class="text-right mt-2">
                <a href="/login" class="text-dark">Login here</a>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\OneDrive\Desktop\Laravel\ideas\resources\views\auth\register.blade.php ENDPATH**/ ?>