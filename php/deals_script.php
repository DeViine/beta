<?php

//This script checks to see if the deal# folder exists in the ../deals directory, if it does then the deal is posted, but if it doesn't then it is not posted.
				$deal1 = '../deals/deal1/card_wrapper.php';
				$deal2 = '../deals/deal2/card_wrapper.php';
				$deal3 = '../deals/deal3/card_wrapper.php';
				$deal4 = '../deals/deal4/card_wrapper.php';
				$deal5 = '../deals/deal5/card_wrapper.php';
				$deal6 = '../deals/deal6/card_wrapper.php';
				$deal7 = '../deals/deal7/card_wrapper.php';
				$deal8 = '../deals/deal8/card_wrapper.php';
				$deal9 = '../deals/deal9/card_wrapper.php';
				$deal10 = '../deals/deal10/card_wrapper.php';
				$deal11 = '../deals/deal11/card_wrapper.php';
				$deal12 = '../deals/deal12/card_wrapper.php';
				
				if (file_exists($deal1)) {
					include ('../deals/deal1/card_wrapper.php');
				
				} if (file_exists($deal2)) {
					include ('../deals/deal2/card_wrapper.php');
					 
				} if (file_exists($deal3)) {
					include ('../deals/deal3/card_wrapper.php');
					 
				} if (file_exists($deal4)) {
					include ('../deals/deal4/card_wrapper.php');
					 
				} if (file_exists($deal5)) {
					include ('../deals/deal5/card_wrapper.php');
					 
				} if (file_exists($deal6)) {
					include ('../deals/deal6/card_wrapper.php');
					 
				} if (file_exists($deal7)) {
					include ('../deals/deal7/card_wrapper.php');
					 
				} if (file_exists($deal8)) {
					include ('../deals/deal8/card_wrapper.php');
					 
				} if (file_exists($deal9)) {
					include ('../deals/deal9/card_wrapper.php');
					 
				} if (file_exists($deal10)) {
					include ('../deals/deal10/card_wrapper.php');
					 
				} if (file_exists($deal11)) {
					include ('../deals/deal11/card_wrapper.php');
					 
				} if (file_exists($deal12)) {
					include ('../deals/deal12/card_wrapper.php');
					 
				} else // do nothing 
				
				
            ?>