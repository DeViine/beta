      <section class="container strains">
        <h2 class="headerbar">Strains</h2>
        <div class="strainsbody">

		<?php

//This script checks to see if the deal# folder exists in the deals directory, if it does then the deal is posted, but if it doesn't then it is not posted.
				$deal1 = '../lib/strains/strain1/card_wrapper.php';
				$deal2 = '../lib/strains/strain2/card_wrapper.php';
				$deal3 = '../lib/strains/strain3/card_wrapper.php';
				$deal4 = '../lib/strains/strain4/card_wrapper.php';
				$deal5 = '../lib/strains/strain5/card_wrapper.php';
				$deal6 = '../lib/strains/strain6/card_wrapper.php';
				$deal7 = '../lib/strains/strain7/card_wrapper.php';
				$deal8 = '../lib/strains/strain8/card_wrapper.php';
				$deal9 = '../lib/strains/strain9/card_wrapper.php';
				$deal10 = '../lib/strains/strain10/card_wrapper.php';
				$deal11 = '../lib/strains/strain11/card_wrapper.php';
				$deal12 = '../lib/strains/strain12/card_wrapper.php';
				
				if (file_exists($deal1)) {
					include ('../lib/strains/strain1/card_wrapper.php');
				
				} if (file_exists($deal2)) {
					include ('../lib/strains/strain2/card_wrapper.php');
					 
				} if (file_exists($deal3)) {
					include ('../lib/strains/strain3/card_wrapper.php');
					 
				} if (file_exists($deal4)) {
					include ('../lib/strains/strain4/card_wrapper.php');
					 
				} if (file_exists($deal5)) {
					include ('../lib/strains/strain5/card_wrapper.php');
					 
				} if (file_exists($deal6)) {
					include ('../lib/strains/strain6/card_wrapper.php');
					 
				} if (file_exists($deal7)) {
					include ('../lib/strains/strain7/card_wrapper.php');
					 
				} if (file_exists($deal8)) {
					include ('../lib/strains/strain8/card_wrapper.php');
					 
				} if (file_exists($deal9)) {
					include ('../lib/strains/strain9/card_wrapper.php');
					 
				} if (file_exists($deal10)) {
					include ('../lib/strains/strain10/card_wrapper.php');
					 
				} if (file_exists($deal11)) {
					include ('../lib/strains/strain11/card_wrapper.php');
					 
				} if (file_exists($deal12)) {
					include ('../lib/strains/strain12/card_wrapper.php');
					 
				} else // do nothing 
				
				
            ?>

        </div>
      </section>
