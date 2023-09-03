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

    <main>
        <section class="d-flex flex-column justify-content-center align-items-center products-1 py-2">
            <div class="container-fluid py-5">
                <div class="row justify-content-center">
                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-12 col-lg-4 mb-lg-0" style="padding: 10px;"><a
                                href="<?php echo e(route('langs.showPost',['post'=>$post])); ?>">
                                <div class="hover hover-2 rounded" style="color: #ffffff;"><img class="img-fluid"
                                                                                                src="<?php echo e($post->getFirstMediaUrl('posts')); ?>"
                                                                                                alt="image">
                                    <div class="hover-overlay"></div>
                                    <div class="hover-1-content px-5 py-4">
                                        <h2 class="text-uppercase hover-2-title mb-0"
                                            style="font-weight: bold;"><?php echo e(getTrans($post,'tilte')); ?></h2>
                                        <p class="hover-2-description font-weight-light mb-0"></p>
                                    </div>
                                </div>
                            </a></div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
                <div class=" mt-2">

                    <a href="#" class="badge badge-dark">Dark</a>
                    <a href="#" class="badge badge-dark">Dark</a>


                    <a href="#" class="badge badge-dark">Dark</a>

                    <a href="#" class="badge badge-dark">Dark</a>
                    <a href="#" class="badge badge-dark">Dark</a>
                    <a href="#" class="badge badge-dark">Dark</a>
                    <a href="#" class="badge badge-dark">Dark</a>
                    <a href="#" class="badge badge-dark">Dark</a>
                    <a href="#" class="badge badge-dark">Dark</a>
                    <a href="#" class="badge badge-dark">Dark</a>

                    <a href="#" class="badge badge-dark">Dark</a>
                    <a href="#" class="badge badge-dark">Dark</a>
                    <a href="#" class="badge badge-dark">Dark</a>
                    <a href="#" class="badge badge-dark">Dark</a>
                    <a href="#" class="badge badge-dark">Dark</a>
                    <a href="#" class="badge badge-dark">Dark</a>
                    <a href="#" class="badge badge-dark">Dark</a>
                    <a href="#" class="badge badge-dark">Dark</a>
                    <a href="#" class="badge badge-dark">Dark</a>
                    <a href="#" class="badge badge-dark">Dark</a>


                </div>


            </div>
        </section>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\1\altin\resources\views/pages/main-news.blade.php ENDPATH**/ ?>