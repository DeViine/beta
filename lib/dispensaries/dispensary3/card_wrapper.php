<div class="cardwrapper">
    <a href="walkingraven.php">
                <img src="http://placehold.it/100x100" class="cardlogo">
                <h1 class="dispensaryname"><?php echo file_get_contents ('../lib/dispensaries/dispensary3/dispensary_name'); ?></h1>
                <h2 class="dispensaryaddress"><?php echo file_get_contents ('../lib/dispensaries/dispensary3/address'); ?></h2>
    </a>
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
        <a href="www/walkingraven.php">
            <h3 class="ratingtext">Rated 4/5 by 103 users</h3>   
            <div class="distance">
              <h4 class="number">
              <div id="cinder_key"><p></p></div>
              </h4> 
              <h5 class="label">MILES<br>AWAY</h5>
            </div>
        </a>
    </div>
</div>