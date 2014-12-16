      <section class="container deals">
        <h2 class="headerbar">Deals</h2>
        <div class="dealsbody">

          <?php

//This script checks to see if the deal# folder exists in the deals directory, if it does then the deal is posted, but if it doesn't then it is not posted.
				$deal1 = '../lib/deals/deal1/card_wrapper.php';
				$deal2 = '../lib/deals/deal2/card_wrapper.php';
				$deal3 = '../lib/deals/deal3/card_wrapper.php';
				$deal4 = '../lib/deals/deal4/card_wrapper.php';
				$deal5 = '../lib/deals/deal5/card_wrapper.php';
				$deal6 = '../lib/deals/deal6/card_wrapper.php';
				$deal7 = '../lib/deals/deal7/card_wrapper.php';
				$deal8 = '../lib/deals/deal8/card_wrapper.php';
				$deal9 = '../lib/deals/deal9/card_wrapper.php';
				$deal10 = '../lib/deals/deal10/card_wrapper.php';
				$deal11 = '../lib/deals/deal11/card_wrapper.php';
				$deal12 = '../lib/deals/deal12/card_wrapper.php';
				
				if (file_exists($deal1)) {
					include ('../lib/deals/deal1/card_wrapper.php');
				
				} if (file_exists($deal2)) {
					include ('../lib/deals/deal2/card_wrapper.php');
					 
				} if (file_exists($deal3)) {
					include ('../lib/deals/deal3/card_wrapper.php');
					 
				} if (file_exists($deal4)) {
					include ('../lib/deals/deal4/card_wrapper.php');
					 
				} if (file_exists($deal5)) {
					include ('../lib/deals/deal5/card_wrapper.php');
					 
				} if (file_exists($deal6)) {
					include ('../lib/deals/deal6/card_wrapper.php');
					 
				} if (file_exists($deal7)) {
					include ('../lib/deals/deal7/card_wrapper.php');
					 
				} if (file_exists($deal8)) {
					include ('../lib/deals/deal8/card_wrapper.php');
					 
				} if (file_exists($deal9)) {
					include ('../lib/deals/deal9/card_wrapper.php');
					 
				} if (file_exists($deal10)) {
					include ('../lib/deals/deal10/card_wrapper.php');
					 
				} if (file_exists($deal11)) {
					include ('../lib/deals/deal11/card_wrapper.php');
					 
				} if (file_exists($deal12)) {
					include ('../lib/deals/deal12/card_wrapper.php');
					 
				} else // do nothing 
				
				
            ?>

     

        </div>
      </section>