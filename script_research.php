<?php

$connexion = mysql_connect('sqletud.univ-mlv.fr',pdahan,3Yyaquux) or die('erreur de connexion');

mysql_select_db('pdahan',$connexion) or die('erreur de base de donnée');



$requete = "SELECT * FROM item";


?>