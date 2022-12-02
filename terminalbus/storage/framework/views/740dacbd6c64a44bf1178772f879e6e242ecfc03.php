;
<?php $__env->startSection('content'); ?>
<div class="container-md">
 <div class="col-12">
    <div class="card">
        <div class="card-header bg-info">
            MANAGE DEPARTURES
        </div>
        <div class="p-4">
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Departure Place</th>
                    <th>Address</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $__currentLoopData = $departure; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                  <td>
                      <?php echo e($data->departPlace); ?>

                    </td> 
                    <td>
                      <?php echo e($data->departAddress); ?>

                    </td>
                    <td>
                    <a href="<?php echo e(route('departure.edit',$data->id)); ?>" class="btn btn-info">Edit</a>
                    </td>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody> 
            </table>
            <a href="<?php echo e(route('departure.create')); ?>" class="btn btn-info">Add new departure</a>
            <a href="<?php echo e(route('travel.index')); ?>" class="btn btn-info">Return</a>
        </div>
    </div>
  </div>
</div>  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\terminalbus\resources\views/layouts/manageDeparture.blade.php ENDPATH**/ ?>