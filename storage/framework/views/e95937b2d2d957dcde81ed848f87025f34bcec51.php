<?php $__env->startSection('content'); ?>
<header class="h-100">
    <div class="top-content">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li data-target="#myCarousel" data-slide-to="<?php echo e($loop->index); ?>"
                        <?php if($loop->first): ?> class="active" <?php endif; ?>></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
                
            </ol>
            <div class="carousel-inner">

                <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="carousel-item <?php if($loop->first): ?>active <?php endif; ?>">

                        <div class="h-100 w-100 img-div"
                             style="background: url('<?php echo e($slide->getFirstMediaUrl('slider')); ?>') center / cover no-repeat;">

                            <div class="h-100 w-100 ">
                                <div class="slide_style_right">
                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-12 text-center align-self-center slide-text">
                                            
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev"><span
                    class="carousel-control-prev-icon" aria-hidden="true"></span><span
                    class="sr-only">Previous</span></a><a class="carousel-control-next" href="#myCarousel"
                                                          role="button" data-slide="next"><span
                    class="carousel-control-next-icon" aria-hidden="true"></span><span
                    class="sr-only">Next</span></a>
        </div>
    </div>
</header>

<div class="container mt-5">

    <div class="row clearfix">

        <div class="row clearfix">
            <?php $__currentLoopData = $delegtes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $deleget): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card agent ">
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