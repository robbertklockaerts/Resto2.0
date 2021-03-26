<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>logbook</title>
</head>
<body>
   
 <h2>Guestbook:</h2>

<table id="table">
    <tr>
        <th>Name</th>
        <th>Restaurent</th>
        <th>Date of visit</th>
        <th>Comment</th>
        
<?php

//config


$conn = mysqli_connect("localhost", "root", "", "logbook");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT name, resto, date, comment FROM guest ORDER BY timestamp";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()){
echo "<tr>";
echo"<td>" . $row["name"]. "</td>";
echo"<td>" . $row["resto"] . "</td>";
echo"<td>". $row["date"]."</td>";
echo"<td>". $row["comment"]."</td>";
echo"</tr>";
}
}

?>

</table>







</body>
</html>