<!DOCTYPE html>
<html> 
<body> 
<?php 

//variable and its value for switch-case
$DayTask = 7;

//implementing switch cases to assign tasks 
switch ($DayTask) {
    case '1': 
        echo  "Monday: Do Homework";
    break; 
    case '2': 
        echo "Tuesday: Attend Online Class";
    break;
    case '3':
        echo "Wednesday: Group Study";
    break;
    case '4':
        echo "Thursday: Complete Project";
    break;
    case '5':
        echo "Friday: Prepare for Quiz";
    break;
    case '6':
        echo "Saturday: Relax";
    break;
    case'7':
        echo "Sunday: Review Lessons";
    break;
}
?>
</body>
</html>
