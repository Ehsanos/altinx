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

    <section class="contact-page-sec mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="contact-info">
                        <div class="contact-info-item">
                            <div class="contact-info-icon">
                                <i class="fas fa-map-marked"></i>
                            </div>
                            <div class="contact-info-text">
                                <h2><?php echo e(lang('address')); ?></h2>
                                <span>1215 Lorem Ipsum, Ch 176080 </span>
                                <span>Chandigarh , INDIA</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-info">
                        <div class="contact-info-item">
                            <div class="contact-info-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="contact-info-text">
                                <h2><?php echo e(lang('email')); ?></h2>
                                <span>info@LoremIpsum.com</span>
                                <span>yourmail@gmail.com</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-info">
                        <div class="contact-info-item">
                            <div class="contact-info-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="contact-info-text">
                                <h2>office time</h2>
                                <span>Mon - Thu  9:00 am - 4.00 pm</span>
                                <span>Thu - Mon  10.00 pm - 5.00 pm</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="contact-page-form" method="post">
                        <h2><?php echo e(lang('call_us')); ?></h2>
                        <form action="<?php echo e(route('langs.sub')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="single-input-field">
                                        <input type="text" placeholder="<?php echo e(lang('name')); ?>" name="name"/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="single-input-field">
                                        <input type="email" placeholder="<?php echo e(lang('email')); ?>" name="email" required/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="single-input-field">
                                        <input type="text" placeholder="<?php echo e(lang('phone')); ?>" name="phone"/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="single-input-field">
                                        <input type="text" placeholder="Subject" name="subject"/>
                                    </div>
                                </div>
                                <div class="col-md-12 message-input">
                                    <div class="single-input-field">
                                        <textarea  placeholder="<?php echo e(lang('message')); ?>" name="message"></textarea>
                                    </div>
                                </div>
                                <div class="single-input-fieldsbtn">
                                    <input type="submit" value="<?php echo e(lang('send')); ?>"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12">
                    <div class="contact-page-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d109741.02912911311!2d76.69348873658222!3d30.73506264436677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fed0be66ec96b%3A0xa5ff67f9527319fe!2sChandigarh!5e0!3m2!1sen!2sin!4v1553497921355" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\1\altin\resources\views/pages/about.blade.php ENDPATH**/ ?>