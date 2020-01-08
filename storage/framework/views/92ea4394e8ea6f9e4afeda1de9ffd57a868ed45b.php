<?php $__env->startSection('content'); ?>
<product-list v-bind:products='<?php echo json_encode($products, 15, 512) ?>'></product-list>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/vuetraining/productVuejs/resources/views/product.blade.php ENDPATH**/ ?>