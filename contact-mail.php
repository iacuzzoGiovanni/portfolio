<?php
require('../../../wp-blog-header.php');

$bool = true;

if(trim($_POST['nom'])){
	$nom = $_POST['nom'];
}else{
	$bool = false;
}

if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
	$email = $_POST['email'];
}else{
	$bool = false;
}

if(trim($_POST['tel'])){
	$tel = $_POST['tel'];
}else{
	$bool = false;
}

if(trim($_POST['sujet'])){
	$sujet = $_POST['sujet'];
}else{
	$bool = false;
}

if(trim($_POST['message'])){
	$message = $_POST['message'];
}else{
	$bool = false;
}

$headers = 'From: ' . $nom . ' <' . $email . '>' . "\r\n";

if($bool){
	wp_mail('iacuzzogiovanni@gmail.com', $sujet, $message, $headers);
}



