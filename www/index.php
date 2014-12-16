<?php include("../lib/classes/header.php"); ?>
<!--HERE IS THE PAGE SELECTOR CODE, ALL PAGES ARE CARRIED HERE INTO THE INDEX PAGE ON CLICK OF THEIR LINK IN THE NAV. ALL ALLOWED PAGES MUST BE INCLUDED IN THE ARRAY-->    
<?php
	$page = $_GET['page'];	/* gets the variable $page */
	if (!empty($page)) {
		include($page);
	} 	/* if $page has a value, include it */
	else {
		include('page1.php');
	} 	/* otherwise, include the default page */
?>
<!--a href="index.php?category=info&page=faq">FAQ</a-->

<?php include("../lib/classes/footer.php"); ?>      