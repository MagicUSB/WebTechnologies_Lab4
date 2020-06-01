<?php
session_start();
echo('<head><meta charset="UTF-8">
			<title>Посилання</title>
			<link rel="stylesheet" href="css/bootstrap.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
		  </head>');
echo('<a href="user.php">Контактна інформація</a><br>');
echo('<a href="user1.php">Дані про навчальний заклад</a><br>');
echo('<a href="user2.php">Захоплення</a><br>');
$_SESSION['surname'] = $_POST['surname'];
$_SESSION['name'] = $_POST['name'];
$_SESSION['telephone'] = $_POST['telephone'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['university'] = $_POST['university'];
$_SESSION['chair'] = $_POST['chair'];
$_SESSION['course'] = $_POST['course'];
$_SESSION['hobby'] = $_POST['hobby'];