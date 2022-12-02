;
<?php $__env->startSection('content'); ?>
<div class="container-md">
 <div class="col-12">
    <div class="card">
        <div class="card-header bg-info">
            MANAGE BUSES
        </div>
        <div class="p-4">
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Bus Plate</th>
                    <th>Name Bus</th>
                    <th>Number of Seats</th>
                    <th>Bus Status</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $__currentLoopData = $bus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                  <td>
                      <?php echo e($data->busPlate); ?>

                    </td> 
                    <td>
                      <?php echo e($data->nameBus); ?>

                    </td>
                    <td>
                      <?php echo e($data->seats); ?>

                    </td>
                    <td>
                      <?php echo e($data->busStatus); ?>

                    </td>
                    <td>
                      <a href="<?php echo e(route('bus.edit',$data->id)); ?>" class="btn btn-info">Edit</a>
                    </td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody> 
            </table>
            <a href="<?php echo e(route('bus.create')); ?>" class="btn btn-info">Add new bus</a>
            <a href="<?php echo e(route('travel.index')); ?>" class="btn btn-info">Return</a>
        </div>
    </div>
  </div>
</div>  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\myproject\terminalbus\resources\views/layouts/manageBus.blade.php ENDPATH**/ ?>