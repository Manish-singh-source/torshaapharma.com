<?php
$currentPage = 'sitemap';
$title = 'Sitemap';
include('layouts/header-2.php'); 
?>

<!-- Page Header Start !-->
<?php
$title = 'Sitemap';
include('layouts/breadcrumb.php');
?>

<!-- Sitemap Section -->
<section class="sitemap-area py-50" style="background-color: #f8f9fa;">
    <div class="container">
        <!-- Sitemap Content -->
        <div class="row">
            <!-- Company Pages -->
            <div class="col-md-3 mb-4">
                <div class="sitemap-card bg-white p-4 rounded shadow-sm h-100">
                    <h5 class="fw-bold mb-3">Website Pages</h5>
                    <ul class="list-unstyled">
                        <li><a href="index" class="text-primary">Home</a></li>
                        <li><a href="about" class="text-primary">About Us</a></li>
                        <li><a href="contact" class="text-primary">Contact Us</a></li>
                        <li><a href="404" class="text-primary">404 Page</a></li>
                    </ul>
                </div>
            </div>

            <!-- Services -->
            <div class="col-md-3 mb-4">
                <div class="sitemap-card bg-white p-4 rounded shadow-sm h-100">
                    <h5 class="fw-bold mb-3">Business Arena</h5>
                    <ul class="list-unstyled">
                        <li><a href="manufacturing" class="text-primary">Manufacturing</a></li>
                        <li><a href="trading" class="text-primary">Trading & Indenting</a></li>
                        <li><a href="contract-manufacturing" class="text-primary">Contract Manufacturing</a></li>
                        <li><a href="consultancy" class="text-primary">Consultancy (Regulatory & Commercial)</a></li>
                    </ul>
                </div>
            </div>

            <!-- Products -->
            <div class="col-md-3 mb-4">
                <div class="sitemap-card bg-white p-4 rounded shadow-sm h-100">
                    <h5 class="fw-bold mb-3">Products</h5>
                    <ul class="list-unstyled">
                        <li><a href="api" class="text-primary">API</a></li>
                        <li><a href="pellets" class="text-primary">Pellets</a></li>
                        <li><a href="excipients" class="text-primary">Excipients</a></li>
                        <li><a href="intermediate" class="text-primary">Intermediate</a></li>
                    </ul>
                </div>
            </div>

            <!-- Legal -->
            <div class="col-md-3 mb-4">
                <div class="sitemap-card bg-white p-4 rounded shadow-sm h-100">
                    <h5 class="fw-bold mb-3">Legal & Policy</h5>
                    <ul class="list-unstyled">
                        <li><a href="privacy-policy" class="text-primary">Privacy Policy</a></li>
                        <li><a href="terms-and-conditions" class="text-primary">Terms & Conditions</a></li>
                        <li><a href="sitemap" class="text-primary">Sitemap</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('layouts/footer.php'); ?>
