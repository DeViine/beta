<!DOCTYPE html>
<html lang="en">
  <header>
    <img class="logo" src="images/DeViine_Logo_Recreational.png">
  	<link href="images/favicon.ico" rel="icon" type="image/x-icon" />
    <link rel="stylesheet" media="screen" href="style.css"/>
    <link rel="stylesheet" media="screen" href="fonts/font_style.css"/>
    <link rel="stylesheet" media="screen" href="css/bootstrap.min.css"/>
    <link rel="shortcut icon" href="<?php bloginfo('template_directory');?>images/favicon.ico"/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
      <?php wp_title( '|', true, 'right' ); ?>
      <?php bloginfo( 'name' ); ?>
    </title>

    <?php wp_head(); ?>

  </header>
  
  <body>