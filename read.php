<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "website";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

$uploadStatus = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['image'])) {
    
        $id = $_POST["id"];
        
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/read.css">
</head>
<body>
	
    <div class="container">
        <center><h1>List of Customers</h1></center>
        <?php echo $uploadStatus; ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Birthdate</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Password</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            $sql = "SELECT * FROM register";
            $result = $conn->query($sql);
            if (!$result) {
                die("Error Query: " . $conn->error);
            }
            
            while ($row = $result->fetch_assoc()) { 
                echo "
                <tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['address']}</td>
                    <td>{$row['phone']}</td>
                    <td>{$row['bday']}</td>
                    <td>{$row['username']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['password']}</td>
                    
                                
                            </form>
                        </div>
                    </td>
                </tr>
                ";
            }
            $conn->close();
            ?>
            </tbody> 
        </table>
    </div>
</body>
</html>