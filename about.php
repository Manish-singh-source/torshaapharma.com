<?php
$currentPage = 'about';
$title = 'About Us';
include('layouts/header-2.php'); ?>

<style>
  .icon-card {
    background: #fff;
    border-radius: 12px;
    padding: 20px;
    text-align: center;
    transition: all 0.4s ease;
    /* smooth transition */
    cursor: pointer;
  }

  .icon-card .icon img {
    transition: transform 0.4s ease;
  }

  .icon-card:hover {
    transform: translateY(-2px) scale(1.0);
    box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
  }

  .icon-card:hover .icon img {
    transform: rotate(10deg) scale(1.1);
  }

  .icon-card h4 {
    transition: color 0.4s ease;
  }

  .icon-card:hover h4 {
    color: #007bff;
    /* change heading color on hover */
  }

  /* h2 {
    font-size: 34px;
    font-weight: 600;
    line-height: 45px;
    letter-spacing: -0.72px;
  }

  .section-title .sec-content .desc {
    margin-top: 12px;
    margin-bottom: 0;
  } */






  .stats-section {
    text-align: center;
    padding: 40px 20px 0px 0px;
    background: #fff;
    font-family: "Segoe UI", sans-serif;
  }

  .stats-title {
    font-size: 26px;
    font-weight: 700;
    color: #111;
    margin-bottom: 30px;
  }

  .stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
    max-width: 1000px;
    margin: 35px auto 15px;
  }

  .stat-card {
    background: #f9f9f9;
    padding: 25px;
    border-radius: 12px;
    box-shadow: 0 2px 8px rgb(0 0 0 / 45%);
    transition: transform 0.3s ease;
  }

  .stat-card:hover {
    transform: translateY(-5px);
  }

  .stat-card h3 {
    font-size: 32px;
    font-weight: 700;
    color: #7ECAEB;
    margin-bottom: 8px;
  }

  .stat-card p {
    font-size: 16px;
    color: #555;
    margin: 0;
  }

  .stats-section .section-title {
    margin-bottom: 0px;
  }


  /* Extra small devices (phones, portrait, less than 576px) */
  @media only screen and (max-width: 575px) {
    /* your css here */
  }

  /* Small devices (phones, landscape, 576px to 767px) */
  @media only screen and (min-width: 576px) and (max-width: 767px) {
    /* your css here */
  }

  /* Medium devices (tablets, 768px to 991px) */
  @media only screen and (min-width: 768px) and (max-width: 991px) {
    .stat-card p {
      font-size: 16px;
      color: #555;
      margin: 0;
    }
  }

  /* Large devices (desktops, 992px to 1199px) */
  @media only screen and (min-width: 992px) and (max-width: 1199px) {
   .stat-card p {
      font-size: 20px;
      color: #555;
      margin: 0;
    }
  }

  /* Extra large devices (large desktops, 1200px to 1399px) */
  @media only screen and (min-width: 1200px) and (max-width: 1399px) {
    .stat-card p {
      font-size: 25px;
      color: #555;
      margin: 0;
    }
  }

  /* Extra extra large devices (very large desktops, 1400px and above) */
  @media only screen and (min-width: 1400px) {
    .stat-card p {
      font-size: 25px;
      color: #555;
      margin: 0;
    }
  }
</style>

<!-- Page Header Start !-->
<?php
$title = 'about us';
include('layouts/breadcrumb.php');
?>

<!-- Video Popup Area Start -->
<!-- <div class="video-popup-area style-1">
  <div class="container">
    <div class="video-popup-card">
      <div class="image tilt-animate" style="background-image: url('images/section-bg/video-popup-card-bg.jpg');">
        <div class="overlay"></div>
      </div>
      <div class="content">
        <a href="https://www.youtube.com/watch?v=SZEflIVnhH8" class="short-btn  video-play">Watch video</a>
        <h2 class="title">Accurate product testing by <br> expert scientists</h2>
      </div>
      <div class="video-popup-btn">
        <a href="https://www.youtube.com/watch?v=SZEflIVnhH8" class="mfp-iframe video-play">
          <i style="color: white;" class="fa-solid fa-play"></i>
        </a>
      </div>
    </div>
  </div>
</div> -->
<!-- Video Popup Area End -->


<!-- about us area start -->
<div class="about-us-area style-2 py-sm-30 py-md-80 py-lg-100">
  <div class="container">
    <div class="row justify-content-md-around gy-5">
      <div class="col-xl-5 col-lg-5">
        <div class="about-image-card style-2">
          <div class="bg-wrapper wow animate__animated animate__fadeInTopLeft   animate__fast">
            <img class="tilt-animate" src="img/torsha hand.png" alt="">
          </div>
          <!-- <div class="bottom-image-wrapper">
            <div class="sticky-corner top-right-corner">
              <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M35 0V35C35 15.67 19.33 0 -1.53184e-05 0H35Z" fill="white"></path>
              </svg>
            </div>
            <div class="sticky-corner bottom-corner">
              <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M35 0V35C35 15.67 19.33 0 -1.53184e-05 0H35Z" fill="white"></path>
              </svg>
            </div>
            <div class="bottom-image-inner">
              <div class="card-text">
                <h3 class="title">Soil research</h3>
                <div class="btn-wrapper">
                  <a href="#" class="circle-arrow-btn">
                    <i style="color: rgb(33, 52, 95);" class="fa-regular fa-arrow-right"></i>
                  </a>
                </div>
              </div>
              <div class="bottom-image" style="background-image: url(images/info-card/image-1.jpg);">
                <div class="video-card-wrapper">
                  <div class="video-popup-btn">
                    <a href="https://www.youtube.com/watch?v=SZEflIVnhH8" class="mfp-iframe video-play">
                      <i class="fa-solid fa-play"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
        </div>
      </div>
      <div class="col-lg-7 col-xl-6 col-xxl-6 wow animate__animated animate__fadeInUp   animate__fast">
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
                Torshaa Pharma Solution LLP, headquartered in Mumbai, is a pharma trading company built on experience, expertise, and a passion for serving customers across the globe. Founded by professionals with over 25 years of experience in global pharmaceutical marketing and operations, we bring deep industry knowledge and practical solutions to businesses around the world.
              </p>
              <p class="desc">
                We offer a comprehensive range of services spanning the pharmaceutical supply chain, including <strong>Manufacturing </strong>, <strong>Trading & Indenting </strong>, <strong>Contract Manufacturing </strong>, <strong>Regulatory and Commercial Consultancy </strong>, <strong>GMP Audits </strong>
              </p>
              <p class="desc">
                Our team combines specialists from manufacturing, marketing, sourcing, technology, regulatory affairs, and logistics, enabling us to address diverse challenges and offer tailored solutions. By leveraging this collective expertise, we support businesses in expanding their reach and operating smoothly in international markets.
              </p>
            </div>

            <div class="sec-desc">
              <div class="btn-wrapper">
                <a href="contact.php" class="theme-btn">Get In Touch</a>
                <a href="contact.php" class="circle-arrow-btn"><i class="fa-regular fa-arrow-right"></i></a>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- about us area end -->

<!-- <section class="about-us-area style-2 py-sm-30 py-md-80 py-lg-100">
  <div class="container">

    <div class="section-title row justify-content-center">
      <div class="col-xl-12">
        <div class="ins-title text-center">
          <span class="crm-subtitle ">Mission &amp; Vision </span>
          <h2 class="title">
            Our Purpose & Principles
          </h2>
        </div>
      </div>
    </div>
    <div class="mt-5">
      <div class="row justify-content-center g-4">
        <div class="col-xl-4 col-lg-4">
          <div class="ins-service-card dphg-500 text-center py-5 px-4 bg-light rounded-1 dp-r-10">
            <img src="img/icons/mission.png" alt="mission" class="img-fluid">
            <a href="javascript:void(0);">
              <h5 class="mt-4 mb-3 ins-heading">Mission</h5>
            </a>
            <p class="mb-4 ins-text">Deliver high-quality pharmaceutical solutions with innovation, expertise, and compliance to support global healthcare.</p>

          </div>
        </div>
        <div class="col-xl-4 col-lg-4">
          <div class="ins-service-card dphg-500 text-center py-5 px-4 bg-light rounded-1 dp-r-10">
            <img src="img/icons/vision.png" alt="vision" class="img-fluid">
            <a href="javascript:void(0);">
              <h5 class="mt-4 mb-3 ins-heading">Vision</h5>
            </a>
            <p class="mb-4 ins-text">Be a trusted global partner in pharmaceuticals by offering complete solutions in manufacturing, trading, consultancy, and regulatory services.</p>

          </div>
        </div>
        <div class="col-xl-4 col-lg-4">
          <div class="ins-service-card dphg-500 text-center py-5 px-4 bg-light rounded-1 dp-r-10">
            <img src="img/icons/value.png" alt="values" class="img-fluid">
            <a href="javascript:void(0);">
              <h5 class="mt-4 mb-3 ins-heading">Values</h5>
            </a>
            <p class="mb-4 ins-text">Operate with integrity, ensure quality, drive innovation, foster collaboration, and stay committed to customer success.</p>

          </div>
        </div>
      </div>

    </div>
  </div>
</section> -->

<!-- about-info area start -->
<div class="contact-info-area py-sm-30 py-md-80 py-lg-50">
  <div class="container">
    <div class="section-title row justify-content-center">
      <div class="col-xl-12">
        <div class="ins-title text-center">
          <!-- <span class="crm-subtitle ">Mission &amp; Vision </span> -->
          <h2 class="title mb-lg-4">
            Our Purpose & Principles
          </h2>
        </div>
      </div>
    </div>
    <div class="row gy-5 gy-lg-0 d-flex gap-4 gap-md-0 mt-1 justify-content-center">
      <div class="col-12 col-lg-6 px-md-3">
        <div class="icon-card style-1 ">
          <div class="icon">
            <img src="img/icons/mission-1.png" style="width: 50px;" alt="">
          </div>
          <div class="content">
            <h4>Mission</h4>
            <p class="mb-4 ins-text">To support our clients with end-to-end pharma solutions from sourcing and contract manufacturing to regulatory guidance all with clarity, speed, and honesty</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6 px-md-3">
        <div class="icon-card style-1 ">
          <div class="icon">
            <img src="img/icons/vision-1.png" style="width: 50px;" alt="">
          </div>
          <div class="content">
            <h4>Vision</h4>
            <p class="mb-4 ins-text">To make pharmaceutical sourcing seamless, trustworthy, and truly collaborative for companies worldwide</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- about-info area end -->

<!-- Video Popup Area Start -->
<div class="video-popup-area ">
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
    <div class="video-popup-card wow animate__animated animate__fadeInUp  " data-wow-delay="0.4s">
      <div class="image" style="background-image: url('img/map-2.jpg');">
        <div class="overlay"></div>
      </div>
    </div>
  </div>
</div>
<!-- Video Popup Area End -->

<section class="stats-section section-title">
  <div class="container">
    <!-- <div class="main-content text-center mb-4">
      <div class="sec-content">
        <h2 class="title">
          Our Achievements
        </h2>
      </div>
    </div> -->

    <div class="row justify-content-center">
      <div class="col-6 col-sm-6 col-md-3 mb-4">
        <div class="stat-card text-center">
          <h3 class="counter" data-target="200">0</h3>
          <p>API</p>
        </div>
      </div>
      <div class="col-6 col-sm-6 col-md-3 mb-4">
        <div class="stat-card text-center">
          <h3 class="counter" data-target="80">0</h3>
          <p>Pellets</p>
        </div>
      </div>
      <div class="col-6 col-sm-6 col-md-3 mb-4">
        <div class="stat-card text-center">
          <h3 class="counter" data-target="70">0</h3>
          <p>Excipients</p>
        </div>
      </div>
      <div class="col-6 col-sm-6 col-md-3 mb-4">
        <div class="stat-card text-center">
          <h3 class="counter" data-target="130">0</h3>
          <p>Intermediates</p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Brand Slider Area Start -->
<!-- <div class="brand-slider-area style-1">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="client-logo-slider-wrapper">
          <div class="slick-item">
            <div class="client-logo-wrapper">
              <div class="client-logo">
                <img src="images/brand-logo/client-1.png" alt="logo" />
              </div>
            </div>
          </div>
          <div class="slick-item">
            <div class="client-logo-wrapper">
              <div class="client-logo">
                <img src="images/brand-logo/client-2.png" alt="logo" />
              </div>
            </div>
          </div>
          <div class="slick-item">
            <div class="client-logo-wrapper">
              <div class="client-logo">
                <img src="images/brand-logo/client-3.png" alt="logo" />
              </div>
            </div>
          </div>
          <div class="slick-item">
            <div class="client-logo-wrapper">
              <div class="client-logo">
                <img src="images/brand-logo/client-4.png" alt="logo" />
              </div>
            </div>
          </div>
          <div class="slick-item">
            <div class="client-logo-wrapper">
              <div class="client-logo">
                <img src="images/brand-logo/client-5.png" alt="logo" />
              </div>
            </div>
          </div>
          <div class="slick-item">
            <div class="client-logo-wrapper">
              <div class="client-logo">
                <img src="images/brand-logo/client-6.png" alt="logo" />
              </div>
            </div>
          </div>
          <div class="slick-item">
            <div class="client-logo-wrapper">
              <div class="client-logo">
                <img src="images/brand-logo/client-1.png" alt="logo" />
              </div>
            </div>
          </div>
          <div class="slick-item">
            <div class="client-logo-wrapper">
              <div class="client-logo">
                <img src="images/brand-logo/client-2.png" alt="logo" />
              </div>
            </div>
          </div>
          <div class="slick-item">
            <div class="client-logo-wrapper">
              <div class="client-logo">
                <img src="images/brand-logo/client-3.png" alt="logo" />
              </div>
            </div>
          </div>
          <div class="slick-item">
            <div class="client-logo-wrapper">
              <div class="client-logo">
                <img src="images/brand-logo/client-4.png" alt="logo" />
              </div>
            </div>
          </div>
          <div class="slick-item">
            <div class="client-logo-wrapper">
              <div class="client-logo">
                <img src="images/brand-logo/client-5.png" alt="logo" />
              </div>
            </div>
          </div>
          <div class="slick-item">
            <div class="client-logo-wrapper">
              <div class="client-logo">
                <img src="images/brand-logo/client-6.png" alt="logo" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->
<!-- Brand Slider Area End -->


<script>
  document.addEventListener("DOMContentLoaded", () => {
    const counters = document.querySelectorAll(".counter");
    const speed = 200; // lower = faster
    const section = document.querySelector(".stats-section");
    let started = false;

    const startCounting = () => {

      counters.forEach(counter => {
        let count = 0;
        const target = +counter.getAttribute("data-target");
        const updateCount = () => {
          // Get current count as a number, default to 0
          const increment = Math.ceil(target / speed);
          if (count < target) {
            counter.innerText = count + increment;
            count = count + increment;
            setTimeout(updateCount, 20);
          } else {
            counter.innerText = target + " +";
            count += increment;

          }
        };
        updateCount();
      });
    };

    const isSectionVisible = () => {
      const sectionTop = section.getBoundingClientRect().top;
      return sectionTop < window.innerHeight - 100;
    };

    window.addEventListener("scroll", () => {
      if (!started && isSectionVisible()) {
        startCounting();
        started = true;
      }
    });
  });
</script>


<?php include('layouts/footer.php'); ?>