 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "helloglasses";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$name="Oamr Test";
$sql = "SELECT name FROM customers WHERE name='".$name."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<input type="text" placeholder"Ryan Cooper" value="'.$row['name'].'" />'  ;
    }
} else {
    echo "0 results";
}
$conn->close();
?> 