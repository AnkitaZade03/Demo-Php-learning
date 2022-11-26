<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body >
    <script>
        alert("Deleted");
    </script>
    
<?php
$Code = $_GET['a'];

$user = 'root';
$mydatabase = 'credit_system';

$conn = new mysqli("localhost", $user, "", $mydatabase);

if($conn->connect_error){
    die('Failed '. $conn->connect_error);
}
else{
    $sql = "delete from `credits` where Code = '$Code'";
    $result = mysqli_query($conn, $sql);

    header("location: demo.php");
}
?>

</body>
</html>
