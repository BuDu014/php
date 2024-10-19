<!DOCTYPE html>
<html> 
<body>
<h3> 6. Function calculating an area of rectangle </h3>
<p>Lenght = 10, Width = 5. </p>


<?php 
//defining function
function calculateArea ($length, $width) {
 $area= $length*$width;                     //formula for getting the area
 return $area;                             //returning area
}
echo "The area is equal to: ".calculateArea(10,5)           //printing the value
?>

<h3>7. Greeting Function </h3>
<?php
function greet($name) {
    return "Hello, $name!";
}
echo greet("Gail");

?>
</body>
</html>