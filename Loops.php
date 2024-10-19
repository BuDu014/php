<!DOCTYPE html>
<html> 
<body> 
<h3>3. For Loop... even numbers from 1-20.</h3>
<?php
//implementing for loop for getting even numbers from 1-20
for ($i=2; $i <= 20; $i+=2)
{
    echo "$i .<br>";
}
?>

<h3>4. While Loop... sum of 1-100 </h3>

<?php
$i=1;
$sum =0;
while ($i <= 100)    //adding current value of i to the sum
{
   $sum += $i;       
   $i++;            //incrementing by 1
}   
 echo "The sum of 1 to 100 is: $sum";
?>

<h3>5. Do-while.. couting down numbers starting from 10</h3>
<?php 
$countdown = 10;        //starting point

do {
    echo $countdown."<br>";  //printing the loop
    $countdown --;          //decrementing the number 
} while ($countdown >=1 ); //loop continues untill it reaches to 1

?>
</body>
</html>
