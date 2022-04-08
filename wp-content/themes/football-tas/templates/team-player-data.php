<?php
/**
 * Template Name: Team Player Data
 */

 get_header();
?>

<main class="default-layout-page team-player-data-page">
    <div class="container-fluid-big">
    <div class="main-content-area inner-box mb-4 py-4">
        <div class="row m-0">
            <aside class="col-sm-4">
                <div class="team-players" id="team-players">
                </div>
            </aside>
            <div class="col-sm-8" id="team-player-content">
                <div id="player-content">
                    <div class="row">
                        <!-- Begin::Player details -->
                        <div class="col-sm-5" id="app-player-details"></div>
                        <!-- End::Player details -->

                        <!-- Begin::Player market value -->
                        <div class="col-sm-7">
                            <div class="" id="market-value-heading"></div>
                            <div class="card mt-4 mb-b">
                                <div class="card-body" id="app-player-market-value" style="width:100%;height:400px"></div>
                            </div>
                        </div>
                        <!-- End::Player market value -->
                        
                        <!-- Begin::Player Tabs -->
                        <div class="col-sm-12" id="app-player-tabs"></div>
                        <!-- End::Player Tabs -->
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>

<script>
var admin = {
    'ajaxurl' : "<?php echo admin_url( 'admin-ajax.php' ) ?>",
    'nonce'   : "<?php echo wp_create_nonce('select_competetions') ?>",
    'current_user_id' : "<?php echo ((int)get_current_user_id()*20121993) ?>", 
    'squad_id' : "<?php echo ( isset($_GET['squad_id']) && !empty($_GET['squad_id']) ? $_GET['squad_id'] : 0 ) ?>",
}; 
</script>

<script src="https://www.gstatic.com/charts/loader.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/scripts/team-player-data.js"></script>


<?php
 get_footer();