;
<?php $__env->startSection('content'); ?>

<div class="container-sm">
    <div class="col-6 sm-3">
        <div class="card">
            <div class="card-header bg-info">
                ADD NEW TICKET
            </div>
            <form action="/travel" method="POST">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label class="form-label">Select Bus: </label>
                    <select name="slctBus" class="form control input-sm">
                        <?php $__currentLoopData = $bus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option id="<?php echo e($item->id); ?>" value="<?php echo e($item->id); ?>"><?php echo e($item->nameBus); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Departure Place: </label>
                    <select name="slctDeparture" class="form control input-sm">
                        <?php $__currentLoopData = $departure; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option id="<?php echo e($item->id); ?>" value="<?php echo e($item->id); ?>"><?php echo e($item->departPlace); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Departure Place: </label>
                    <select name="slctArrival" class="form control input-sm">
                        <?php $__currentLoopData = $arrival; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option id="<?php echo e($item->id); ?>" value="<?php echo e($item->id); ?>"><?php echo e($item->arrivalPlace); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Type Travel:</label>
                    <select name="slctTypeTravel" class="form control input-sm">
                        <?php $__currentLoopData = $travel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option id="<?php echo e($item->id); ?>" value="<?php echo e($item->id); ?>"><?php echo e($item->typeTravel); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    
                </div>
                <div class="mb-3">
                    <label class="form-label">Name Passenger:</label>
                    <input type="text" class="form-control" name="txtFirstNamePassgr" placeholder="First Name">
                    <input type="text" class="form-control" name="txtLastNamePassgr" placeholder="Last Name">
                </div>
                <a href="<?php echo e(route('travel.index')); ?>" class="btn btn-info">Save</a>
                <a href="<?php echo e(route('travel.index')); ?>" class="btn btn-info">Cancel</a>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\terminalbus\resources\views/layouts/createTicket.blade.php ENDPATH**/ ?>