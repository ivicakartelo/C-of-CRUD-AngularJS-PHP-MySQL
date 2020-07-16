<?php

    define("DB_HOST", "localhost");
	define("DB_USERNAME", "root");
	define("DB_PASSWORD", "");
	define("DB_NAME", "test1");

$conn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);


$a = json_decode(file_get_contents("php://input"));

$b = array(
 ':name'  => $a->name,
 ':phone'  => $a->phone
);

$sql = "
 INSERT INTO ang 
 (name, phone) VALUES 
 (?, ?)
";

$stmt = $conn->prepare($sql);
$params = [$a->name, $a->phone];
$stmt->execute($params);
?>