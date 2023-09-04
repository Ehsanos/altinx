;
<?php $__env->startSection('content'); ?>;
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

<div class="container mt-5">

    <div class="row clearfix">

        <div class="row clearfix">
            <?php $__currentLoopData = $delegtes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $deleget): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card agent">
                        <div class="agent-avatar">
                            <a class="agent-name " href="agent-profile.html">
                                <img src="<?php echo e($deleget->getFirstMediaUrl('users')); ?>" class="img-fluid " alt="">
                            </a>
                        </div>
                        <div class="agent-content">
                            <div class="agent-name agent-color">
                                <h4><a class="agent-color" href="agent-profile.html"><?php echo e($deleget->name); ?></a></h4>
                                <span class="agent-color"><?php echo e($deleget->country->name); ?></span>
                            </div>
                            <ul class="agent-contact-details">
                                <li><i class="zmdi zmdi-phone"></i><span><?php echo e($deleget->phone); ?></span><br></li>
                                <li><i class="zmdi zmdi-whatsapp"></i><?php echo e($deleget->whatsapp); ?><br></li>
                                <li><i class="zmdi zmdi-email"></i><?php echo e($deleget->email); ?></li>

                            </ul>
                            <ul class="social-icons">
                                <li><a class="facebook agent-color" href="<?php echo e($deleget->facebook); ?>"><i class="zmdi zmdi-facebook"></i></a></li>
                                <li><a class="twitter agent-color" href="<?php echo e($deleget->twitter); ?>"><i class="zmdi zmdi-twitter"></i></a></li>
                                <li><a class="gplus agent-color" href="<?php echo e($deleget->insegram); ?>"><i class="zmdi zmdi-google-plus"></i></a></li>
                                <li><a class="linkedin agent-color" href="<?php echo e($deleget->instegram); ?>"><i class="zmdi zmdi-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


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
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\1\altin\resources\views/pages/delegte.blade.php ENDPATH**/ ?>