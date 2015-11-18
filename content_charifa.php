<div id="header">
 <?php
 include "config.php";
 include "database.fn.php";
 $link = database_connect($db);
 $dir = 'images/';
 
 /**** on va chercher la boucle afin d'afficher la gallery*/
 include "charifa.php";
 
 ?>