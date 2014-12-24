<?php include(dirname(__FILE__) . "/../lib/classes/header.php"); ?>
<!--HERE IS THE PAGE SELECTOR CODE, ALL PAGES ARE CARRIED HERE INTO THE INDEX PAGE ON CLICK OF THEIR LINK IN THE NAV. ALL ALLOWED PAGES MUST BE INCLUDED IN THE ARRAY-->    
<?php
	$page = $_GET['page'];
	$pages = array('page1', 'page2', 'page3' , 'page4');
	if (!empty($page)) {
		if(in_array($page,$pages)) {
			$page .= '.php';
			include($page);
		}
		else {
		echo 'Page not found. Return to
		<a href="index.php">index</a>';
		}
	}
	else {
		include('page1.php');
	}
?>

<?php include(dirname(__FILE__) . "/../lib/classes/footer.php"); ?>      