<?php
$currentPage = 'home';
$title = 'Home';
include('layouts/header.php'); ?>

<style>
.project-cards {
    border: 1px solid #ddd;
    border-radius: 10px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    text-align: center;
}

.project-cards img {
    width: 100%;
    border-radius: 10px;
}

.project-cards h4 {
    margin-top: 20px;
    font-size: 1.5rem;
    color: #343a40;
}

.project-cards p {
    color: #777;
    font-size: 1rem;
}

.project-cards {
    position: relative;
    overflow: hidden;
    border-radius: 10px;
}

.project-cards .img-wrapper {
    position: relative;
    overflow: hidden;
    border-radius: 10px;
}

/* Image */
.project-cards img {
    width: 100%;
    display: block;
    border-radius: 10px;
    transition: transform 0.4s ease;
}

/* Black overlay */
.project-cards .img-wrapper::after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgb(0 0 0 / 10%);
    opacity: 0;
    transition: opacity 0.4s ease;
    border-radius: 10px;
    z-index: 1;
}

/* Button wrapper (for About Us + Arrow) */
.project-cards .btn-wrapper {
    position: absolute;
    bottom: -60px;
    /* hidden initially */
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    gap: 10px;
    opacity: 0;
    transition: all 0.5s ease;
    z-index: 2;
}

/* Overlay-btn (for single button card) */
.project-cards .overlay-btn {
    position: absolute;
    bottom: -50px;
    /* hidden initially */
    left: 50%;
    transform: translateX(-50%);
    opacity: 0;
    background: #007bff;
    color: #fff;
    padding: 10px 20px;
    border-radius: 30px;
    font-size: 14px;
    text-decoration: none;
    transition: all 0.4s ease;
    white-space: nowrap;
    z-index: 2;
}

.fl {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

/* Hover effects */
.project-cards .img-wrapper:hover::after {
    opacity: 1;
}

.project-cards .img-wrapper:hover img {
    transform: scale(1.05);
}

/* Show buttons on hover */
.project-cards .img-wrapper:hover .btn-wrapper {
    bottom: 50%;
    opacity: 1;
    transform: translate(-50%, 50%);
}

.project-cards .img-wrapper:hover .overlay-btn {
    bottom: 50%;
    opacity: 1;
    transform: translate(-50%, 50%);
}
</style>

<!-- Banner Area Section Start -->
<div class="slider-area style-2">
    <div class="slider-wrapper-six">
        <!-- single slider start -->
        <div class="single-slider-wrapper active" style="background-image: url('img/banner/PR.png')">
            <div class="slider-overlay"></div>
            <div class="single-slider m-auto">
                <div class="container-fluid p-0">
                    <div class="row">
                        <div class="col-lg-9 col-xl-10 col-xxl-12 m-auto">
                            <div class="slider-content-wrapper">
                                <div class="slider-content">
                                    <h1 class="slider-title text-white text-center">Prompt & Reliable Service</h1>
                                    <p class="slider-short-desc text-white text-center">We prioritize quick, efficient,
                                        and dependable support to meet urgent <br> needs without compromising accuracy
                                        or safety</p>
                                    <!-- <div class="btn-wrapper">
                                        <a href="#" class="theme-btn">Learn More</a>
                                        <a href="#" class="circle-arrow-btn"><i class="fa-regular fa-arrow-right"></i></a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- single slider end -->
        <!-- single slider start -->
        <div class="single-slider-wrapper" style="background-image: url('images/section-bg/section-bg-one.jpg')">
            <div class="slider-overlay"></div>
            <div class="single-slider m-auto">
                <div class="container-fluid p-0">
                    <div class="row">
                        <div class="col-lg-9 col-xl-10 col-xxl-12 m-auto">
                            <div class="slider-content-wrapper">
                                <div class="slider-content">
                                    <h1 class="slider-title text-white text-center">Integrity & Compliance</h1>
                                    <p class="slider-short-desc text-white text-center">We operate with the highest
                                        ethical standards, ensuring all products <br> meet regulatory requirements and
                                        industry best practices</p>
                                    <!-- <div class="btn-wrapper">
                                  <a href="#" class="theme-btn">Learn More</a>
                                  <a href="#" class="circle-arrow-btn"><i class="fa-regular fa-arrow-right"></i></a>
                                </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- single slider end -->
        <!-- single slider start -->
        <div class="single-slider-wrapper" style="background-image: url('img/banner/cc1.png')">
            <div class="slider-overlay"></div>
            <div class="single-slider m-auto">
                <div class="container-fluid p-0">
                    <div class="row">
                        <div class="col-lg-9 col-xl-10 col-xxl-12 m-auto">
                            <div class="slider-content-wrapper">
                                <div class="slider-content">
                                    <h1 class="slider-title text-white text-center">Customer Centric Partnership</h1>
                                    <p class="slider-short-desc text-white text-center">We build long lasting
                                        relationships by understanding clients’ needs <br> and offering tailored
                                        solutions with transparency and care</p>
                                    <!-- <div class="btn-wrapper">
                                  <a href="#" class="theme-btn">Learn More</a>
                                  <a href="#" class="circle-arrow-btn"><i class="fa-regular fa-arrow-right"></i></a>
                                </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- single slider end -->
    </div>
</div>
<!-- Banner Area Section End   -->

<!-- about us area start -->
<div class="about-us-area style-2 py-sm-30 py-md-80">
    <div class="container">
        <div class="row justify-content-md-around gy-5">
            <div class="col-xl-5 col-lg-6 about-us-left d-flex justify-content-center align-items-center">
                <div class="about-image-card style-2">
                    <div class="bg-wrapper wow animate__animated animate__fadeInTopLeft   animate__fast">
                        <img class="tilt-animate" src="img/torsha hand.png" alt="about us">
                    </div>
                    <div class="bottom-image-wrapper" data-wow-delay="0.3s">
                        <div class="sticky-corner top-right-corner">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35"
                                fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M35 0V35C35 15.67 19.33 0 -1.53184e-05 0H35Z" fill="white"></path>
                            </svg>
                        </div>
                        <div class="sticky-corner bottom-corner">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35"
                                fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M35 0V35C35 15.67 19.33 0 -1.53184e-05 0H35Z" fill="white"></path>
                            </svg>
                        </div>
                        <div class="bottom-image-inner">
                            <div class="article special box-shadow"
                                style="color: white;display: flex;flex-direction: column;align-items: center;text-align: center;font-size: 14px;">
                                <img src="img/s55.png" class="mb-10 award" alt="">
                                <p style="font-family: 'Montserrat'; margin: 0;">Backed by 25 years of experience in
                                    Marketing of Pharmaceutical Products</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="col-lg-6 col-xl-6 col-xxl-6 about-us-right wow animate__animated animate__fadeInUp animate__fast">
                <div class="section-title">
                    <div class="short-title-wrapper" style="text-align: start;">
                        <span class="short-title only-divider">About Us</span>
                    </div>
                    <div class="main-content">
                        <div class="sec-content">
                            <h2 class="title">
                                Welcome to TORSHAA <br> Pharma Solution LLP
                            </h2>
                            <p class="desc">
                                <!-- Torshaa Pharma is engaged in Manufacturing, Trading, Indenting, Contract Manufacturing of APIs & Intermediates, and Regulatory & GMP consultancy. Backed by experienced professionals in Manufacturing, Marketing, Sourcing, Technology, Regulatory, and Logistics, we deliver complete pharma solutions worldwide. -->
                                At Torshaa Pharma, we’re more than just a trading company. We serve as a trusted link
                                between global pharmaceutical needs and reliable, GMP-compliant supply.
                            </p>
                            <p class="desc">
                                <!-- We are closely associated with two cGMP-certified manufacturing companies for production and marketing, both equipped with auditable facilities, ISO certifications, and DMFs for all products. -->
                                We operate across key areas of the pharmaceutical industry including trading, indenting,
                                contract manufacturing, and regulatory consulting, with a special focus on APIs,
                                Pellets, Excipients and Intermediates. Our team combines deep expertise in
                                manufacturing, sourcing, marketing, compliance, and logistics, allowing us to offer
                                solutions that are both practical and dependable.
                            </p>
                            <p class="desc">
                                We work closely with two cGMP-certified manufacturing partners whose facilities meet
                                international audit standards and provide full documentation, including ISO
                                certifications and DMFs for all key products.
                            </p>
                            <p class="desc">
                                Whether you are looking to source high-quality APIs or need support with regulatory
                                documentation, our goal is simple: to make the process easier, smoother, and trustworthy
                                for you.
                            </p>
                        </div>

                        <div class="sec-desc">
                            <div class="btn-wrapper">
                                <a href="about" class="theme-btn">About Us</a>
                                <a href="about" class="circle-arrow-btn"><i class="fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about us area end -->

<!-- project area start -->
<div class="our-work style-2 py-sm-30 py-md-80 py-lg-100">
    <div class="container">
        <div class="section-title">
            <div class="short-title-wrapper">
                <span class="short-title only-divider">OUR WORK</span>
            </div>
            <div class="main-content">
                <div class="sec-content">
                    <h2 class="title">
                        Explore Our Work</h2>
                </div>
                <!-- <div class="sec-desc">
                    <div class="btn-wrapper">
                        <a href="" class="theme-btn">View All</a>
                        <a href="" class="circle-arrow-btn"><i class="fa-regular fa-arrow-right"></i></a>
                    </div>
                </div> -->
            </div>
        </div>
        <div class="row gy-4 gy-xl-0 fl">
            <div class="col-sm-6 col-lg-6 col-xl-4 pt-20 wow animate__animated animate__fadeInUp animate__faster">
                <div class="project-card style-1">
                    <div class="image">
                        <img src="img/services/manufacturing.jpg" alt="manufacturing">
                    </div>
                    <div class="main-content">
                        <div class="btn-wrapper">
                            <a href="manufacturing" class="circle-arrow-btn"><i
                                    class="fa-regular fa-arrow-right"></i></a>
                        </div>
                        <div class="shape">
                            <svg width="111" height="111" viewBox="0 0 111 111" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0 0C19.33 0 35 15.67 35 35V41C35 60.33 50.67 76 70 76H76C95.33 76 111 91.67 111 111V0H0Z"
                                    fill="white"></path>
                            </svg>
                        </div>
                        <div class="main-content-wrapper">
                            <div class="content">
                                <div class="overlay"></div>
                                <div class="content-inner">
                                    <!-- <span class="short-text">BUSINESS ARENA</span> -->
                                    <a href="manufacturing" class="title">MANUFACTURING</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-6 col-xl-4 pt-20  wow animate__animated animate__fadeInUp animate__fast">
                <div class="project-card style-1">
                    <div class="image">
                        <img src="img/services/trading-2.jpg" alt="trading">
                    </div>
                    <div class="main-content">
                        <div class="btn-wrapper">
                            <a href="trading" class="circle-arrow-btn"><i class="fa-regular fa-arrow-right"></i></a>
                        </div>
                        <div class="shape">
                            <svg width="111" height="111" viewBox="0 0 111 111" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0 0C19.33 0 35 15.67 35 35V41C35 60.33 50.67 76 70 76H76C95.33 76 111 91.67 111 111V0H0Z"
                                    fill="white"></path>
                            </svg>
                        </div>
                        <div class="main-content-wrapper">
                            <div class="content">
                                <div class="overlay"></div>
                                <div class="content-inner">
                                    <!-- <span class="short-text">BUSINESS ARENA</span> -->
                                    <a href="trading" class="title">TRADING & INDENTING</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-6 col-xl-4 pt-20 wow animate__animated animate__fadeInUp animate__slower">
                <div class="project-card style-1">
                    <div class="image">
                        <img src="img/services/formulation.png" alt="formulation">
                    </div>
                    <div class="main-content">
                        <div class="btn-wrapper">
                            <a href="formulation" class="circle-arrow-btn"><i class="fa-regular fa-arrow-right"></i></a>
                        </div>
                        <div class="shape">
                            <svg width="111" height="111" viewBox="0 0 111 111" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0C19.33 0 35 15.67 35 35V41C35 60.33 50.67 76 70 76H76C95.33 76 111 91.67 111 111V0H0Z" fill="white"></path>
                            </svg>
                        </div>
                        <div class="main-content-wrapper">
                            <div class="content">
                                <div class="overlay"></div>
                                <div class="content-inner">
                                    <!-- <span class="short-text">BUSINESS ARENA</span> -->
                                    <a href="formulation" class="title">FINISHED DOSAGE FORMS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-6 col-xl-4 pt-20 wow animate__animated animate__fadeInUp animate__slow">
                <div class="project-card style-1">
                    <div class="image">
                        <img src="img/services/contract.jpg" alt="contract">
                    </div>
                    <div class="main-content">
                        <div class="btn-wrapper">
                            <a href="contract" class="circle-arrow-btn"><i class="fa-regular fa-arrow-right"></i></a>
                        </div>
                        <div class="shape">
                            <svg width="111" height="111" viewBox="0 0 111 111" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0 0C19.33 0 35 15.67 35 35V41C35 60.33 50.67 76 70 76H76C95.33 76 111 91.67 111 111V0H0Z"
                                    fill="white"></path>
                            </svg>
                        </div>
                        <div class="main-content-wrapper">
                            <div class="content">
                                <div class="overlay"></div>
                                <div class="content-inner">
                                    <!-- <span class="short-text">BUSINESS ARENA</span> -->
                                    <a href="contract" class="title">CONTRACT MANUFACTURING</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-6 col-xl-4 pt-20 wow animate__animated animate__fadeInUp animate__slower">
                <div class="project-card style-1">
                    <div class="image">
                        <img src="img/services/consultancy.png" alt="consultancy">
                    </div>
                    <div class="main-content">
                        <div class="btn-wrapper">
                            <a href="consultancy" class="circle-arrow-btn"><i class="fa-regular fa-arrow-right"></i></a>
                        </div>
                        <div class="shape">
                            <svg width="111" height="111" viewBox="0 0 111 111" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0 0C19.33 0 35 15.67 35 35V41C35 60.33 50.67 76 70 76H76C95.33 76 111 91.67 111 111V0H0Z"
                                    fill="white"></path>
                            </svg>
                        </div>
                        <div class="main-content-wrapper">
                            <div class="content">
                                <div class="overlay"></div>
                                <div class="content-inner">
                                    <!-- <span class="short-text">BUSINESS ARENA</span> -->
                                    <a href="consultancy" class="title">CONSULTANCY</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             
        </div>
    </div>
</div>
<!-- project area end -->

<!-- Production Area Start -->
<div class="product-area style-2 py-sm-30 py-md-80 py-lg-100">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <div class="section-title w-100">
                    <div class="short-title-wrapper text-center">
                        <span class="short-title only-divider">OUR Products</span>
                    </div>
                    <div class="main-content">
                        <div class="sec-content w-100 text-center">
                            <h2 class="title">
                                Explore Our Products
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row gy-4 gy-xl-0">
            <div class="col-xl-3 col-lg-3 col-sm-6 wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
                <a href="api">
                    <div class="flip-image-card">
                        <div class="flip-box">
                            <div class="image flip-front" style="background-image: url('img/products/1.png');">
                                <div class="overlay"></div>
                                <div class="inner">
                                    <h3 class="number">API</h3>
                                </div>
                            </div>
                            <div class="image flip-back" style="background-image: url('img/products/2.png');">
                                <div class="overlay"></div>
                                <div class="inner">
                                    <h3 class="number">API</h3>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="box-item-content">
                            <h4 class="name">API</h4>
                            <p class="sub-title">Organic</p>
                        </div> -->
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-sm-6 wow animate__animated animate__fadeInUp" data-wow-delay="0.8s">
                <a href="pellets">
                    <div class="flip-image-card">
                        <div class="flip-box">
                            <div class="image flip-front" style="background-image: url('img/products/3.png');">
                                <div class="overlay"></div>
                                <div class="inner">
                                    <h3 class="number">PELLETS</h3>
                                </div>
                            </div>
                            <div class="image flip-back" style="background-image: url('img/products/4.png');">
                                <div class="overlay"></div>
                                <div class="inner">
                                    <h3 class="number">PELLETS</h3>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="box-item-content">
                            <h4 class="name">PELLETS</h4>
                            <p class="sub-title">Organic</p>
                        </div> -->
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-sm-6 wow animate__animated animate__fadeInUp" data-wow-delay="1.2s">
                <a href="excipients">
                    <div class="flip-image-card">
                        <div class="flip-box">
                            <div class="image flip-front" style="background-image: url('img/products/5.png');">
                                <div class="overlay"></div>
                                <div class="inner">
                                    <h3 class="number">EXCIPIENTS</h3>
                                </div>
                            </div>
                            <div class="image flip-back" style="background-image: url('img/products/6.png');">
                                <div class="overlay"></div>
                                <div class="inner">
                                    <h3 class="number">EXCIPIENTS</h3>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="box-item-content">
                            <h4 class="name">EXCIPIENTS</h4>
                            <p class="sub-title">Organic</p>
                        </div> -->
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-sm-6 wow animate__animated animate__fadeInUp" data-wow-delay="1.4s">
                <a href="intermediate">
                    <div class="flip-image-card">
                        <div class="flip-box">
                            <div class="image flip-front" style="background-image: url('img/products/7.png');">
                                <div class="overlay"></div>
                                <div class="inner">
                                    <h3 class="number">INTERMEDIATE</h3>
                                </div>
                            </div>
                            <div class="image flip-back" style="background-image: url('img/products/8.png');">
                                <div class="overlay"></div>
                                <div class="inner">
                                    <h3 class="number">INTERMEDIATE</h3>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="box-item-content">
                        <h4 class="name">INTERMEDIATE</h4>
                        <p class="sub-title">Organic</p>
                    </div> -->
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Production Area End -->

<!-- Feature Area Start Style-1 -->
<div class="faq-area style-2 pb-80 py-sm-30 py-md-80 py-lg-100">
    <div class="container">
        <div class="section-title">
            <div class="short-title-wrapper">
                <span class="short-title only-divider">OUR CORE MANUFACTURERS</span>
            </div>
            <div class="main-content">
                <div class="sec-content">
                    <h2 class="title">
                        Torshaa works with two API firms for quality and trust.</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="project-cards">
                    <div class="img-wrapper">
                        <img src="img/client.png" alt="Creative Project Image">
                        <!-- <div class="btn-wrapper">
                            <a href="" target="_blank" class="theme-btn">Visit Our Website</a>
                        </div> -->
                    </div>
                    <h4 class="title d-flex align-items-center justify-content-center">
                        <img style="width: 50px; padding-right: 10px" src="img/client logo 1.png" alt="logo">
                        <a href="">Vaasavaa Pharmaceuticals</a>
                    </h4>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="project-cards">
                    <div class="img-wrapper">
                        <img src="img/client-2.png" alt="Business Project Image">
                        <!-- <div class="btn-wrapper">
                            <a href="" target="_blank" class="theme-btn">Visit Our Website</a>
                        </div> -->
                    </div>
                    <h4 class="title d-flex align-items-center justify-content-center">
                        <img style="width: 50px; padding-right: 10px" src="img/client logo 2.png" alt="logo">
                        <a href="">Karunesh Remedies</a>
                    </h4>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature Area End Style-1 !-->

<!-- Testimonial Area Start Style-2 -->
<!-- <div class="testimonial-slider-area style-2 py-sm-30 py-md-80 py-lg-100 overflow-hidden">
    <div class="container">
        <div class="section-title">
            <div class="short-title-wrapper">
                <span class="short-title only-divider">testimonial</span>
            </div>
            <div class="main-content">
                <div class="sec-content">
                    <h2 class="title">
                        Some of our clients <br> reviews</h2>
                </div>
                <div class="sec-desc">
                    <div class="slider-nav-btn-wrapper">
                        <a href="#" class="slider-nav-prev-btn testimonial_two_prev_btn" id="#testimonial_two_prev_btn"><i
                                class="fa-solid fa-arrow-left"></i></a>
                        <a href="#" class="slider-nav-next-btn testimonial_two_next_btn" id="#testimonial_two_next_btn"><i
                                class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-area-wrapper">
            <div class="testimonial-slider-wrapper style-2" id="testimonial_style_two">
                <div class="slick-item wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
                    <div class="testimonial-card style-2">
                        <div class="btn-wrapper">
                            <a class="circle-arrow-btn"><i class="fa-solid fa-quote-left"></i></a>
                        </div>
                        <div class="shape">
                            <svg width="111" height="111" viewBox="0 0 111 111" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0 0C19.33 0 35 15.67 35 35V41C35 60.33 50.67 76 70 76H76C95.33 76 111 91.67 111 111V0H0Z"
                                    fill="white" />
                            </svg>
                        </div>
                        <div class="content-wrapper">
                            <div class="rating-icon">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <p class="description">Liber iriure vix cu, fugit dicat no qui, posse detraxit has cu.
                                Ex sint impedit vim,autem justo oportere no vel. Cu esse tacimates moderatius sed.
                                Liber iriure vix cu, fugit dicat no qui, posse detraxit has cu.</p>
                        </div>
                        <div class="user-info-wrapper">
                            <div class="user-img">
                                <img src="images/testimonial/v-2/img-1.jpg" alt="client photo">
                            </div>
                            <div class="user-meta">
                                <h4 class="name">Joel Yamaha, PHD</h4>
                                <p class="designation">DevOps Lead Engineer</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick-item wow animate__animated animate__fadeInUp" data-wow-delay="0.8s">
                    <div class="testimonial-card style-2">
                        <div class="btn-wrapper">
                            <a class="circle-arrow-btn"><i class="fa-solid fa-quote-left"></i></a>
                        </div>
                        <div class="shape">
                            <svg width="111" height="111" viewBox="0 0 111 111" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0 0C19.33 0 35 15.67 35 35V41C35 60.33 50.67 76 70 76H76C95.33 76 111 91.67 111 111V0H0Z"
                                    fill="white" />
                            </svg>
                        </div>
                        <div class="content-wrapper">
                            <div class="rating-icon">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <p class="description">Liber iriure vix cu, fugit dicat no qui, posse detraxit has cu.
                                Ex sint impedit vim,autem justo oportere no vel. Cu esse tacimates moderatius sed.
                                Liber iriure vix cu, fugit dicat no qui, posse detraxit has cu.</p>
                        </div>
                        <div class="user-info-wrapper">
                            <div class="user-img">
                                <img src="images/testimonial/v-2/img-2.jpg" alt="client photo">
                            </div>
                            <div class="user-meta">
                                <h4 class="name">Jeson Zoa</h4>
                                <p class="designation">Marketing Coordinator</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick-item wow animate__animated animate__fadeInUp" data-wow-delay="1s">
                    <div class="testimonial-card style-2">
                        <div class="btn-wrapper">
                            <a class="circle-arrow-btn"><i class="fa-solid fa-quote-left"></i></a>
                        </div>
                        <div class="shape">
                            <svg width="111" height="111" viewBox="0 0 111 111" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0 0C19.33 0 35 15.67 35 35V41C35 60.33 50.67 76 70 76H76C95.33 76 111 91.67 111 111V0H0Z"
                                    fill="white" />
                            </svg>
                        </div>
                        <div class="content-wrapper">
                            <div class="rating-icon">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <p class="description">Liber iriure vix cu, fugit dicat no qui, posse detraxit has cu.
                                Ex sint impedit vim,autem justo oportere no vel. Cu esse tacimates moderatius sed.
                                Liber iriure vix cu, fugit dicat no qui, posse detraxit has cu.</p>
                        </div>
                        <div class="user-info-wrapper">
                            <div class="user-img">
                                <img src="images/testimonial/v-2/img-3.jpg" alt="client photo">
                            </div>
                            <div class="user-meta">
                                <h4 class="name">Savannah Nguyen</h4>
                                <p class="designation">Marketing Coordinator</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick-item wow animate__animated animate__fadeInUp" data-wow-delay="1.2s">
                    <div class="testimonial-card style-2">
                        <div class="btn-wrapper">
                            <a class="circle-arrow-btn"><i class="fa-solid fa-quote-left"></i></a>
                        </div>
                        <div class="shape">
                            <svg width="111" height="111" viewBox="0 0 111 111" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0 0C19.33 0 35 15.67 35 35V41C35 60.33 50.67 76 70 76H76C95.33 76 111 91.67 111 111V0H0Z"
                                    fill="white" />
                            </svg>
                        </div>
                        <div class="content-wrapper">
                            <div class="rating-icon">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <p class="description">Liber iriure vix cu, fugit dicat no qui, posse detraxit has cu.
                                Ex sint impedit vim,autem justo oportere no vel. Cu esse tacimates moderatius sed.
                                Liber iriure vix cu, fugit dicat no qui, posse detraxit has cu.</p>
                        </div>
                        <div class="user-info-wrapper">
                            <div class="user-img">
                                <img src="images/testimonial/v-2/img-1.jpg" alt="client photo">
                            </div>
                            <div class="user-meta">
                                <h4 class="name">Joel Yamaha, PHD</h4>
                                <p class="designation">Marketing Coordinator</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick-item wow animate__animated animate__fadeInUp" data-wow-delay="1.4s">
                    <div class="testimonial-card style-2">
                        <div class="btn-wrapper">
                            <a class="circle-arrow-btn"><i class="fa-solid fa-quote-left"></i></a>
                        </div>
                        <div class="shape">
                            <svg width="111" height="111" viewBox="0 0 111 111" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0 0C19.33 0 35 15.67 35 35V41C35 60.33 50.67 76 70 76H76C95.33 76 111 91.67 111 111V0H0Z"
                                    fill="white" />
                            </svg>
                        </div>
                        <div class="content-wrapper">
                            <div class="rating-icon">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <p class="description">Liber iriure vix cu, fugit dicat no qui, posse detraxit has cu.
                                Ex sint impedit vim,autem justo oportere no vel. Cu esse tacimates moderatius sed.
                                Liber iriure vix cu, fugit dicat no qui, posse detraxit has cu.</p>
                        </div>
                        <div class="user-info-wrapper">
                            <div class="user-img">
                                <img src="images/testimonial/v-2/img-2.jpg" alt="client photo">
                            </div>
                            <div class="user-meta">
                                <h4 class="name">Jeson Zoa</h4>
                                <p class="designation">Marketing Coordinator</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick-item wow animate__animated animate__fadeInUp" data-wow-delay="1.6s">
                    <div class="testimonial-card style-2">
                        <div class="btn-wrapper">
                            <a class="circle-arrow-btn"><i class="fa-solid fa-quote-left"></i></a>
                        </div>
                        <div class="shape">
                            <svg width="111" height="111" viewBox="0 0 111 111" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0 0C19.33 0 35 15.67 35 35V41C35 60.33 50.67 76 70 76H76C95.33 76 111 91.67 111 111V0H0Z"
                                    fill="white" />
                            </svg>
                        </div>
                        <div class="content-wrapper">
                            <div class="rating-icon">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <p class="description">Liber iriure vix cu, fugit dicat no qui, posse detraxit has cu.
                                Ex sint impedit vim,autem justo oportere no vel. Cu esse tacimates moderatius sed.
                                Liber iriure vix cu, fugit dicat no qui, posse detraxit has cu.</p>
                        </div>
                        <div class="user-info-wrapper">
                            <div class="user-img">
                                <img src="images/testimonial/v-2/img-3.jpg" alt="client photo">
                            </div>
                            <div class="user-meta">
                                <h4 class="name">Savannah Nguyen</h4>
                                <p class="designation">Marketing Coordinator</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Testimonial Area End Style-2 -->

<!-- Faq Area Start -->
<!-- <div class="faq-area style-2 pb-80 py-sm-30 py-md-80 py-lg-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <div class="short-title-wrapper">
                        <span class="short-title only-divider">OUR REACH</span>
                    </div>
                    <div class="main-content">
                        <div class="sec-content">
                            <h2 class="title">
                                Serving Clients Across the Globe
                            </h2>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row gy-5 gy-lg-0">
            <div class="col-lg-6 col-xxl-7 wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
                <div class="image tilt-animate border">
                    <img src="img/Map.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-xxl-5">
                <div class="accordion-wrapper style-one">
                    <div class="accordion-box-wrapper" id="serviceDetailsFAQ" style="height: auto;">
                        <div class="accordion-list-item wow animate__animated animate__flipInX  animate__fast">
                            <div id="headingOne">
                                <div class="accordion-head" role="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    <h3 class="accordion-title">🌎 Americas</h3>
                                </div>
                            </div>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#serviceDetailsFAQ">
                                <div class="accordion-item-body">
                                    <ul>
                                        <li>
                                            South America:Argentina, Bolivia, Brazil, Uruguay
                                        </li>
                                        <li>
                                            Caribbean: Dominican Republic
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-list-item wow animate__animated animate__flipInX  animate__fast">
                            <div id="headingTwo">
                                <div class="accordion-head collapsed" role="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <h3 class="accordion-title">🌍 Asia</h3>
                                </div>
                            </div>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#serviceDetailsFAQ">
                                <div class="accordion-item-body">
                                    <ul>
                                        <li>
                                            South Asia: Bangladesh, India, Pakistan
                                        </li>
                                        <li>
                                            East Asia: China
                                        </li>
                                        <li>
                                            Southeast Asia: Thailand
                                        </li>
                                        <li>
                                            Middle East: Saudi Arabia
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-list-item wow animate__animated animate__flipInX  animate__fast">
                            <div id="headingThree">
                                <div class="accordion-head collapsed" role="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    <h3 class="accordion-title">🌍 Europe</h3>
                                </div>
                            </div>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="headingThree" data-bs-parent="#serviceDetailsFAQ">
                                <div class="accordion-item-body">
                                    <ul>
                                        <li>
                                            France
                                        </li>
                                        <li>
                                            Poland
                                        </li>
                                        <li>
                                            Switzerland
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Faq Area End -->

<?php include('layouts/footer.php'); ?>