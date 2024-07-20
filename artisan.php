<?php
    include('layouts/app.php');
?>


        <!-- Page Header Start -->
        <div class="container-fluid page-header py-5">
            <div class="container text-center py-5">
                <h1 class="display-2 text-white mb-4 animated slideInDown">Nos Artisans</h1>
            </div>
        </div>
        <!-- Page Header End -->



        <!-- Blog Start -->
        <div class="container-fluid blog py-5 my-5">
            <div class="row justify-content-center">
                <div class="col-md-8 mb-5">
                    <form action="" method="GET" class="input-group">
                        <input type="text" name="search" value="" placeholder="Rechercher un artisan" class="form-control py-3">
                        <button type="submit" class="btn btn-secondary mx-2">Rechercher</button>
                    </form>
                </div>
            </div>
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                    <!-- <h5 class="text-primary">Nos Artisans</h5> -->
                    <h1>Tous les Artisans</h1>
                </div>
                <div class="row g-5 justify-content-center">
                    <div class="col-lg-6 col-xl-4 wow fadeIn" data-wow-delay=".3s">
                        <div class="blog-item position-relative bg-light rounded">
                            <img src="img/blog-1.jpg" class="img-fluid w-100 rounded-top" alt="">
                            <span class="position-absolute px-4 py-3 bg-primary text-white rounded" style="top: -28px; right: 20px;">Plomberie</span>
                            <div class="blog-btn d-flex justify-content-between position-relative px-3" style="margin-top: -75px;">
                                <div class="blog-icon btn btn-secondary px-3 rounded-pill my-auto">
                                    <a href="artisan_details.php" class="btn text-white">Voir plus</a>
                                </div>
                                <div class="blog-btn-icon btn btn-secondary px-4 py-3 rounded-pill ">
                                    <div class="blog-icon-1">
                                        <p class="text-white px-2">Info<i class="fa fa-arrow-right ms-3"></i></p>
                                    </div>
                                    <div class="blog-icon-2">
                                        <a href="tel:+1234567890" class="btn me-1"><i class="fas fa-phone text-white"></i></a>
                                        <a href="mailto:example@example.com" class="btn me-1"><i class="fas fa-envelope text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-content text-center position-relative px-3" style="margin-top: -25px;">
                                <img src="img/admin.jpg" class="img-fluid rounded-circle border border-4 border-white mb-3" alt="">
                                <h5 class="">By Daniel Martin</h5>
                                <span class="text-secondary">Yopougon, Palais</span>
                                <!-- <p class="py-2">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt libero sit amet</p> -->
                            </div>
                            <div class="blog-coment d-flex justify-content-between px-4 py-2 border bg-primary rounded-bottom">
                                <!-- <a href="" class="text-white"><small><i class="fas fa-share me-2 text-secondary"></i>5324 Share</small></a>
                                <a href="" class="text-white"><small><i class="fa fa-comments me-2 text-secondary"></i>5 Comments</small></a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 wow fadeIn" data-wow-delay=".5s">
                        <div class="blog-item position-relative bg-light rounded">
                            <img src="img/blog-2.jpg" class="img-fluid w-100 rounded-top" alt="">
                            <span class="position-absolute px-4 py-3 bg-primary text-white rounded" style="top: -28px; right: 20px;">Menuiserie</span>
                            <div class="blog-btn d-flex justify-content-between position-relative px-3" style="margin-top: -75px;">
                                <div class="blog-icon btn btn-secondary px-3 rounded-pill my-auto">
                                    <a href="artisan_details.php" class="btn text-white">Voir plus</a>
                                </div>
                                <div class="blog-btn-icon btn btn-secondary px-4 py-3 rounded-pill ">
                                    <div class="blog-icon-1">
                                        <p class="text-white px-2">Info<i class="fa fa-arrow-right ms-3"></i></p>
                                    </div>
                                    <div class="blog-icon-2">
                                        <a href="tel:+1234567890" class="btn me-1"><i class="fas fa-phone text-white"></i></a>
                                        <a href="mailto:example@example.com" class="btn me-1"><i class="fas fa-envelope text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-content text-center position-relative px-3" style="margin-top: -25px;">
                                <img src="img/admin.jpg" class="img-fluid rounded-circle border border-4 border-white mb-3" alt="">
                                <h5 class="">By Daniel Martin</h5>
                                <span class="text-secondary">Yopougon, Palais</span>
                                <!-- <p class="py-2">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt libero sit amet</p> -->
                            </div>
                            <div class="blog-coment d-flex justify-content-between px-4 py-2 border bg-primary rounded-bottom">
                                <!-- <a href="" class="text-white"><small><i class="fas fa-share me-2 text-secondary"></i>5324 Share</small></a>
                                <a href="" class="text-white"><small><i class="fa fa-comments me-2 text-secondary"></i>5 Comments</small></a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 wow fadeIn" data-wow-delay=".7s">
                        <div class="blog-item position-relative bg-light rounded">
                            <img src="img/blog-3.jpg" class="img-fluid w-100 rounded-top" alt="">
                            <span class="position-absolute px-4 py-3 bg-primary text-white rounded" style="top: -28px; right: 20px;">Boucherie</span>
                            <div class="blog-btn d-flex justify-content-between position-relative px-3" style="margin-top: -75px;">
                                <div class="blog-icon btn btn-secondary px-3 rounded-pill my-auto">
                                    <a href="artisan_details.php" class="btn text-white">Voir plus</a>
                                </div>
                                <div class="blog-btn-icon btn btn-secondary px-4 py-3 rounded-pill ">
                                    <div class="blog-icon-1">
                                        <p class="text-white px-2">Info<i class="fa fa-arrow-right ms-3"></i></p>
                                    </div>
                                    <div class="blog-icon-2">
                                        <!-- <a href="tel:+1234567890" class="btn me-1"><i class="fas fa-phone text-white"></i></a>
                                        <a href="mailto:example@example.com" class="btn me-1"><i class="fas fa-envelope text-white"></i></a> -->
                                    </div>
                                </div>
                            </div>
                            <div class="blog-content text-center position-relative px-3" style="margin-top: -25px;">
                           
                                <img src="img/admin.jpg" class="img-fluid rounded-circle border border-4 border-white mb-3" alt="">
                                <h5 class="">By Daniel Martin</h5>
                                <span class="text-secondary">Yopougon, Palais</span>
                                <!-- <p class="py-2">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt libero sit amet</p> -->
                            </div>
                            <div class="blog-coments d-flex justify-content-between px-4 py-2 border bg-primary rounded-bottom">
                                <!-- <a href="" class="text-white"><small><i class="fas fa-share me-2 text-secondary"></i>5324 Share</small></a>
                                <a href="" class="text-white"><small><i class="fa fa-comments me-2 text-secondary"></i>5 Comments</small></a> -->
                            </div>
                        </div>
                    </div>     
                </div>
            </div>
        </div>
        <!-- Blog End -->

            <!-- Footer Start -->
            <div class="container-fluid footer bg-dark wow fadeIn" data-wow-delay=".3s">
            <div class="container pt-5 pb-4">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start">
                        <span class="text-light"><a href="#" class="text-secondary"><i class="fas fa-copyright text-secondary me-2"></i>Entreprise 20</a>, Tous droits réservés.</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
