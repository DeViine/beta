<?php
    $dir = __DIR__;
    $file = basename($dir); // $file is set to the folder name
?>
<div class="cardwrapper">           <!-- Cardwrapper begin -->
    <?php $link_address = '../www/' . $file . '.php' ?>
    <a href="<?php echo $link_address;?>">
        <img src="http://placehold.it/100x100" class="cardlogo">
        <h1 class="strainname"><?php echo file_get_contents('../lib/strains/' . $file . '/strain_name');?></h1>
        <h2 class="producer">PRODUCED BY<br><span><?php echo file_get_contents('../lib/strains/' . $file . '/producer_name');?></span></h2>
            <div class="rating">    <!-- Begin rating system output -->
                <!-- Here should be the ratings system buds -->
                <!-- Change the below data attribute for the rating -->
                <div class="ratingwrap">

<!--THERE MUST BE A ($file-data-progress-percent).html WHICH PLACES A SNAPSHOT OF THE AVERAGE RATING INTO THE "" BELOW-->

                  <div class="progress-wrap green progress" <?php echo ($file . '-data-progress-percent');?>="">
                    <div class="progress-bar progress"></div>
                  </div>
                </div>
                <img src="http://deviine.com/deviine/beta/img/BudBox.png" class="budbox">
                <h3 id="sativaRatings" class="ratingstext"></h3><h3 id="sativaUsers" class="ratingstext"><h3>
            </div>                  <!-- End of Rating output -->  
        <div class="stats">
            <div class="statleft">
                <h5 class="label"><?php echo file_get_contents('../lib/strains/' . $file . '/sativa');?>% INDICA</h5>
            </div>
            <div class="statright">
                <h5 class="label"><?php echo file_get_contents('../lib/strains/' . $file . '/indica');?>% SATIVA</h5>
            </div>
        </div>
    </a>
</div>                              <!--Cardwrapper end-->