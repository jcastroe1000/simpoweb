<?php
$password = crypt(11212,'$1$somethin$' );
echo $password;
echo '<br>';
$password2 = crypt(1121222,'$1$somethin$' );
echo $password2;