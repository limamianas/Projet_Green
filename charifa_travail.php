<?php
 // on crée la requête SQL : on va chercher id,nom,note,photo de la table "poni" et on les ordonne par note
 $sql = 'SELECT id_photo,nom,id_repertoire,image FROM photo WHERE id_repertoire=4' ;
 // on envoie la requête
 $req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
 
 echo "<div id='wrapper'>";
 // on fait une boucle qui va faire un tour pour chaque enregistrement , en gros tant qu'il y aura encore un poney dans la table
 while($data = mysql_fetch_assoc($req))
 {
 // on affiche les informations de l'enregistrement en cours
 echo "<div class='poney'>";
 echo '<h2><a title="'.$data['nom'].'" href="page.php?id='.$data['id_photo'].'">'.$data['nom'].'</a></h2>';
 echo "<img src='".$dir.$data['image']."'width=200 height=150/>";
 echo "<br> <br>";
 echo "</div>";
 
 } ;
 echo "<div class='spacer'></div>";
 echo "</div>";
 mysql_close($link);
 ?>