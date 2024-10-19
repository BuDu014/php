<!DOCTYPE html>
<html> 
<body> 
<h3>1. Creating if-else that checks student grade and display a message </h3>
<?php 

//variable for student's grade
$grade = 89;


//implementing if-else-if conditional statement
if     ($grade >= 90)   { echo "Exellent!";} //if grade is 90+
elseif ($grade >=80) {echo "Very Good!";}   //if grade is between 80-89
elseif ($grade >=70) {echo "Good!";}       //if grade is between 70-79
else {echo "Needs Improvement.";}         //if grade is below 70

?>
</body>
</html>
