<?php
http_response_code(404);
$currentPage = '404';
$title = '404 Page';
include('layouts/header-2.php'); 
?>

<!-- Error Section Start -->
<div class="error-page py-100" style="background: #f8f9fa; min-height: 80vh; display: flex; align-items: center;">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <!-- Error Page Image -->
                <div class="error-page-image mb-4">
                    <img src="img/icons/error-404.png" alt="404" style="max-width: 250px; width: 100%;">
                </div>

                <!-- Error Page Content -->
                <div class="error-page-content">
                    <h2 class="mb-3" style="font-size: 2.5rem; font-weight: 700; color: #333;">
                        Oops! Page Not Found
                    </h2>
                    <p class="mb-4" style="font-size: 1.1rem; color: #555;">
                        The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.
                    </p>
                    <a href="index" class="btn btn-primary" style="padding: 0.75rem 2rem; font-size: 1rem; border-radius: 50px;">
                        Back to Home
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Error Section End -->

<?php include('layouts/footer.php'); ?>
