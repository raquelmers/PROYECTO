;
<?php $__env->startSection('content'); ?>

<div class="container-sm">
    <div class="col-6 sm-3">
        <div class="card">
            <div class="card-header bg-info">
                EDIT DEPARTURE
            </div>
            <form action="<?php echo e(route('departure.update', $departure->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" name="txtDepartPlace" value="<?php echo e($departure->departPlace); ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label"> Address</label>
                    <input type="text" class="form-control" name="txtDepartAddress" value="<?php echo e($departure->departAddress); ?>">
                </div>
                <button type="submit" class="btn btn-info">Save</button>
                <a href="<?php echo e(route('departure.index')); ?>" class="btn btn-info">Cancel</a>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\terminalbus\resources\views/layouts/editDeparture.blade.php ENDPATH**/ ?>