<?php $__env->startSection('content'); ?>

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/details.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@2.8.2/dist/alpine.min.js"></script>


    <?php echo \Livewire\Livewire::styles(); ?>


    <main>


        <?php if(Session::has('message')): ?>

            <div class="w-25" x-data="{show: true}" x-init="setTimeout(() => show = false, 1500)" x-show="show">
                <div class="alert alert-success"><?php echo e(Session::get('message')); ?></div>
            </div>
        <?php endif; ?>


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
                        <p><?php echo e(lang('price')); ?> <span class="new-price"><?php echo e($product->price); ?> $</span></p>
                    </div>

                    <div class="product-detail">
                        <h2><?php echo e(lang('details')); ?></h2>
                        <p class="product-detail"><?php echo getTrans($product,'description'); ?></p>


                    </div>
                    <form action="<?php echo e(route('langs.addToCart')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="purchase-info ">
                            <input hidden value="<?php echo e($product->id); ?>" name="product">
                            <input type="number" min="0" value="1" name="num">
                            <button type="submit" class="btn">
                                <?php echo e(lang('cart')); ?> <i class="fas fa-shopping-cart"></i>
                            </button>

                        </div>
                    </form>

                    <div class="social-links">
                        <p><?php echo e(lang('share')); ?>: </p>
                        <a href="https://facebook.com">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://twitter.com">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://instagram.com">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://wa.me/999404187">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a href="https://pinterest.com">
                            <i class="fab fa-pinterest"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
            <div class=" mt-2 container">
                <?php $__currentLoopData = $product->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                    <a href="#" class="badge badge-dark tag-div py-2 px-2 mb-1"><?php echo e($tag->name); ?></a>


                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

        function slideImage() {
            const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

            let x = 1;
            if (document.dir === 'ltr') {
                x = -1;
            }
            document.querySelector('.img-showcase').style.transform = `translateX(${x * (imgId - 1) * displayWidth}px)`;
        }

        window.addEventListener('resize', slideImage);
    </script>

    <?php echo \Livewire\Livewire::scripts(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\1\altin\resources\views/pages/product-details.blade.php ENDPATH**/ ?>