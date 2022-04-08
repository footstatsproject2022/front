<?php 
/**
 * Template Name: Select Competetion 
 */

 get_header();

 ?>
<main class="default-layout-page select-country-page">
    <div class="container-fluid">
    <div class="main-content-area inner-box mb-4">
        <div class="container">

            <!-- begin::heading -->
            <div class="row">
                <div class="col-lg-6">
                    <h2>Select Below Options And Get <br>Ready Your Dashboard</h2>
                </div>
                <div class="col-lg-6 text-end">
                    <a href="javascript:void(0)" class="btn btn-danger rounded-pill btn-lg" id="continue-to-next-page" >Continue</a>
                </div>
            </div>
            <!-- end::heading -->


            <!-- Tabs Selection -->
            <ul class="nav nav-pills nav-fill flex-column flex-sm-row mt-4 mb-4 tabs-selection-cct" >
                <li class="nav-item">
                    <a class="nav-link shadow-sm " aria-current="page" href="#">
                        <div class="d-flex">
                            <div class="flag-icon">
                                <i class="bi bi-flag-fill"></i>
                            </div>
                            <div class="selected-country text-start">
                                <span class="title">Select Country</span>
                                <br>
                                <span class="country-details">Baker Island</span>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="nav-item"> 
                    <a class="nav-link shadow-sm active" href="#">
                        <div class="d-flex">
                            <div class="flag-icon">
                                <i class="bi bi-trophy-fill"></i>
                            </div>
                            <div class="selected-country text-start">
                                <span class="title">Select Competition</span>
                                <br>
                                <span class="country-details">
                                    Choose Game From list
                                </span>
                            </div>
                        </div>
                        <span class="angle-down"></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link shadow-sm" href="#">
                        <div class="d-flex">
                            <div class="flag-icon">
                                <i class="bi bi-flag-fill"></i>
                            </div>
                            <div class="selected-country text-start">
                                <span class="title">Select Your Team</span>
                                <br>
                                <span class="country-details">
                                    Choose your team
                                </span>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>

             <!-- Begin::Choose Competitions -->
             <div class="all-countries mt-5 shadow-sm">
                <!-- heading-->
                <div class="row">
                    <div class="col-sm-12">
                        <h3>Choose Your Competitions Here</h3>
                    </div>
                </div>

                <div id="load-competitions" class="mt-4"></div>

            </div>
            <!-- End::Choose Competitions -->

        </div>
    </div>
    </div>
</main>

<script>
var admin = {
    'ajaxurl' : "<?php echo admin_url( 'admin-ajax.php' ) ?>",
    'nonce'   : "<?php echo wp_create_nonce('select_competetions') ?>",
    'current_user_id' : "<?php echo ((int)get_current_user_id()*20121993) ?>", 
}; 
</script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/scripts/select-competetion.js"></script>


 <?php 

 get_footer();