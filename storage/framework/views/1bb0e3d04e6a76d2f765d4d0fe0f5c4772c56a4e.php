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
                        <img
                            src="<?php echo e($product->getFirstMediaUrl('products')); ?>"
                            alt="shoe image">
                        <img
                            src="<?php echo e($product->getFirstMediaUrl('products')); ?>"
                            alt="shoe image">
                        <img
                            src="https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_3.jpg"
                            alt="shoe image">
                        <img
                            src="https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_4.jpg"
                            alt="shoe image">
                    </div>
                </div>
                <div class="img-select">
                    <div class="img-item">
                        <a href="#" data-id="1">
                            <img
                                src="https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_1.jpg"
                                alt="shoe image">
                        </a>
                    </div>
                    <div class="img-item">
                        <a href="#" data-id="2">
                            <img
                                src="<?php echo e($product->getFirstMediaUrl('products')); ?>"
                                alt="shoe image">
                        </a>
                    </div>
                    <div class="img-item">
                        <a href="#" data-id="3">
                            <img
                                src="<?php echo e($product->getFirstMediaUrl('products')); ?>"
                                alt="shoe image">
                        </a>
                    </div>
                    <div class="img-item">
                        <a href="#" data-id="4">
                            <img
                                src="https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_4.jpg"
                                alt="shoe image">
                        </a>
                    </div>
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

            document.querySelector('.img-showcase').style.transform = `translateX(${(imgId - 1) * displayWidth}px)`;
        }

        window.addEventListener('resize', slideImage);
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\1\altin\resources\views/pages/product-details.blade.php ENDPATH**/ ?>