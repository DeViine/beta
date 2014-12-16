	 <section class="container dispensaries">
        <h2 class="headerbar">Adult Use Dispensaries</h2>
        <div class="dispensariesbody">
            
           <?php

//This script checks to see if the deal# folder exists in the deals directory, if it does then the deal is posted, but if it doesn't then it is not posted.
				$deal1 = '../lib/dispensaries/dispensary1/card_wrapper.php';
				$deal2 = '../lib/dispensaries/dispensary2/card_wrapper.php';
				$deal3 = '../lib/dispensaries/dispensary3/card_wrapper.php';
				$deal4 = '../lib/dispensaries/dispensary4/card_wrapper.php';
				$deal5 = '../lib/dispensaries/dispensary5/card_wrapper.php';
				$deal6 = '../lib/dispensaries/dispensary6/card_wrapper.php';
				$deal7 = '../lib/dispensaries/dispensary7/card_wrapper.php';
				$deal8 = '../lib/dispensaries/dispensary8/card_wrapper.php';
				$deal9 = '../lib/dispensaries/dispensary9/card_wrapper.php';
				$deal10 = '../lib/dispensaries/dispensary10/card_wrapper.php';
				$deal11 = '../lib/dispensaries/dispensary11/card_wrapper.php';
				$deal12 = '../lib/dispensaries/dispensary12/card_wrapper.php';
				
				if (file_exists($deal1)) {
					include ('../lib/dispensaries/dispensary1/card_wrapper.php');
				
				} if (file_exists($deal2)) {
					include ('../lib/dispensaries/dispensary2/card_wrapper.php');
					 
				} if (file_exists($deal3)) {
					include ('../lib/dispensaries/dispensary3/card_wrapper.php');
					 
				} if (file_exists($deal4)) {
					include ('../lib/dispensaries/dispensary4/card_wrapper.php');
					 
				} if (file_exists($deal5)) {
					include ('../lib/dispensaries/dispensary5/card_wrapper.php');
					 
				} if (file_exists($deal6)) {
					include ('../lib/dispensaries/dispensary6/card_wrapper.php');
					 
				} if (file_exists($deal7)) {
					include ('../lib/dispensaries/dispensary7/card_wrapper.php');
					 
				} if (file_exists($deal8)) {
					include ('../lib/dispensaries/dispensary8/card_wrapper.php');
					 
				} if (file_exists($deal9)) {
					include ('../lib/dispensaries/dispensary9/card_wrapper.php');
					 
				} if (file_exists($deal10)) {
					include ('../lib/dispensaries/dispensary10/card_wrapper.php');
					 
				} if (file_exists($deal11)) {
					include ('../lib/dispensaries/dispensary11/card_wrapper.php');
					 
				} if (file_exists($deal12)) {
					include ('../lib/dispensaries/dispensary12/card_wrapper.php');
					 
				} else // do nothing 
				
				
            ?>   

        </div>
      </section>
