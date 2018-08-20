<?php 

//Método con str_shuffle() 
function generateRandomString($length = 7) { 
    return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyz"), 0, $length); 
 
} 
   echo 'SEM-' . generateRandomString();
   
?>