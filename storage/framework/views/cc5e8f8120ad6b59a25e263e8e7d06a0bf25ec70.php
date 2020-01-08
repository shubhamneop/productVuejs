<?php $__env->startSection('content'); ?>
<product-show v-bind:product='<?php echo json_encode($product, 15, 512) ?>'></product-show>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/vuetraining/productVuejs/resources/views/show.blade.php ENDPATH**/ ?>