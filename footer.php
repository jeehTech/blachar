 <!-- Footer Start -->
 <div class="container-fluid bg-dark text-white-50 footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s" id="contact">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                <a href="./" class="navbar-brand ms-4 ms-lg-0">
                <img src="./assets/img/bil.png" alt="BIL" width="150">
            </a>
                    <p>Blachar Aluminium & Glass works has envolved over the year
to become one of Tanzania’s most sought after contractors
of aluminium and glass.
                        <span class="text-success"><a href="./?bil=about">More <i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i></a></span>
                    </p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square me-1" href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square me-1" href="javascript:void(0);"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square me-1" href="javascript:void(0);"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square me-0" href="javascript:void(0);"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" >
                    <h5 class="text-light mb-4">Address</h5>
                    <p><i class="fa fa-map-marker-alt me-3"></i>Levolosi, Arusha, Tanzania</p>
                    <p><i class="fa fa-phone-alt me-3 text-center"></i><a href="tel:+255620222322" style="color:rgb(168, 168, 168);">+255 620 222 322</a></p>
                    <p><i class="fa fa-phone-alt me-3" style="color:rgb(1, 32, 36);"></i><a href="tel:+255767736353" style="color:rgb(168, 168, 168);">+255 767 736 353</a></p>
                    <p><i class="fa fa-phone-alt me-3" style="color:rgb(1, 32, 36);"></i><a href="tel:+255755651364" style="color:rgb(168, 168, 168);">+255 755 651 364</a></p>
                    <p><i class="fa fa-envelope me-3"></i><a href="mailto:">info@blachar.co.tz</a></p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Quick Links</h5>
                    <a class="btn btn-link" href="./?bil=about">About Us</a>
                    <a class="btn btn-link" href="./?bil=contact">Contact Us</a>
                    <a class="btn btn-link" href="./?bil=projects">Our Projects</a>
                    <a class="btn btn-link" href="./assets/doc/COMPANY_PROFILE_BLACHAR.pdf">Company Profile</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Newsletter</h5>
                    <?php if(!isset($_GET['success']) && !isset($_GET['exist'])):?>
                        <p>Subscribe to our Newsletter and get notified when new project and offer are available</p> 
                    <?php endif;?>
                    <?php if(isset($_GET['success'])):?>
                          <div class="alert alert-info"><small>Successful Subscription, you will get notified through <b> <?php echo base64_decode($_GET['trx']) ?></b></small></div> <?php endif;?>
                          <?php if(isset($_GET['exist'])):?>
                          <div class="alert alert-danger"><small>Failure Subscription, <b> <?php echo base64_decode($_GET['trx']) ?></b> already exist in our list</small></div><?php endif;?>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                    <span id="newsletter"></span>
                      <?php include "newsletter.php"; ?>

                      
                      <form action="./" method="POST">
                          <input name="subscriber_email" class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="email" placeholder="Your email">
                          <input type="submit" name="subscriber_btn" value="Subscribe" class="btn btn-primary btn-sm p-2 position-absolute top-0 end-0 mt-2 me-2">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="https://blachar.co.tz">Blachar Investment</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a href="https://wa.me/255622030894"> DarTech Ltd</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    	<!-- Bothelp.io widget -->
        <script type="text/javascript">!function() {var e={"token":"+255767736353","position":"left","bottomSpacing":"30","displayOn":"everywhere","subtitle":"House Of Creativity","message":{"name":"Blachar Investments LTD",
        "content":"We create for you. Every product we design and output is created with your satisfaction in mind..!"}},t=document.location.protocol+"//bothelp.io",o=document.createElement("script");o.type="text/javascript",o.async=!0,o.src=t+"/widget-folder/widget-whatsapp-chat.js",o.onload=function() {BhWidgetWhatsappChat.init(e)};var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(o,n)}(); </script>
	<!-- /Bothelp.io widget -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/lib/wow/wow.min.js"></script>
    <script src="./assets/lib/easing/easing.min.js"></script>
    <script src="./assets/lib/waypoints/waypoints.min.js"></script>
    <script src="./assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="./assets/lib/parallax/parallax.min.js"></script>

    <!-- Template Javascript -->
    <script src="./assets/js/main.js"></script>

</body>

</html>