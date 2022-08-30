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

    <form action="<?php echo e(route('stories.update',$story->id)); ?>" method="POST" enctype="multipart/form-data" class="my-3">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="my-3">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong style="color: black">Story:</strong>
                    <input type="text" name="story" value="<?php echo e($story->story); ?>" class="form-control my-1" placeholder="name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong style="color: black">Image Story:</strong>
                    <input type="file" name="image" class="form-control my-4" placeholder="Image Story" >
                    <img src="/image/<?php echo e($story->image); ?>" width="120px">
                </div>
            </div>
            <div class="pull-left mx-3 mb-5">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-success" href="<?php echo e(route('stories.index')); ?>">Back</a>
            </div>
        </div>

    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('stories.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abdmalik/laravel/landing_page/resources/views/stories/edit.blade.php ENDPATH**/ ?>