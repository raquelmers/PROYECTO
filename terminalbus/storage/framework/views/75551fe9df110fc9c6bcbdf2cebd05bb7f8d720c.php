;
<?php $__env->startSection('content'); ?>

<div class="container-md ">
 <div class="col-12">
    <div class="card">
        <div class="card-header bg-info">
        AVAILABLE TRAVELS 
        </div>
        <div class="p-4">
        <div class="card-header">
            <a href="<?php echo e(route('travel.create')); ?>" class="btn btn-info">Add new travel</a>
        </div>
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th># Bus</th>
                    <th>Journey</th>
                    <th>Schedule</th>
                    <th>Type of Travel</th>
                    <th>Fare</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $__currentLoopData = $travel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                  <td>
                      <?php echo e($data->nameBus); ?>

                    </td> 
                    <td>
                      <?php echo e($data->departPlace); ?> - <?php echo e($data->arrivalPlace); ?>

                    </td>
                    <td>
                      <?php echo e($data->timeTravel); ?>

                    </td>
                    <td>
                      <?php echo e($data->typeTravel); ?>

                    </td>
                    <td>
                      $ <?php echo e($data->fareTravel); ?>

                    </td>
                    <td>
                      <a href="<?php echo e(route('travel.edit',$data->id)); ?>" class="btn btn-info">Edit Travel</a>
                    </td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody> 
            </table>
        </div>
    </div>
  </div>
</div> 
<div class="container-md">
 <div class="col-12 mx-auto">
    <div class="card">
        <div class="card-header mx-auto">
            MANAGEMENT
        </div>
        <div class="p4 mx-auto">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th><a href="<?php echo e(route('bus.index')); ?>" class="btn btn-info">BUSES</a></th>
                    <th><a href="<?php echo e(route('departure.index')); ?>" class="btn btn-info">DEPARTURES</a></th>
                    <th><a href="<?php echo e(route('arrival.index')); ?>" class="btn btn-info">ARRIVALS</a></th>
                  </tr>
                </thead>
            </table>
        </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 
  </body>
</html>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\terminalbus\resources\views/layouts/index.blade.php ENDPATH**/ ?>