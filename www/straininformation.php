<?php include ('../lib/classes/header.php'); ?>

<?php
	$url = '';
	if (!empty($_GET['category'])) {
		$url .= $_GET['category'] . '/';
	}
	if (!empty($_GET['page'])) {
		$url .= $_GET['page'] . '.php';
	}
	include ('../templates/ak47.html');
?>

<?php include ('../lib/classes/footer.php'); ?>