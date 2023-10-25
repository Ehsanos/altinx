<?php $__env->startSection('content'); ?>

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/details.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">



<main>
    <div class="card-wrapper  py-4">
        <div class="card">
            <!-- card left -->
            <div class="product-imgs">
                <div class="img-display">
                    <div class="img-showcase">

                        <?php $__currentLoopData = $imgs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <img
                            src="<?php echo e($imgs[$loop->index]->getUrl()); ?>"
                            alt="shoe image">
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>









                    </div>
                </div>
                <div class="img-select">
                    <?php $__currentLoopData = $imgs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <div class="img-item">
                        <a href="#" data-id="<?php echo e($loop->index+1); ?>">
                            <img
                                src="<?php echo e($imgs[$loop->index]->getUrl()); ?>"
                                alt="shoe image">
                        </a>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>






















                </div>
            </div>
            <!-- card right -->
            <div class="product-content">
                <h2 class="product-title"><?php echo e(getTrans($product,'name')); ?></h2>

                <div class="product-price">
                    <p ><?php echo e(lang('price')); ?> <span class="new-price"><?php echo e($product->price); ?> $</span></p>
                </div>

                <div class="product-detail">
                    <h2><?php echo e(lang('details')); ?></h2>
                    <p class="product-detail"><?php echo e(getTrans($product,'description')); ?></p>


                </div>

                <div class="purchase-info ">
                    <input type="number" min="0" value="1">
                    <button type="button" class="btn">
                        <?php echo e(lang('cart')); ?> <i class="fas fa-shopping-cart"></i>
                    </button>

                </div>

                <div class="social-links">
                    <p><?php echo e(lang('share')); ?>: </p>
                    <a href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-pinterest"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

</main>
    <script>
        const imgs = document.querySelectorAll('.img-select a');
        const imgBtns = [...imgs];
        let imgId = 1;

        imgBtns.forEach((imgItem) => {
            imgItem.addEventListener('click', (event) => {
                event.preventDefault();
                imgId = imgItem.dataset.id;
                slideImage();
            });
        });

        function slideImage(){
            const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

            let x=1;
            if(document.dir==='ltr')
                {
                    x=-1;
                }
            document.querySelector('.img-showcase').style.transform = `translateX(${x*(imgId - 1) * displayWidth}px)`;
        }

        window.addEventListener('resize', slideImage);
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\1\altin\resources\views/pages/product-details.blade.php ENDPATH**/ ?>