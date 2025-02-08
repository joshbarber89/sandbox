<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db ='test';

$id = 2;

$connection = mysqli_connect($host,$user,$password,$db);// you can select db separately as you did already
if($connection){
    $query = "SELECT * FROM creditcards WHERE id = '$id'";
    $result = $connection->query($query);
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["cvv"] . " - Name: " . $row["name"]. " " . $row["creditcardnumber"]. "<br>";
    }
}else{
   echo "db connection error because of".mysqli_connect_error();
}
echo "hello\n";


$time = date("Y-m-d");
print_r($time);

if ($time == "2025-02-09") {
    echo "<p>This penis is in a p tag</p>";
} else {
    echo "<br/><br/><section><span>Hello!!</span></section>";
}

?>