<?php
session_start();
echo '<head>
			<meta charset="UTF-8">
			<link rel="stylesheet" href="css/bootstrap.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<title>Навчальний заклад</title>
		</head>';
echo '<body>';
if (isset($_SESSION['university']) && isset($_SESSION['chair']) && isset($_SESSION['course'])) {
    echo '<ul><li>Назва ЗВО: <b>';
    echo $_SESSION['university'];
    echo '</b></li>';
    echo "<li>Кафедра: <b>";
    echo $_SESSION['chair'];
    echo '</b></li>';
    echo "<li>Курс: <b>";
    echo $_SESSION['course'];
    echo '</b></li>';
}
echo '</ul></body>';