<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>
 Demande de devis
 </title>
 <link rel="stylesheet" type="text/css" href="templates/form.css" media="all" />
 
 </head>
 <body id="main_body">
 <div id="form_container">
 <h1>
 <a>Ajouter vos photos</a>
 </h1>
<form method="post" action="insert_form.php" enctype="multipart/form-data">
 
 <ul>

 <li>
 <span>Nom<input id="nom" name="nom" class="element text long" type="text" maxlength="255" value="" /><label></label></span>

 <li>
 	<span>Repertoire<select id="id_rep" name="id_rep" class="element text long" type="int" maxlength="11" value="" />
 	<option> 1
 	<option> 2
 	<option> 3
 	<option> 4
 	</option>
    </select>
    <br>Aide: 
    <br>1: Eflamm Vacances
    <br>2: Eflamm Travail
    <br>3: Charifa Vacances
    <br>4: Charifa Travail
 	</span>

 </li>
 <li>
 <label for="image"> Ajouter une photo : </label>
 <input type="hidden" name="MAX_FILE_SIZE" value="300000" >
 <input type="file" id="file" name="image">
 <input type="submit" name="envoyer" value="Ajouter">
 </li>
 </ul>
</form>
 <div id="footer">
 &nbsp;
 </div>
 </div>
 </body>
</html>