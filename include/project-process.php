<?php
$serverName = 'localhost';
$username = 'root';
$password = '';

try {
    $conn = new PDO( "mysql:host=$serverName;dbname=portfolio", $username, $password );
    // set the PDO error mode to exception
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

    $name = $_POST['name'];
    $cata = $_POST['category'];
    $img = $_POST['img'];
    $desc = $_POST['description'];
    $link = $_POST['link'];
    $skills = $_POST['skills'];

    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO project_info (name, category, img, description, link, skills) VALUES (?, ?, ?, ?, ?, ?)");

    // Bind parameters to the prepared statement
    $stmt->bindParam(1, $name);
    $stmt->bindParam(2, $cata);
    $stmt->bindParam(3, $img);
    $stmt->bindParam(4, $desc);
    $stmt->bindParam(5, $link);
    $stmt->bindParam(6, $skills);

    // Execute the prepared statement
    $stmt->execute();

    echo 'New record created successfully';
} catch(PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}