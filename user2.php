<?php
session_start();
echo '<head>
			<meta charset="UTF-8">
			<link rel="stylesheet" href="css/bootstrap.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<title>Захоплення</title>
		</head>';
echo '<body>';
if (isset($_SESSION['hobby'])) {
    echo '<ul><li>Захоплення: <b>';
    echo $_SESSION['hobby'];
    echo '</b></li>';
}
echo '</ul></body>';