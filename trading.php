<?php
$currentPage = 'business';
$title = 'Trading And Indenting';
include('layouts/header-2.php'); ?>

<!-- Page Header Start !-->
<?php
$title = 'Trading And Indenting';
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
<div class="about-us-area style-2 pt-100 py-sm-60 py-md-80 py-lg-100">
    <div class="container">
        <div class="row justify-content-evenly gy-5">
            <div class="col-xl-6 col-lg-6 d-flex justify-content-center align-items-center">
                <div class="about-image-card style-2">
                    <div class="bg-wrapper wow animate__animated animate__fadeInTopLeft   animate__fast">
                        <img class="tilt-animate" src="img/services/trading-2.jpg" alt="">
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
                                <h2 class="mb-xxl-3">Trading And Indenting</h2>
                                <p>
                                    With over 25 years of experience in pharmaceutical marketing, we have built a strong network of trusted suppliers, including Indian API manufacturers of all sizes. This enables us to offer a wide range of products, including APIs, intermediates, pellets, and excipients.
                                </p>
                                <p>
                                    Our in-house regulatory team works closely with suppliers, especially small and medium-sized manufacturers, to ensure all products are regulatory-ready, giving customers confidence that every material they receive meets full compliance standards.
                                </p>
                                <p>
                                    <span>Our services include:</span>
                                <ul class="list-unstyled mb-4">
                                    <li class="mb-1"> ✔ <strong>Sourcing</strong> high-quality pharmaceutical products</li>
                                    <li class="mb-1"> ✔ <strong>Competitive offers </strong> for the best value </li>
                                    <li class="mb-1"> ✔ <strong>Regulatory support </strong>to ensure smooth approvals</li>
                                    <li class="mb-1"> ✔ <strong>Logistic consolidation </strong>for efficient delivery</li>
                                </ul>
                                </p>
                                <div class="sec-desc">
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
<div class="circle-area py-80 py-sm-60 py-md-80 py-lg-100">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <div class="section-title w-100">
                    <div class="short-title-wrapper text-center">
                        <span class="short-title only-divider">FACILITIES</span>
                    </div>
                    <div class="main-content">
                        <div class="sec-content w-100 text-center">
                            <h2 class="title">
                                Our Services Include
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
                                <span class="">Sourcing</span>
                            </h4>
                        </div>
                    </div>
                    <div class="counter-card style-1 wow animate__animated animate__rollIn  animate__slow">
                        <div class="content">
                            <h4 class="">
                                <span class="">Competitive offers</span>
                            </h4>
                        </div>
                    </div>
                    <div class="counter-card style-1 wow animate__animated animate__rollIn  animate__slow">
                        <div class="content">
                            <h4 class="">
                                <span class="">Regulatory Supports</span>
                            </h4>
                        </div>
                    </div>
                    <div class="counter-card style-1 wow animate__animated animate__rollIn  animate__slow">
                        <div class="content">
                            <h4 class="">
                                <span class="">Logistic Consolidation</span>
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