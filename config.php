<?php 
	

	define('BD_ADR', 'localhost');
	define('BD_ADMIN', 'root');
	define('BD_PASS', '');


	define('BD_NOM', 'projet');

	mysql_connect(BD_ADR,BD_ADMIN,BD_PASS) or die('Erreur de connexion');
	mysql_select_db(BD_NOM) or die ('Erreur ede connexion');


 ?>