<!DOCTYPE html>
<html lang="en">
<head> 
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

.container {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    margin-bottom: 20px;
}

.posts-container {
    margin-top: 20px;
}

.post {
    border-bottom: 1px solid #ccc;
    padding: 10px 0;
}

.post:last-child {
    border-bottom: none;
}

.post p {
    margin: 0;
}

.post .post-id {
    font-weight: bold;
}

.post .post-name {
    font-size: 20px;
    color: #333;
}

.post .post-email {
    color: #666;
}

.post .post-content {
    margin-top: 10px;
    color: #444;
}
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    
</head>
<body>

<div class="container">
    <h1>Posts</h1>
    <div class="posts-container">
        <?php

// Database connection parameters
$servername = "localhost";
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$database = "presentation1";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch data from the posts table
$sql = "SELECT * FROM posts";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Name: " . $row["name"]. " - Email: " . $row["email"]. " - Content: " . $row["content"]. "<br>";
    }
} else {
    echo "0 results";
}

// Close connection
$conn->close();

?>
   </div>
</div>

</body>
</html>