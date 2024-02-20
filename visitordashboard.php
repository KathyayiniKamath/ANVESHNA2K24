<?php
// Replace these with your database credentials
$hostname = "localhost";
$username = "root";
$password = "";
$database = "bedbooking";

// Create a database connection
$conn = new mysqli($hostname, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch visitor data from the database
$visitorData = array();
$result = $conn->query("SELECT * FROM book");

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $visitorData[] = $row;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visitor Dashboard</title>
</head>
<style>
    body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-image: url("bcc.jpg");
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            margin: 0;
           
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        a{
            text-decoration: none;
            color: white;
        }

        h2 {
            text-align: center;
            color: white;
            font-weight: bolder;
            font-size: 25px;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #dee2e6;
            font-size: 16px;
            font-weight: bold;
        }

        th {
            background-color: #007bff;
            color: white;
        }
        tr{
            background-color: #dee2e6be;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
        button{
        background-color: #007bff;
            color: #fff;
            padding: 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 20px;
    }
</style>
<header>

</header>
<body>
<button style="margin-top:30px"><a href="./index.php">Go back</a></button>   
<div>
<h2>REGISTRATIONS</h2>

<table border="1"style="width:700px;">
    <tr>
        
        <th>Patient Name</th>
        <th>In Date</th>
        <th>Out Date</th>
        <th>Type</th>
        <th>Visitor Name</th>
        <th>Room No</th>
    </tr>
    <?php foreach ($visitorData as $visitor) : ?>
        <tr>
            
            <td><?php echo $visitor['patient']; ?></td>
            <td><?php echo $visitor['indate']; ?></td>
            <td><?php echo $visitor['outdate']; ?></td>
            <td><?php echo $visitor['type1']; ?></td>
            <td><?php echo $visitor['visitor']; ?></td>
            <td><?php echo $visitor['roomno']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>
</div>
</body>
</html>
