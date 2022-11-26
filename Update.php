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
    <?php

    $Code = $_GET['a'];
    $user = 'root';
    $mydatabase = 'credit_system';


    $conn = new mysqli("localhost", $user, "", $mydatabase);
    $result = mysqli_query($conn, "SELECT * FROM `credits` WHERE `Code`='$Code'");
    while($res = mysqli_fetch_array($result))
    {
    $name = $res['Sem'];
?>  
<form method="post" action="Update.php">
<table id="Credits">
    <thead>
        <tr>
            <th>Sem</th>
            <th>Course Type</th>
            <th>AICTE Category</th>
            <th>Code</th>
            <th>Course Name</th>
            <th>L</th>
            <th>T</th>
            <th>P</th>
            <th>I</th>
            <th>Hr</th>
            <th>Cr</th>
            <th>MSE/LA1</th>
            <th>ISE/LA2</th>
            <th>ESE</th>
        </tr>
    </thead>

    <!-- Data -->
    <tbody>
        <tr>
            <td>
                <input type="number" name="Sem" id="Sem" value=<?php echo $res['Sem'];?>>
            </td>
            <td>
                <select id="Course_Type" name="Course_Type" value=<?php echo $res['Course_Type']; ?>>
                    <option value="Professional Core(Theory)">Professional Core(Theory)</option>
                    <option value="Professional Core(Lab)">Professional Core(Theory)</option>
                    <option value="Professional Elective(Theory)">Professional Elective(Theory)</option>
                    <option value="Professional Elective(Lab)">Professional Elective(Lab)</option>
                    <option value="Open Elective">Open Elective</option>
                    <option value="AICTE Mandatory Course">AICTE Mandatory Course</option>
                    <option value="VAPC">VAPC</option>
                    <option value="VALC">VALC</option>
                </select>
            </td>
            <td>
                <select id="AICTE_Category" name="AICTE_Category" value=<?php echo $res['AICTE_Category']; ?>>
                    <option value="BS">BS</option>
                    <option value="HS">HS</option>
                    <option value="ES">ES</option>
                    <option value="PC">PC</option>
                    <option value="PE">PE</option>
                    <option value="OE">OE</option>
                    <option value="PR">PR</option>
                    <option value="MC">MC</option>
                </select>
            </td>
            <td>
                <input type="text" name="Code" id="Code" value=<?php echo $res['Code']; ?>>
            </td>
            <td>
                <input type="text" name="Course_Name" id="Course_Name" value=<?php echo $res['Course_Name']; ?>>
            </td>
            <td>
                <input type="number" name="Lec" id="Lec" value=<?php echo $res['Lec']; ?>>
            </td>
            <td>
                <input type="number" name="Tutorial" id="Tutorial" value=<?php echo $res['Tutorial']; ?>>
            </td>
            <td>
                <input type="number" name="Practicals" id="Practicals" value=<?php echo $res['Practicals']; ?>>
            </td>
            <td>
                <input type="number" name="interactive" id="interactive" value=<?php echo $res['Interactive']; ?>>
            </td>
            <td>
                <input type="number" name="Hr" id="Hr" value=<?php echo $res['Hr']; ?>>
            </td>
            <td>
                <input type="number" name="Cr" id="Cr" value=<?php echo $res['Cr']; ?>>
            </td>
            <td>
                <input type="number" name="MSE" id="MSE" value=<?php echo $res['MSE']; ?>>
            </td>
            <td>
                <input type="number" name="ISE" id="ISE" value=<?php echo $res['ISE']; ?>>
            </td>
            <td>
                <input type="number" name="ESE" id="ESE" value=<?php echo $res['ESE']; ?>>
            </td>     
</table>
    <?php
}
?>

<input type="submit" value="submit">
<input type="reset" value="reset">
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
        $Hr = $_POST['Hr'];
        $Cr = $_POST['Cr'];
        $MSE = $_POST['MSE'];
        $ISE = $_POST['ISE'];
        $ESE = $_POST['ESE'];
        

        $user = 'root';
        $mydatabase = 'credit_system';

        $conn = new mysqli("localhost", $user, "", $mydatabase);

        if($conn->connect_error){
            die('Failed '. $conn->connect_error);
        }
        else{
            $sql = "update `credits` set `Sem` = '$Sem', `Course_Type` = '$Course_Type' , `AICTE_Category` = '$AICTE_Category' , `Course_Name` = '$Course_Name' , `Lec` = '$Lec' , `Tutorial` = '$Tutorial' , `Practicals` = '$Practicals' , `interactive` = '$interactive' , `Hr` = '$Hr' , `Cr` = '$Cr' , `MSE` = '$MSE' , `ISE` = '$ISE' , `ESE` = '$ESE' where `Code` = '$Code' ";
            $result = mysqli_query($conn, $sql);

            header("location: demo.php");

        }
    }
?>
</body>
</html>