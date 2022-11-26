<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form</title>
</head>
<body>
<h1>Form</h1>
    <form action="index.php" method="post">
        <div class="Data">
            <h3>Credit Form</h3>
            <div class="details">
                Select Sem
                <select id="Sem" name="Sem">
                    <option value="">Select</option>
                    <option value="1">I</option>
                    <option value="2">II</option>
                    <option value="3">III</option>
                    <option value="4">IV</option>
                    <option value="5">V</option>
                    <option value="6">VI</option>
                    <option value="7">VII</option>
                    <option value="8">VIII</option>
                </select>

                Enter the Course name: <input type="text" id="Course_Name" name="Course_Name">
                <br><br>
    
                Select Course Type: <div class="radiobtn">
                    <input type="radio" id="Theory" name="Course_Type" value="Theory"> Theory
                    <input type="radio" id="Practical" name="Course_Type" value="Lab"> Practical
                    <input type="radio" id="PE" name="Course_Type" value="PE"> PE
                    <input type="radio" id="OE" name="Course_Type" value="OE"> OE
                </div>

                Select AICTE_Category
                <select id="AICTE_Category" name="AICTE_Category">
                    <option value="">Select</option>
                    <option value="BS">BS</option>
                    <option value="ES">ES</option>
                    <option value="PC">PC</option>
                    <option value="HS">HS</option>
                    <option value="PR">PR</option>
                    <option value="PE">PE</option>
                    <option value="OE">OE</option>
                </select>

                Enter Course Code: 
                <input type="text" id="Code" name="Code">
                <br><br>       

                Enter no of lec: 
                <input type="number" id="Lec" name="Lec">
                <br><br>

                Enter no of tutorial: 
                <input type="number" id="Tutorial" name="Tutorial">
                <br><br>

                Enter no of Practicals: 
                <input type="number" id="Practicals" name="Practicals">
                <br><br>

                Enter no of interactive lec: 
                <input type="number" id="interactive" name="interactive">
                <br><br>
            </div>
            
            <div class="button">
                <input type="submit" value="submit">
                <input type="reset" value="reset">
            </div>
        </div>   
    </form>


<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $Sem = $_POST['Sem'];
        $Course_Name = $_POST['Course_Name'];
        $Course_Type = $_POST['Course_Type'];
        $AICTE_Category = $_POST['AICTE_Category'];
        $Code = $_POST['Code'];
        $Lec = $_POST['Lec'];
        $Tutorial = $_POST['Tutorial'];
        $Practicals = $_POST['Practicals'];
        $interactive = $_POST['interactive'];
        $Cr = $Lec + $Tutorial + $Practicals + $interactive;
        $MSE = 30;
        $ISE = 20;
        $ESE = 50;

        if($Course_Type == "Lab"){
            $ISE = 30;
            $ESE = 40;
        }

        $user = 'root';
        $mydatabase = 'credit_system';

        $conn = new mysqli("localhost", $user, "", $mydatabase);

        if($conn->connect_error){
            die('Failed '. $conn->connect_error);
        }
        else{
            $sql = "insert into `credits`(`Sem`, `Course_Type`, `AICTE_Category`, `Code`, `Course_Name`, `Lec`, `Tutorial`, `Practicals`, `interactive`, `Hr`, `Cr`, `MSE`, `ISE`, `ESE`) values ('$Sem', '$Course_Type', '$AICTE_Category', '$Code', '$Course_Name', '$Lec', '$Tutorial', '$Practicals', '$interactive', '$Cr', '$Cr', '$MSE', '$ISE', '$ESE')";
            $result = mysqli_query($conn, $sql);
        }
    }
?>


</body>
</html>