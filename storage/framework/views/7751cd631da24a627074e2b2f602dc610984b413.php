<?php $__env->startSection('content'); ?>

    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="<?php echo e(asset('assets/css/cart.css')); ?>" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>
<body>

<div class="container mt-lg-5">
    <h1 class="text-black-50">محتويات الطلب</h1>
    

</div>

<div class="shopping-cart">

    <div class="column-labels">
        <label class="product-image">Image</label>
        <label class="product-details">Product</label>
        <label class="product-price">Price</label>
        <label class="product-quantity">Quantity</label>

        <label class="product-line-price">Total</label>
    </div>


    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="product">
            <div class="product-image">
                <img src="<?php echo e($item->product->getFirstMediaUrl('products')); ?>">
            </div>
            <div class="product-details">
                <div class="product-title"><?php echo e($item->product->name); ?></div>
                <p class="product-description"><?php echo e($item->product->discrption); ?></p>
            </div>
            <div class="product-price"><?php echo e($item->product->price); ?></div>
            <div class="product-quantity">
                <h3 class="text-black-50"><?php echo e($item->quantity); ?></h3>
            </div>
            <div class="product-line-price"><?php echo e($item->quantity*$item->product->price); ?></div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    
    
    
    
    
    
    
    
    
    
    
    
    
    


    <div class="totals">
        <div class="totals-item">
            <label>Subtotal</label>
            <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <?php echo e($sum); ?>=<?php echo e($sum); ?>+ <?php echo e($item->quantity*$item->product->price); ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <div class="totals-value" id="cart-subtotal">71.97</div>
        </div>
        <div class="totals-item">
            <label>Tax (5%)</label>
            <div class="totals-value" id="cart-tax">3.60</div>
        </div>
        <div class="totals-item">
            <label>Shipping</label>
            <div class="totals-value" id="cart-shipping">15.00</div>
        </div>
        <div class="totals-item totals-item-total">
            <label>Grand Total</label>
            <div class="totals-value" id="cart-total">90.57</div>
        </div>
    </div>


</div>

<script src="<?php echo e(asset('assets/js/cart.js')); ?>">


</script>

</body>
</html>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\1\altin\resources\views/pages/order-details.blade.php ENDPATH**/ ?>