<!--PROGRAMMING AND DEVELOPMENT BY AKASH KUMAR BASAK-->
<!--
An array stores multiple values in one single variable

In PHP, there are three types of arrays:
1. Indexed arrays - Arrays with a numeric index
2. Associative arrays - Arrays with named keys
3. Multidimensional arrays - Arrays containing one or more arrays
-->
<?php
//Indexed array
$studentName = array("David", "Binod", "Sam");
echo $studentName["1"]."<pre>";
echo "Total index=".count($studentName)."<pre>";
for($loop = 0; $loop < count($studentName); $loop++)
{
echo $studentName[$loop]."<pre>";
}
print_r($studentName);

//Associative araay
$employeeName = array("MD"=>"Piter Parker", "CEO"=>"James", "CTO"=>"Nicolas");
echo $employeeName["MD"]."<pre>";
print_r($employeeName);
foreach($employeeName as $employeeNameKey=>$employeeNameValue)
{
  echo $employeeNameKey." : ".$employeeNameValue;
  echo "<br>";
}

//Multidimensional araay
 ?>
