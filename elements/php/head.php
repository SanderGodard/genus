<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
  <base href="<?php
    $d = str_replace("\\", "/", __DIR__); $root = str_replace($_SERVER['DOCUMENT_ROOT'], "", $d); $root = str_replace("elements/php", "", $root);
    echo $root; global $root;
  ?>">
  <link rel="shortcut icon" href="images/favicon.png">
  <meta name="keywords" content="sandergodard.com, Sander Godard, genus, teacher tool, genus classroom, classroom tools">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Sander Godard">

	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#DFD543">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#DFD543">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#DFD543">

	<link rel="stylesheet" href="css/main.css">
	<link href="http://fonts.googleapis.com/css?family=Roboto:400,700,400italic,500|Aleo:400italic" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
