<?php
	$host = 'localhost';
	$user = 'root';
	$password = '';
	$dbname = 'gpsapp';

	$dsn = 'mysql:host='. $host .';dbname='. $dbname;

	$pdo = new PDO($dsn, $user, $password);

    $user = $_POST['username'];
    $password = $_POST['password'];

    $sql = 'SELECT * FROM login WHERE USERNAME = ? AND PASSWORD = ?';

    $stmt = $pdo->prepare($sql);
    $stmt->execute(array($user, $password));

    $result = $stmt->fetchAll();

    $count = count($result);

    if ($count != 0){
        echo '<script>window.location.href = "success.html"; </script>';
    }
    else{
        echo '<script>window.location.href = "fail.html"; </script>';
    }
?>
