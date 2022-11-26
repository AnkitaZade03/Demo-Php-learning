<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->

    <title>Document</title>
    <style>
        #insert-table{
            display: none;
        }
        #submit{
            display: none;
        }
    </style>
</head>
<body>
    
    <table>
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
                $user = "root";
                $mydatabase = "credit_system";

                $conn = new mysqli("localhost", $user, "", $mydatabase);

                if($conn->connect_error){
                    die("Failed ". $conn->connect_error);
                }
                else{
                    $sql = "SELECT * FROM credits";
                    $result = $conn->query($sql);

                    if(!$result){
                        die("Invalid query: ". $conn->error);
                    }

                    else{
                        $srNo = 0;
                        while($row = $result->fetch_assoc()){
                            echo 
                            "<tr>
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
                            <td>" . $row["ESE"] . "</td>
                        </tr>";
                        }
                    }
                }
                ?>
            </tr>

        </tbody>
    </table>

    <form method="post" action="Insert.php">
        <table>
        <tbody>
             <tr id="insert-table">
                    <td>
                        <input type="number" name="Sem" id="Sem">
                    </td>
                    <td>
                        <select id="Course_Type" name="Course_Type">
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
                        <select id="AICTE_Category" name="AICTE_Category">
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
                        <input type="text" name="Code" id="Code">
                    </td>
                    <td>
                        <input type="text" name="Course_Name" id="Course_Name">
                    </td>
                    <td>
                        <input type="number" name="Lec" id="Lec">
                    </td>
                    <td>
                        <input type="number" name="Tutorial" id="Tutorial">
                    </td>
                    <td>
                        <input type="number" name="Practicals" id="Practicals">
                    </td>
                    <td>
                        <input type="number" name="Interactive" id="Interactive">
                    </td>
                    <td>
                        <input type="number" name="Hr" id="Hr">
                    </td>
                    <td>
                        <input type="number" name="Cr" id="Cr">
                    </td>
                    <td>
                        <input type="number" name="MSE" id="MSE">
                    </td>
                    <td>
                        <input type="number" name="ISE" id="ISE">
                    </td>
                    <td>
                        <input type="number" name="ESE" id="ESE">
                    </td> 
                </tr>
            </tbody>
        </table>
        
        <input type="submit" value="Submit" id="submit">
    </form>

    <div class="button">
        <input type="button" value="Edit" onclick="document.location.href='Edit.php'">

        <!-- <button value="Insert" id="insert2" onclick="document.location.href='ModifiedIndex.php'">Insert</button> -->

        <button id="insert" >Insert</button>

        <!-- <br>
        <button type="submit" id="submit">Submit</button> -->

    </div>

    
    
    <script>
        let showInputTableButton = false;
        // let ShowButton = false;

        const showInputTable = () => { 
            if(showInputTableButton){
                toggleTableInput.style.display = "block";
                toggleButton.style.display = "block";
                showInputTableButton = false;
                console.log(showInputTableButton);
            }else{
                toggleTableInput.style.display = "none";
                toggleButton.style.display = "none";
                showInputTableButton = true;
                // ShowButton = true;
            } 
        }

        

        document.getElementById("insert").addEventListener('click',showInputTable);

        let toggleTableInput = document.getElementById('insert-table');
        let toggleButton = document.getElementById('submit');

    </script>

</body>
</html>