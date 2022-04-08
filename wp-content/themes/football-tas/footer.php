<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Titan
 * @since 3.0.0
 */

?>

<footer class="site-footer bg-dark text-start" >
    <div class="container">
        <footer class="pt-5">
            <div class="row">
              <div class="col-6">
                <h2 class="text-white d-flex align-items-center">
                    <i class="fas fa-futbol fa-2x p-3 bg-white text-dark rounded-circle me-3"></i> 
                    <span>Football</span>
                </h2>
                <ul class="list-unstyled d-flex social-nav my-5">
                    <li class=""><a class="link-dark" href="#"><i class="bi bi-instagram"></i></a></li>
                    <li class="ms-3"><a class="link-dark" href="#"><i class="bi bi-facebook"></i></a></li> 
                    <li class="ms-3"><a class="link-dark" href="#"><i class="bi bi-twitter"></i></a></li>
                    <li class="ms-3"><a class="link-dark" href="#"><i class="bi bi-google"></i></a></li>
                </ul>
                
                <p class="text-muted">Copyright &copy; 2022 Football. All rights reserved</p>
                
              </div>
        
              <div class="col-3">
                <h5 class="text-white">Company</h5>
                <ul class="nav flex-column">
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About Us</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Contact Us</a></li>
                </ul>
              </div>
        
              <div class="col-3">
                <h5 class="text-white">Support</h5>
                <ul class="nav flex-column">
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Help center</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Terms of service</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Privacy policy</a></li>
                </ul>
              </div>
        
            </div>

  </footer>
</div>
</footer>
<!-- #colophon -->

<style>
.social-nav a.link-dark{
    background: #616161;
    color: #fff;
    width: 30px;
    height: 30px;
    display: inline-block;
    text-align: center;
    line-height: 30px;
    border-radius: 30px;
}
</style>


<?php wp_footer(); ?>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
AOS.init();
</script>

<style>
.wpforms-field-medium{
    max-width:100% !important;
}  
body.page-template-home-page footer.site-footer{
    margin:0px !important;
}
@media(max-width:767px){
    body.page-template-home-page header#main-nav{
        position:relative !important;
        background: #69ca63;
        background: linear-gradient(90deg, #69ca63 0%, #4fb06d 50%);
        padding-bottom: 15px; 
    }
}

</style>

</body>
</html>
