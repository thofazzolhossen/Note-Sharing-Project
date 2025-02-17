
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Note";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
//if ($conn->connect_error) {
  //die("Connection failed: " . $conn->connect_error);
//}
//echo "Connected successfully";



$sql = "SELECT * FROM test";
$result = mysqli_query($conn, $sql);


if(isset($_POST['submit'])){

    $img = $_FILES['image']['name'];
    $tmpname = $_FILES['image']['tmp_name'];
    $uploc = 'imgg/'.$img;
  
    $s = "INSERT INTO test(image) VALUES('$img')";
    if(mysqli_query($conn,$s)==TRUE){
        move_uploaded_file($tmpname,$uploc);
    }

    echo "<img src='imgg/$img'>";
    //<embed src="imgg/$img" type="application/pdf">
    ?>

    <a href = "imgg/<?php echo $img; ?>">clicl here</a>;
<?php
}

?>





<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<form action="" method = "POST" enctype = "multipart/form-data">
    image: <br> 
    <input type="file" name = "image"><br>
    <input type="submit" name = "submit">
</form>

</body>
</html>


