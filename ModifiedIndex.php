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

<form method="post" action="Insert.php">
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
        </table>
        <input type="submit" value="submit">
        <input type="reset" value="reset">
    </form>
</body>
</html>