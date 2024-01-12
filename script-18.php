<?php

$number= $_POST['enter_number'];
$submit= $_POST['submit'];
$randomnumber= mt_rand(1,100);
?>

<form action="" method="POST">
Guess a Number Between 1 and 100: 
<input type="text" name="enter_number" value=''/> <br><br>

Result: 
<?php 
if ($submit){

if (($number > 0) && ($number <100)){
if ($number != $randomnumber)
{
echo "Incorrect guess. The correct number was $randomnumber. Try again";
}
else 
{
echo "$randomnumber is the correct guess. You got it right.";
}
}

}

?>
<br><br>
<input type="submit" name="submit" value="Search"/><br><br>
</form>
