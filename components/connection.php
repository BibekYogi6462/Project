<?php

$conn = mysqli_connect("localhost", "root", "", "gurushishya");
if(!$conn)
{
  echo " Not Connected To Database";
}

// function unique_id()
// {
//   $str = 'abcdefghikjlmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
//   $rand = array();
//   $length = strlen($str)-1;
//   for ($i=0; $i<20; $i++)
//   {
//     $n = mt_rand(0, $length);
//     $rand[] = $str[$n];
//   }
//   return implode($rand);
// }

?>