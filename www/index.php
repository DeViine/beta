<?php include_once("../lib/analyticstracking.php") ?>
<?php include (dirname(__FILE__) . "/../lib/classes/header.php");
//HERE IS THE PAGE SELECTOR CODE, ALL PAGES ARE CARRIED HERE INTO THE INDEX PAGE ON CLICK OF THEIR LINK IN THE NAV. ALL ALLOWED PAGES MUST BE INCLUDED IN THE ARRAY-->    
	$page = $_GET['page'];	/* gets the variable $page */
	if (!empty($page)) {
		include($page);
	} 	/* if $page has a value, include it */
	else {
		include('page1.php');
	} 	/* otherwise, include the default page */
	
	$url = '';
	if (!empty($_GET['category'])) {
		$url .= $_GET['category'] . '/';
	}
	if (!empty($_GET['page'])) {
		$url .= $_GET['page'] . '.php';
	}
	include $url;
include (dirname(__FILE__) . "/../lib/classes/footer.php"); ?>      