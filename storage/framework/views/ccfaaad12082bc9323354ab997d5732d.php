<!-- resources/views/tickets/index.blade.php -->



<?php $__env->startSection('content'); ?>
    <h1>Tickets</h1>

    <ul>
        <?php $__currentLoopData = $tickets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ticket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($ticket->title); ?> - <?php echo e($ticket->status); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\nandha\Ticket-raising\resources\views/index.blade.php ENDPATH**/ ?>