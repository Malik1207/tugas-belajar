<?php $__env->startSection('content'); ?>

<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<form action="<?php echo e(route('costumers.store')); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>

     <div class="my-3">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong style="color: black">Name:</strong>
                <input type="text" name="name" class="form-control my-1" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong style="color: black">Image:</strong>
                <input type="file" name="image" class="form-control my-1" placeholder="image">
            </div>
        </div>
        <div class="mx-3">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a class="btn btn-success" href="<?php echo e(route('costumers.index')); ?>"> Back</a>
        </div>
        
    </div>

</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('..dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abdmalik/Laravel/landing_page/resources/views/costumers/create.blade.php ENDPATH**/ ?>