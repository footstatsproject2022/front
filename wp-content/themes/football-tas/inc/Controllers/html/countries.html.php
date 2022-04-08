<?php 
    $allowCountry = array("Brazil","Spain","United States");
?>
<div class="countries" style="">
    <div id="all-available-countries" class="row">
        <?php foreach($areas as $country): ?>
            <?php if( in_array($country['name'], $allowCountry) ): ?> 
            <div class="col-lg-2">
                <label class="btn-country <?php echo ( $country['id'] == 76 ? 'available' : '' ); ?>">
                    <input type="radio" name="select_country" value="<?php echo $country['id'] ?>" data-alpha3="<?php echo $country['alpha3code'] ?>" data-countryname="<?php echo $country['name'] ?>" <?php echo ( $country['id'] == 76 ? '' : 'disabled' ); ?> >
                    <span class="">
                        <?php if( $country['id'] == 76): ?>
                            <img src="<?php echo get_stylesheet_directory_uri().'/images/brazil-flag.png' ?>" alt="<?php echo $country['name'] ?>"/>
                        <?php endif; ?>
                        <?php echo $country['name'] ?>
                    </span>
                </label>
            </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div>