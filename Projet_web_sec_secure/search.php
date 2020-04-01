<?php
   $name=htmlspecialchars($_GET['query'],ENT_QUOTES, 'UTF-8');

   echo "Hello, " . $name;
   
?>