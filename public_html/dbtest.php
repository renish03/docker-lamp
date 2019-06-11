<h1>Hello Mariadb!</h1>
<h4>Attempting Mariadb connection from php...</h4>
<?php
$host = 'db';
$user = 'holiday';
$pass = 'holiday';
$conn = new mysqli($host, $user, $pass);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected to Mariadb successfully!";
