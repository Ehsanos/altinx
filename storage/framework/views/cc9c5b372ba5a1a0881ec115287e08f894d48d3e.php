<?php $__env->startSection('content'); ?>

    <section id="carousel">
        <div class="carousel slide" data-ride="carousel" id="carousel-1">
            <div class="carousel-inner">

                <div class="carousel-item">
                    <div class="jumbotron pulse animated hero-nature carousel-hero"></div>
                </div>
                <div class="carousel-item">
                    <div class="jumbotron pulse animated hero-photography carousel-hero"></div>
                </div>
                <div class="carousel-item active">
                    <div class="jumbotron pulse animated hero-technology carousel-hero"></div>
                </div>

            </div>
            <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><i
                        class="fa fa-chevron-left"></i><span class="sr-only">Previous</span></a><a
                    class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><i
                        class="fa fa-chevron-right"></i><span class="sr-only">Next</span></a></div>
            <ol class="carousel-indicators">
                <li data-target="#carousel-1" data-slide-to="0"></li>
                <li data-target="#carousel-1" data-slide-to="1"></li>
                <li data-target="#carousel-1" data-slide-to="2" class="active"></li>
            </ol>
        </div>
    </section>
    <section class="d-flex flex-column justify-content-center align-items-center products-1 py-2">
        <div class="container">
            <div class="container">
                

                

                
                
                
                
                
                
                
                
                




                

                
                <div class="">
                    <div class="row py-2">
                        <div class="col p-0">
                            <div class="px-3">
                                <h2 class="text-dark"><?php echo e(lang('catalog')); ?></h2>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php $__currentLoopData = $catalogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catalog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-6 col-lg-4 mb-4">
                                    <div class="product-main border py-1">
                                        <div class="product-img border-bottom mb-1">
                                            <div class="p-2"><img class="img-fluid" src="<?php echo e($catalog->getFirstMediaUrl('catalogs')); ?>"></div>
                                        </div>
                                        <div class="product-desc px-3">
                                            <h5 class="text-dark m-0 py-1"><?php echo e(getTrans($catalog,'name')); ?></h5>
                                            <p class="text-dark m-0 py-2"><?php echo e(getTrans($catalog,'description')); ?></p>
                                        </div>
                                        <div class="product-btn px-3 py-2"><a type="button"
                                                class="text-decoration-none products-details"
                                                href="<?php echo e(Storage::url($catalog->file)); ?>"><?php echo e(lang('download')); ?> </a></div>
                                    </div>
                              </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                    </div>
                </div>
            </div>
            <div class=" mt-2">
                <a href="#" class="badge badge-dark tag-div py-2 px-2">Dark</a>
                <a href="#" class="badge badge-dark tag-div py-2 px-2">Dark</a>
                <a href="#" class="badge badge-dark tag-div py-2 px-2">Dark</a>
                <a href="#" class="badge badge-dark tag-div py-2 px-2">Dark</a>
                <a href="#" class="badge badge-dark tag-div py-2 px-2">Dark</a>
                <a href="#" class="badge badge-dark tag-div py-2 px-2">Dark</a>
                <a href="#" class="badge badge-dark tag-div py-2 px-2">Dark</a>
                <a href="#" class="badge badge-dark tag-div py-2 px-2">Dark</a>
                <a href="#" class="badge badge-dark tag-div py-2 px-2">Dark</a>
                <a href="#" class="badge badge-dark tag-div py-2 px-2">Dark</a>
                <a href="#" class="badge badge-dark tag-div py-2 px-2">Dark</a>
                <a href="#" class="badge badge-dark tag-div py-2 px-2">Dark</a>
                <a href="#" class="badge badge-dark tag-div py-2 px-2">Dark</a>
                <a href="#" class="badge badge-dark tag-div py-2 px-2">Dark</a>
                <a href="#" class="badge badge-dark tag-div py-2 px-2">Dark</a>
                <a href="#" class="badge badge-dark tag-div py-2 px-2">Dark</a>


            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\1\altin\resources\views/pages/Catalog.blade.php ENDPATH**/ ?>