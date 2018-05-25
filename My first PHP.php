<html>
 <head>
<form action="FactCalc.php" method="post">
Enter a Number: <input type="text" name="number">
<input type="submit" Value="Calculate Factorial">
</form>

  <title>PHP Test</title>
 </head>
 <body>


 <?php echo '<p>Hello World</p>'; ?> 



<?php 
$a= "prabath";
$b= "suba";
$c= $a."".$b;

echo $c;
echo "<br>";
; ?> 
d



<?php 
 
$a= 23;
$b= 32;
$c= $a+$b;

echo $c;
if($c<=50)
   echo $c;
else 
    echo "no result";
; ?> 





<?php 


for ($i=0; $i<=10; $i++)
{   
    echo "*";
    
    for ($j=0; $j<$i; $j++)
    {   
       echo "*";

    }   
    echo "</br>";    
} 

; ?> 




<?php
function writeMsg() {
    echo "Hello world!";
}

writeMsg(); // call the function
?>





<?php
  $num = $_POST["number"];
  $factorial = 1;
  for ($x=$num; $x>=1; $x--)
  {
   $factorial = $factorial * $x;
   }
   echo "Factorial of $num is $factorial";
?> 

</html>





