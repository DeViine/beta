        <?php
        $dir = __DIR__;
        $file = basename($dir); // $file is set to the folder name
        ?>
<div class="cardwrapper">
	<?php $link_address = '../www/' . $file . '.php' ?>
    <a href="<?php echo $link_address;?>">
      <img src="http://placehold.it/100x100" class="cardlogo">
      <h1 class="strainname"><?php echo basename('../lib/strains/' . $file);?></h1>
      <h2 class="producer">PRODUCED BY<br><span><?php echo file_get_contents('../lib/strains/' . $file . '/producer_name');?></span></h2>
<!--Rating system begin-->
    <div class="rating">
        <div class="starRating">
            <div>
                <div>
                    <div>
                        <div>
                        <input id="rating1" type="radio" name="rating" value="1">
                        <label for="rating1"><span>1</span></label>
                        </div>
                    <input id="rating2" type="radio" name="rating" value="2">
                    <label for="rating2"><span>2</span></label>
                    </div>
                <input id="rating3" type="radio" name="rating" value="3">
                <label for="rating3"><span>3</span></label>
                </div>
            <input id="rating4" type="radio" name="rating" value="4">
            <label for="rating4"><span>4</span></label>
            </div>
        <input id="rating5" type="radio" name="rating" value="5">
        <label for="rating5"><span>5</span></label>
        </div>
        <h3 class="ratingtext">Rated 4/5 by 103 users</h3>   
<!--Rating system end-->
            <div class="stats">
                <div class="statleft">
                    <h5 class="label"><?php echo file_get_contents('../lib/strains/' . $file . '/sativa');?>% INDICA</h5>
                </div>
                <div class="statright">
                    <h5 class="label"><?php echo file_get_contents('../lib/strains/' . $file . '/indica');?>% SATIVA</h5>
                </div>
            </div>
        </a>
    </div>
</div>