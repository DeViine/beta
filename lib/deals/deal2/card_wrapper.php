<a class="cardwrapper" href="index.php?category=../lib/deals/deal2&page=deal">
              <img src="http://placehold.it/100x100" class="cardlogo">
              <h1 class="dealtitle"><?php echo file_get_contents('../lib/deals/deal2/title');?></h1>
              
	<h2 class="dealaddress">
		<span><?php echo file_get_contents('../lib/deals/deal2/business_name');?></span>
		<?php echo file_get_contents('../lib/deals/deal2/address');?></h2>
              <div class="stats">
                <div class="statleft">
		<h4 class="number">9</h4>
                  <h5 class="label">MILES<br>AWAY</h5>
                </div>
                <div class="statright">
		<h4 class="number"><?php include ('../lib/deals/deal2/days_left.php');?></h4>
                  <h5 class="label">DAYS<br>LEFT</h5>
                </div>
              </div>
            </a>

