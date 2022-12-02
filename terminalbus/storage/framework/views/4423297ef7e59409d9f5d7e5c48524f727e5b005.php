;
<?php $__env->startSection('content'); ?>

<div class="container-sm">
    <div class="col-6 sm-3">
        <div class="card">
            <div class="card-header bg-info">
                ADD NEW BUS
            </div>
            <form action="<?php echo e(route('bus.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label class="form-label">Bus Plate</label>
                    <input type="text" class="form-control" name="txtBusPlate">
                </div>
                <div class="mb-3">
                    <label class="form-label">Name Bus</label>
                    <input type="text" class="form-control" name="txtNameBus">
                </div>
                <div class="mb-3">
                    <label class="form-label">Number of Seats</label>
                    <input type="text" class="form-control" name="txtNunSeats">
                </div>
                <div class="mb-3">
                    <label class="form-label">Bus Status</label>
                    <input type="text" class="form-control" name="txtBusStatus">
                </div>
                <button type="submit" class="btn btn-info">Save</button>
                <a href="<?php echo e(route('bus.index')); ?>" class="btn btn-info">Cancel</a>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\terminalbus\resources\views/layouts/createBus.blade.php ENDPATH**/ ?>