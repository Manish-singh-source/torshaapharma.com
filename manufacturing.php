<?php
$currentPage = 'business';
$title = 'Manufacturing';
include('layouts/header-2.php'); ?>

<!-- Page Header Start !-->
<?php
$title = 'Manufacturing';
$subtitle = 'business arena';
include('layouts/breadcrumb.php');
?>

<style>
    .about-image-card.style-2 .bg-wrapper img {
        position: absolute;
        top: 0px;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 30px;
    }
</style>

<!-- about us area start -->
<div class="about-us-area style-2 py-sm-60 py-md-80 py-lg-100">
    <div class="container">
        <div class="row justify-content-evenly gy-5">
            <div class="col-xl-6 col-lg-6 d-flex justify-content-center align-items-center">
                <div class="about-image-card style-2">
                    <div class="bg-wrapper wow animate__animated animate__fadeInTopLeft   animate__fast">
                        <img class="tilt-animate" src="img/services/manufacturing.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class=" col-lg-6 col-xl-6 col-xxl-5 wow animate__animated animate__fadeInUp   animate__fast">
                <div class="section-title">
                    <!-- <div class="short-title-wrapper">
                        <span class="short-title only-divider">Business Arena</span>
                    </div> -->
                    <div class="main-content">
                        <div class="sec-content">
                            <div class="content">
                                <h2 class="mb-xxl-3">Manufacturing</h2>
                                <p>
                                    We partner with two trusted manufacturing companies to bring high-quality pharmaceutical products to customers around the world. Both facilities follow strict international standards, including cGMP and ISO certifications, and maintain complete documentation for all products.
                                </p>
                                <p>
                                    This means you get direct access to reliable products with all the necessary certifications, making it easy to trust and use them in your markets.
                                </p>
                                <p class="desc">
                                    Our product range includes <strong>Cetirizine Di HCl </strong>, <strong>Levocetirizine </strong>, <strong>Bupropion </strong>, <strong>Famotidine </strong>, <strong>Sertraline </strong>
                                </p>
                                <p class="desc">
                                    Beyond these key products, we can also help you source other pharmaceutical products as needed, working with reputed Indian manufacturers and providing full documentation to ensure compliance and quality.
                                </p>


                                <div class="sec-desc mt-xxl-4">
                                    <div class="btn-wrapper">
                                        <a href="contact.php" class="theme-btn">Get in Touch</a>
                                        <a href="contact.php" class="circle-arrow-btn"><i class="fa-regular fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about us area end -->

<!-- Circle Area Start -->
<div class="circle-area py-sm-60 py-md-80 py-lg-100">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <div class="section-title w-100">
                    <div class="short-title-wrapper text-center">
                        <span class="short-title only-divider">PRODUCTS</span>
                    </div>
                    <div class="main-content">
                        <div class="sec-content w-100 text-center">
                            <h2 class="title">
                                Our Key Products
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="circle-shape-wrapper">
                    <div class="counter-card style-1  wow animate__animated animate__rollIn  animate__slow">
                        <div class="content">
                            <h4 class="">
                                <span class="">CETIRIZINE DI HCL</span>
                            </h4>
                        </div>
                    </div>
                    <div class="counter-card style-1 wow animate__animated animate__rollIn  animate__slow">
                        <div class="content">
                            <h4 class="">
                                <span class="">LEVOCETIRIZINE</span>
                            </h4>
                        </div>
                    </div>
                    <div class="counter-card style-1 wow animate__animated animate__rollIn  animate__slow">
                        <div class="content">
                            <h4 class="">
                                <span class="">BUPROPION</span>
                            </h4>
                        </div>
                    </div>
                    <div class="counter-card style-1 wow animate__animated animate__rollIn  animate__slow">
                        <div class="content">
                            <h4 class="">
                                <span class="">FAMOTIDINE</span>
                            </h4>
                        </div>
                    </div>
                    <div class="counter-card style-1 wow animate__animated animate__rollIn  animate__slow">
                        <div class="content">
                            <h4 class="">
                                <span class="">SERTRALINE</span>
                            </h4>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Circle Area End -->


<?php include('layouts/footer.php'); ?>