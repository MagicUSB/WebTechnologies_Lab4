<?php
	session_start();
	echo '<head>
			<meta charset="UTF-8">
			<link rel="stylesheet" href="css/bootstrap.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<title>Контактні дані</title>
		</head>';
	echo '<body>';
	if (isset($_SESSION['surname']) && isset($_SESSION['name']) && isset($_SESSION['telephone']) && isset($_SESSION['email'])) {
		echo '<ul><li>Прізвище: <b>';
		echo $_SESSION['surname'];
		echo '</b></li>';
		echo "<li>Ім'я: <b>";
		echo $_SESSION['name'];
		echo '</b></li>';
		echo "<li>Номер телефону: <b>";
		echo $_SESSION['telephone'];
		echo '</b></li>';
		echo "<li>E-mail: <b>";
		echo $_SESSION['email'];
		echo '</b></li>';
	}
	echo '</ul></body>';