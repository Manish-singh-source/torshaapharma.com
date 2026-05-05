<?php
$currentPage = 'contact';
$title = 'Contact Us';
include('layouts/header-2.php'); ?>


<!-- CSS -->
<style>
    .hide {
        display: none;
    }

    .error {
        border-color: red;
    }

    #valid-msg {
        color: green;
        font-weight: 600;
        margin-left: 5px;
    }

    #error-msg {
        color: red;
        font-weight: 600;
        margin-left: 5px;
    }

    .iti {
        width: 100%;
    }
</style>

<!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@25.11.2/build/css/intlTelInput.css">
<style>
    .google-map-iframe {
        position: relative;
        width: 100%;
        height: 60vh;
        /* 50% of viewport height */
        overflow: hidden;
        border-radius: 8px;
        /* optional */
    }

    .google-map-iframe iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        /* fill parent */
        border: 0;
    }
</style>

<div class="body-overlay"></div>

<!-- Page Header Start !-->
<?php
$title = 'contact';
include('layouts/breadcrumb.php');
?>


<!-- Contact Form Area Start -->
<div class="contact-form-area style-2 py-sm-60 py-md-80 py-lg-100">
    <div class="container">
        <div class="shape-overlay-wrapper">
            <div class="shape-overlay">
                <div class="shape-one">
                    <div class="sticky-left">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M35 0V35C35 15.67 19.33 0 -1.53184e-05 0H35Z" fill="white" />
                        </svg>
                    </div>
                    <div class="sticky-right">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M35 0V35C35 15.67 19.33 0 -1.53184e-05 0H35Z" fill="white" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="image">
                    <img class="tilt-animate" src="img/Contact Us.png" alt="contact form image">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="comment-respond">
                    <div class="post-comments-title">
                        <h2>GET IN TOUCH</h2>
                    </div>
                    <form action="send2" method="POST">
                        <div class="row gx-2">

                            <div class="col-xl-6">
                                <div class="input-group mb-3">
                                    <input type="text" name="name" class="form-control" required="" placeholder="Name" aria-label="Name">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="input-group mb-3">
                                    <input type="email" name="email" class="form-control" required="" placeholder="Email Id" aria-label="Email">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="input-group mb-3">
                                    <input id="phone" class="form-control" required="" name="contact" type="tel" placeholder="Phone Number" style="width: 100%;">
                                    <span id="valid-msg" class="hide">✓ Valid</span>
                                    <span id="error-msg" class="hide"></span>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="input-group mb-3">
                                    <input type="text" name="company" class="form-control" required="" placeholder="Company Name" aria-label="Company Name">
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="contacts-message">
                                    <textarea name="message" cols="20" rows="3" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <input type="text" name="hidden_field" style="display:none;" tabindex="-1">
                                    <div class="col-12">
                                        <div class="g-recaptcha" data-sitekey="6LfDROArAAAAAFpY07YijX1FLOqwNPMoxj7w_yro"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 submit-button">
                                <button type="submit" class="theme-btn text-white">Submit Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Form Area End -->

<!-- Contact-info area start -->
<!-- <div class="contact-info-area py-80">
    <div class="container">
        <div class="row gy-4 gy-lg-0">
            <div class="col-lg-4">
                <div class="icon-card style-1">
                    <div class="icon">
                        <img src="images/icon/icon-1.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Contact</h3>
                        <div class="desc">
                            <a href="tel:+918080803374"> +91 8080 80 3374</a>
                            <a href="tel:+918080803374"> +91 8080 80 3374</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="icon-card style-1">
                    <div class="icon">
                        <img src="images/icon/icon-2.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Mail</h3>
                        <div class="desc">
                            <a href="mailto:torshaa@torshaapharma.com">torshaa@torshaapharma.com</a>
                            <a href="mailto:torshaa@torshaapharma.com">torshaa@torshaapharma.com</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="icon-card style-1">
                    <div class="icon">
                        <img src="images/icon/icon-3.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Address</h3>
                        <div class="desc">
                            <p>Office No. 501, Ghanshyam Enclave, Kandivali (West), <br> Mumbai - 67.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Contact-info area end -->

<!-- <div class="google-map pb-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="google-map-iframe">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4508.63022816885!2d72.834512!3d19.2029945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b6ca84bfbc29%3A0xc30408ca949bffb8!2sTechnofra%20%7C%20Web%20Development%20%7C%20Digital%20Marketing%20Agency%20in%20Mumbai!5e1!3m2!1sen!2sin!4v1756878218690!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</div> -->

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

<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@25.11.2/build/js/intlTelInput.min.js"></script>

<script>
    const input = document.querySelector("#phone");
    const errorMsg = document.querySelector("#error-msg");
    const validMsg = document.querySelector("#valid-msg");
    const form = document.querySelector("form");

    // Error messages for different validation states
    const errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];

    // Initialize intl-tel-input plugin
    const iti = window.intlTelInput(input, {
        allowDropdown: true,
        separateDialCode: true,
        loadUtils: () => import("https://cdn.jsdelivr.net/npm/intl-tel-input@25.11.2/build/js/utils.js"),
        // No initial country - force user to select
    });

    let countrySelected = false;

    const reset = () => {
        input.classList.remove("error");
        errorMsg.innerHTML = "";
        errorMsg.classList.add("hide");
        validMsg.classList.add("hide");
    };

    const showError = (msg) => {
        input.classList.add("error");
        errorMsg.innerHTML = msg;
        errorMsg.classList.remove("hide");
        validMsg.classList.add("hide");
    };

    const showValid = () => {
        input.classList.remove("error");
        validMsg.classList.remove("hide");
        errorMsg.classList.add("hide");
    };

    const validatePhone = () => {
        const phoneNumber = input.value.trim();

        // Check if country is selected
        if (!countrySelected) {
            showError("Please select a country first");
            return false;
        }

        // Check if phone number is entered
        if (!phoneNumber) {
            showError("Phone number is required");
            return false;
        }

        // Validate phone number format
        if (iti.isValidNumberPrecise()) {
            showValid();
            return true;
        } else {
            const errorCode = iti.getValidationError();
            const msg = errorMap[errorCode] || "Invalid number";
            showError(msg);
            return false;
        }
    };

    // Listen for country selection
    input.addEventListener("countrychange", function() {
        countrySelected = true;
        if (input.value.trim()) {
            validatePhone();
        } else {
            reset();
        }
    });

    // Real-time validation on input
    input.addEventListener("input", function() {
        if (countrySelected) {
            validatePhone();
        }
    });

    // Validation when user leaves the field
    input.addEventListener("blur", function() {
        if (countrySelected && input.value.trim()) {
            validatePhone();
        }
    });

    // Prevent form submission if phone validation fails
    form.addEventListener("submit", function(e) {
        if (!validatePhone()) {
            e.preventDefault();
            return false;
        }

        // Set the full international number for form submission
        if (iti.isValidNumberPrecise()) {
            input.value = iti.getNumber();
        }
    });

    // Initial state - show country selection message
    if (!countrySelected) {
        input.addEventListener("focus", function() {
            if (!countrySelected) {
                showError("Please select a country first");
            }
        });
    }
</script>



<?php include('layouts/footer.php'); ?>