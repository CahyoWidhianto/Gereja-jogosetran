<footer id="footer" class="footer">

    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-5 col-md-12 footer-info">
                <a href="index.html" class="logo d-flex align-items-center">
                    <span>GBI <?= $data_gereja['nama_gereja'] ?></span>
                </a>

            </div>

            <div class="col-lg-2 col-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                    <li><a href="#hero">Home</a></li>
                    <li><a href="#about">About us</a></li>
                    <li><a href="#pastor">Pastor</a></li>
                    <li><a href="#media">Media</a></li>
                    <li><a href="#location">Location</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                <h4>Contact Us</h4>
                <div class="social-links d-flex mt-4">
                    <a href="<?= $sosial_media['twt'] ?>" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="<?= $sosial_media['fb'] ?>" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="<?= $sosial_media['ig'] ?>" class="instagram"><i class="bi bi-instagram"></i></a>
                </div>
                <div class="social-links d-flex mt-4">
                    <p>
                        <strong>Phone:</strong> <?= $data_gereja['kontak_gereja'] ?><br>
                        <strong>Email:</strong> <?= $data_gereja['email_gereja'] ?> <br>
                    </p>
                </div>

            </div>

        </div>
    </div>

    <div class="container mt-4">
        <div class="copyright">
            &copy; Copyright <strong></strong>
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/ -->
            Designed by <a href="https://ukrim.ac.id/">Universitas Kristen Immanuel</a>
        </div>
    </div>

</footer><!-- End Footer -->
<!-- End Footer -->

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>


</html>