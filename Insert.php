<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form</title>
</head>
<body>
<?php

$Lab = 'Lab';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $Sem = $_POST['Sem'];
    $Course_Name = $_POST['Course_Name'];
    $Course_Type = $_POST['Course_Type'];
    $AICTE_Category = $_POST['AICTE_Category'];
    $Code = $_POST['Code'];
    $Lec = $_POST['Lec'];
    $Tutorial = $_POST['Tutorial'];
    $Practicals = $_POST['Practicals'];
    $interactive = $_POST['Interactive'];
    $Cr = $_POST['Cr'];
    $Hr = $_POST['Hr'];
    $MSE = $_POST['MSE'];
    $ISE = $_POST['ISE'];
    $ESE = $_POST['ESE'];

    // if($Course_Type == "Lab"){
    //     $ISE = 30;
    //     $ESE = 40;
    // }

    if(!(($MSE === 30 && $ISE === 20 && $ESE === 50) || ($MSE === 30 && $ISE === 30 && $ESE === 40) )){
        header("location: Error.php");
    }

    else if(strpos($Course_Type, $Lab) !== false){
        if($ISE === 20 && $ESE === 50 && $MSE === 30){
            header("location: Error.php");
        }
    }

    else if(strpos($Course_Type, $Theory) !== false){
        if($ISE === 30 && $ESE === 40 && $MSE === 30){
            header("location: Error.php");
        }
    }

    

    else if($Cr !== $Lec + $Tutorial + $Practicals + $interactive){
        echo 'Error!!  Please check field correctly filled';
        header("location: Error.php");
    }

    else if($Cr !== $Hr){
        header("location: Error.php");
    }

    else{
        $user = 'root';
        $mydatabase = 'credit_system';

        $conn = new mysqli("localhost", $user, '', $mydatabase);

        $sql = "insert into `credits` (`Sem`, `Course_Type`, `AICTE_Category`, `Code`, `Course_Name`, `Lec`, `Tutorial`, `Practicals`, `Interactive`, `Hr`, `Cr`, `MSE`, `ISE`, `ESE`) values ('$Sem', '$Course_Type', '$AICTE_Category', '$Code', '$Course_Name', '$Lec', '$Tutorial', '$Practicals', '$interactive', '$Hr', '$Cr', '$MSE', '$ISE', '$ESE')";
        $result = mysqli_query($conn, $sql);

        echo '<script>alert("Inserted")</script>';
        header("location: demo.php");
    }
 

    }
?>
</body>
</html>