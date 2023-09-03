<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>" dir="<?php echo e(app()->getLocale()=='ar'?'rtl':'ltr'); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>

    <?php if(app()->getLocale()=='ar'): ?>
        <link rel="stylesheet" href="<?php echo e(asset('assets/bootstrap/css/bootstrap.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/bootstrap/css/bootstrap-rtl.min.css')); ?>">
    <?php else: ?>
        <link rel="stylesheet" href="<?php echo e(asset('assets/bootstrap/css/bootstrap.min.css')); ?>">
    <?php endif; ?>



    <link rel="stylesheet" href="<?php echo e(asset('assets/css/agent.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/about.css')); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:100i,200,200i,300,300i,400,400i,500,500i&amp;display=swap">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/ws-ctrl-convex.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/ws-ctrl-twist.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/fonts/fontawesome-all.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/fonts/font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/fonts/fontawesome5-overrides.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/aos.min.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/Animated-numbers-section-styles.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/best-carousel-slide.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/Bold-BS4-Image-Caption-Hover-Effect-2.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/details-product.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/main.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/Off-Canvas-Sidebar-Drawer-Navbar.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/slide-animation-test.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">

</head>

<body class="p-0">
<main>
    <nav class="navbar navbar-light navbar-expand-lg sticky-top navbar-shrink py-3 border-bottom" id="mainNav">
        <div class="container-fluid"><a class="navbar-brand d-flex align-items-center"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item flex-column justify-content-start align-items-center main-link"><a class="nav-link <?php if(\Request::route()->getName() =='langs.index'): ?> active <?php endif; ?>" href="<?php echo e(route('langs.index')); ?>"><?php echo e(lang('home')); ?></a></li>
                    <li class="nav-item main-link"><a class="nav-link font-weight-bolder  <?php if(\Request::route()->getName() =='langs.products'): ?> active <?php endif; ?>"  href="<?php echo e(route('langs.products')); ?>"><?php echo e(lang('product')); ?></a></li>
                    <li class="nav-item main-link"><a class="nav-link font-weight-bolder <?php if(\Request::route()->getName() =='langs.catalog'): ?> active <?php endif; ?>" href="<?php echo e(route('langs.catalog')); ?>"><?php echo e(lang('services')); ?></a></li>
                    <li class="nav-item main-link"><a class="nav-link font-weight-bolder <?php if(\Request::route()->getName() =='langs.agents'): ?> active <?php endif; ?>" href="<?php echo e(route('langs.agents')); ?>"><?php echo e(lang('agents')); ?></a></li>
                    <li class="nav-item main-link"><a class="nav-link font-weight-bolder <?php if(\Request::route()->getName() =='langs.delegte'): ?> active <?php endif; ?>" href="<?php echo e(route('langs.delegte')); ?>"><?php echo e(lang('delegte')); ?></a></li>
                    <li class="nav-item main-link"><a class="nav-link font-weight-bolder <?php if(\Request::route()->getName() =='langs.jobs'): ?> active <?php endif; ?>" href="<?php echo e(route('langs.jobs')); ?>"><?php echo e(lang('jobs')); ?></a></li>
                    <li class="nav-item main-link"><a class="nav-link font-weight-bolder <?php if(\Request::route()->getName() =='langs.news'): ?> active <?php endif; ?>" href="<?php echo e(route('langs.news')); ?>"><?php echo e(lang('news')); ?></a></li>
                    <li class="nav-item main-link"><a class="nav-link  font-weight-bolder <?php if(\Request::route()->getName() =='langs.about'): ?> active <?php endif; ?>" href="<?php echo e(route('langs.about')); ?>"><?php echo e(lang('we_are')); ?></a></li>
                    <li class="nav-item d-none d-lg-block mx-5">
                        <div class="center d-sm-block" mt-3="">

                            <form class="form-inline srch-form" action="">
                                <div class="srch-wrapper"><input type="text" class="srch-input" placeholder="Search..."><button class="srch-button" type="submit"><em class="icon-search"></em><i class="fas fa-search"></i></button></div>
                            </form>
                        </div>
                    </li>
                    <li class="nav-item d-block d-lg-none">
                        <div class="float-left float-md-right my-3 mt-md-0 search-area"><i class="fas fa-search float-left search-icon"></i><input class="float-left float-sm-right custom-search-input" type="search" placeholder="Type to filter by address"></div>
                    </li>
                </ul>
                <div class="dropdown d-lg-flex align-items-lg-center mx-4 py-2">
                    <a class="dropdown-toggle" aria-expanded="false" data-toggle="dropdown" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-globe fa-lg">
                            <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5V1.077zM4.09 4a9.267 9.267 0 0 1 .64-1.539 6.7 6.7 0 0 1 .597-.933A7.025 7.025 0 0 0 2.255 4H4.09zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a6.958 6.958 0 0 0-.656 2.5h2.49zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5H4.847zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5H8.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5H4.51zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5H8.5zM5.145 12c.138.386.295.744.468 1.068.552 1.035 1.218 1.65 1.887 1.855V12H5.145zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472zM3.82 11a13.652 13.652 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5H3.82zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933zM8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855.173-.324.33-.682.468-1.068H8.5zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5a6.959 6.959 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5h2.49zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4a7.966 7.966 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4h2.355z"></path>
                        </svg></a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?php echo e(route('change.lang',['lang'=>'ar'])); ?>">اللغة العربية</a>
                        <a class="dropdown-item" href="<?php echo e(route('change.lang',['lang'=>'en'])); ?>">EN</a>
                        <a class="dropdown-item" href="<?php echo e(route('change.lang',['lang'=>'tr'])); ?>">TR</a>
                        <a class="dropdown-item" href="<?php echo e(route('change.lang',['lang'=>'du'])); ?>">DU</a>
                        <a class="dropdown-item" href="<?php echo e(route('change.lang',['lang'=>'es'])); ?>">ES</a>

                    </div>
                </div><a class="btn shadow btn-sign" role="button" ><?php echo e(lang('login')); ?></a>
            </div>
        </div>
    </nav>
   <?php echo $__env->yieldContent('content'); ?>;




    <footer class="footer">
        <div class="container py-4 py-lg-5">
            <div class="row row-cols-2 row-cols-md-4">
                <div class="col-12 col-md-4">
                    <div class="font-weight-bold text-lg-right d-flex align-items-center mb-2"><span class="text-dark"><?php echo e(lang('emails')); ?></span></div>
                    <div class="pt-2">
                        <form method="post">
                            <div class="mb-3"><input class="shadow form-control" type="email" id="email-1" name="email" placeholder="Email"></div>
                            <div><button class="btn btn-primary shadow btn-sign d-block w-100" type="submit"><?php echo e(lang('send')); ?></button></div>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-lg-4 text-lg-left d-flex flex-column">
                    <div class="p-3">
                        <h3 class="font-weight-bold text-center text-lg-right fs-6 text-dark"><?php echo e(lang('pages')); ?></h3>
                        <ul class="list-unstyled text-center text-lg-right">
                            <li><a href="#"><?php echo e(lang('home')); ?></a></li>
                            <li><a href="#"><?php echo e(lang('product')); ?></a></li>
                            <li><a href="#"><?php echo e(lang('services')); ?></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-lg-4 text-lg-left d-flex flex-column">
                    <div class="p-3">
                        <h3 class="font-weight-bold text-center text-lg-right fs-6 text-dark"><?php echo e(lang('about')); ?></h3>
                        <ul class="list-unstyled text-center text-lg-right">
                            <li><a href="#"><?php echo e(lang('we_are')); ?></a></li>
                            <li><a href="#"><?php echo e(lang('policy')); ?></a></li>
                            <li><a href="#"><?php echo e(lang('call_us')); ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr>
            <div class="text-muted d-flex justify-content-between align-items-center pt-3">
                <p class="mb-0">Copyright © 2023 Brand</p>
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-facebook">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                        </svg></li>
                    <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-twitter">
                            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                        </svg></li>
                    <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-instagram">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
                        </svg></li>
                </ul>
            </div>
        </div>
    </footer>
</main>









<script src="<?php echo e(asset('assets/js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/bootstrap/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/aos.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/bs-init.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/Animated-numbers-section-script.js')); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>
<script src="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/startup-modern.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/Off-Canvas-Sidebar-Drawer-Navbar-swipe.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/Off-Canvas-Sidebar-Drawer-Navbar-off-canvas-sidebar.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/details-product.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/slide-animation-test.js')); ?>"></script>
<script src="//code.tidio.co/wo5ts73xsjvokgdmqdfqszqytforywxp.js" async></script>
</body>

</html>
<?php /**PATH D:\1\altin\resources\views/layouts/master.blade.php ENDPATH**/ ?>