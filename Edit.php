<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="margin: 50px;">
    <form method="post" action="ModifiedIndex.php">
        <table id="table">
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
                    <?php
                    $user = 'root';
                    $mydatabase = 'credit_system';

                    $conn = new mysqli("localhost", $user, "", $mydatabase);

                    if($conn->connect_error){
                        die('Failed '. $conn->connect_error);
                    }
                    else{
                        $sql = "SELECT * FROM credits";
                        $result = $conn->query($sql);

                        if(!$result){
                            die("Invalid query: ". $conn->error);
                        }

                        else{
                            while($row = $result->fetch_assoc()){
                                echo 
                                "
                                <tr>
                                <td>" . $row["Sem"] . "</td>
                                <td>" . $row["Course_Type"] . "</td>
                                <td>" . $row["AICTE_Category"] . "</td>
                                <td>" . $row["Code"] . "</td>
                                <td>" . $row["Course_Name"] . "</td>
                                <td>" . $row["Lec"] . "</td>
                                <td>" . $row["Tutorial"] . "</td>
                                <td>" . $row["Practicals"] . "</td>
                                <td>" . $row["Interactive"] . "</td>
                                <td>" . $row["Hr"] . "</td>
                                <td>" . $row["Cr"] . "</td>
                                <td>" . $row["MSE"] . "</td>
                                <td>" . $row["ISE"] . "</td>
                                <td>" . $row["ESE"] . "</td>"
                            ?>
                            <td><a href="del.php?a=<?php echo $row['Code']; ?>">Delete</a></td>

                            <td><a href="Update.php?a=<?php echo $row['Code']; ?>">Update</a></td>


                            <?php
                            echo "</tr>";
                            }
                        }



                    }
                    ?>
                </tr>
            </tbody>

        </table>
    </form>

</body>
</html>