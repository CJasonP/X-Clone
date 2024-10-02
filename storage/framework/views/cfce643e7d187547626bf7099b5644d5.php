<div class="card">
    <div class="card-header pb-0 border-0">
        <h5 class="">Search</h5>
    </div>
    <div class="card-body">
        <form action="<?php echo e(route('dashboard')); ?>" method="GET">
            <input value="<?php echo e(request('search', '')); ?>" name="search" placeholder="...
                " class="form-control w-100" type="text"
                id="search">
            <button class="btn btn-dark mt-2"> Search</button>
        </form>
    </div>
</div>
<?php /**PATH C:\Users\user\OneDrive\Desktop\Laravel\ideas\resources\views/shared/search-bar.blade.php ENDPATH**/ ?>