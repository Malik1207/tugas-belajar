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

    <form action="<?php echo e(route('officers.update',$officer->id)); ?>" method="POST" enctype="multipart/form-data" class="my-3">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="my-3">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong style="color: black">Name:</strong>
                    <input type="text" name="name" value="<?php echo e($officer->name); ?>" class="form-control my-1" placeholder="name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong style="color: black">Position:</strong>
                    <textarea class="form-control my-1" style="height:150px" name="position" placeholder="position"><?php echo e($officer->position); ?></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong style="color: black">Biography:</strong>
                    <input type="text" name="biography" value="<?php echo e($officer->biography); ?>" class="form-control my-1" placeholder="biography">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong style="color: black">Image Officer:</strong>
                    <input type="file" name="image" class="form-control my-4" placeholder="image" >
                    <img src="/image/<?php echo e($officer->image); ?>" width="120px">
                </div>
            </div>
            <div class="pull-left mx-3 mb-5">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-success" href="<?php echo e(route('officers.index')); ?>">Back</a>
            </div>
        </div>

    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('officers.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abdmalik/laravel/landing_page/resources/views/officers/edit.blade.php ENDPATH**/ ?>