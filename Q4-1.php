<html>

<head>

<title>Gross salary of an Employee</title>

</head>

<body>

<form method="post">

<table border="0">

<tr>

<td> <input type="text" name="salary" value="" placeholder="Enter basic salary"/>

</td>

</tr>

<tr>

<td> <input type="submit" name="submit" value="Submit"/>

</td>

</tr>

</table>

</form>

<?php

if(isset($_POST['submit']))

{

$basic_salary = $_POST['salary'];

$DA = 0.4 * $basic_salary;

$HRA = 0.2 * $basic_salary;

//To Compute the gross Salary

$gross_salary = $basic_salary + $DA + $HRA;

echo "Basic Salary : ".$basic_salary."/-";

echo "Dearness Allowance: " .$DA."/-";

echo "House Rent : " .$HRA ."/-";

echo "Gross Salary : " .$gross_salary ."/-";

return 0;

}

?>

</body>

</html>