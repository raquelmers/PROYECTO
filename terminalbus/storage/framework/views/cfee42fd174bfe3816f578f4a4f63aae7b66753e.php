;
<?php $__env->startSection('content'); ?>

<div class="container-sm">
    <div class="col-6 sm-3">
        <div class="card">
            <div class="card-header bg-info">
                EDIT TRAVEL
            </div>
            <form action="<?php echo e(route('travel.update', $travel->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="mb-3">
                    <label class="form-label">No. Bus</label>
                    <select name="slctNameBus" class="form control input-sm">
                        <?php $__currentLoopData = $busList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item->id); ?>"><?php echo e($item->nameBus); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Departure Name</label>
                    <select name="slctDepartPlace" class="form control input-sm">
                        <?php $__currentLoopData = $departureList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item->id); ?>"><?php echo e($item->departPlace); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Arrival Name</label>
                    <select name="slctArrivalPlace" class="form control input-sm">
                        <?php $__currentLoopData = $arrivalList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option id="<?php echo e($item->id); ?>" value="<?php echo e($item->id); ?>"><?php echo e($item->arrivalPlace); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Date</label>
                    <input type="date" class="form-control" name="txtDateTravel" value="<?php echo e($travel->dateTravel); ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Time</label>
                    <input type="time" class="form-control" name="txtTimeTravel" value="<?php echo e($travel->timeTravel); ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Type of travel</label>
                    <input type="text" class="form-control" name="txtTypeTravel" value="<?php echo e($travel->typeTravel); ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Fare</label>
                    <input type="text" class="form-control" name="txtFareTravel" value="<?php echo e($travel->fareTravel); ?>">
                </div>
                <button type="submit" class="btn btn-info">Save</button>
                <a href="<?php echo e(route('travel.index')); ?>" class="btn btn-info">Cancel</a>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\terminalbus\resources\views/layouts/editTravel.blade.php ENDPATH**/ ?>