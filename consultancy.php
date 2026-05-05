<?php
$currentPage = 'business';
$title = 'Consultancy';
include('layouts/header-2.php'); ?>

<!-- Page Header Start !-->
<?php
$title = 'Consultancy';
$subtitle = 'business arena';
include('layouts/breadcrumb.php');
?>

<!-- about us area start -->
<div class="about-us-area style-2 pt-100 py-sm-60 py-md-80 py-lg-100">
    <div class="container">
        <div class="row justify-content-evenly gy-5">
            <div class="col-xl-6 col-lg-6 d-flex justify-content-center align-items-center">
                <div class="about-image-card style-2">
                    <div class="bg-wrapper wow animate__animated animate__fadeInTopLeft   animate__fast">
                        <img class="tilt-animate" src="img/services/consultancy.png" alt="">
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
                                <h2 class="mb-xxl-3">Consultancy</h2>
                                <p>
                                    In today’s fast-changing pharmaceutical market, regulatory compliance is essential for success. That’s why we have built an in-house regulatory consultancy team to support both our suppliers and international customers.
                                </p>
                                <p>
                                    Our services cover everything from cGMP standards and GMP audits to DMF preparation and filing, helping partners stay fully compliant with global regulatory requirements.
                                </p>
                                <p>
                                    With the right mix of experience and expertise, we provide end-to-end regulatory support, making it easier for you to focus on your business while ensuring every product meets the required standards.
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
                                Our Offer Solutions
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
                                <span class="">cGMP standard</span>
                            </h4>
                        </div>
                    </div>
                    <div class="counter-card style-1 wow animate__animated animate__rollIn  animate__slow">
                        <div class="content">
                            <h4 class="">
                                <span class="">GMP audits</span>
                            </h4>
                        </div>
                    </div>
                    <div class="counter-card style-1 wow animate__animated animate__rollIn  animate__slow">
                        <div class="content">
                            <h4 class="">
                                <span class="">DMF preparation</span>
                            </h4>
                        </div>
                    </div>
                    <div class="counter-card style-1 wow animate__animated animate__rollIn  animate__slow">
                        <div class="content">
                            <h4 class="">
                                <span class="">DMF filing</span>
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