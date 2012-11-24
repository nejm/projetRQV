<?php require_once 'config.php'; ?>

<! doctype html>
<html>
<head>
	<meta charset="utf-8">
	<script src="js/lib/jquery.js"></script>
</head>
<body>
	<div id="login">
			<div id="login&inscrire">
			<button id="login_user">login utilisateur</button>
				<a href="#inscrire">s'inscrire</a>
			</div>
			<button id="login_agent">login agent</button>
	</div>
	<form id="utilisateur">
	    <div id="utilisateur">
	    		<a ancore="#inscrire">s'inscrire</a>
	    		<label for="cin">CIN</label>
				<input id="cin" type="tel" name="CIN" required></input><br>
				<label for="nom">NOM</label>
				<input id="nom" type="text" name="nom" required></input><br>
				<label for="Prenom">Prenom</label>
				<input id="Prenom" type="tel" name="Prenom"></input><br>
				
				<div id="adresse">ADRESSE
				<label for="NUMERO">NUMERO</label>
				<input id="NUMERO" type="NUMBER" name="NUMERO"></input><br>
				<label for="rue">rue</label>
				<input id="rue" type="text" name="rue"></input><br>
				<label for="ville">ville</label>
				<input id="ville" type="text" name="ville"></input><br>
				<label for="codepostale">codepostale</label>
				<input id="codepostale" type="NUMBER" name="codepostale"></input><br>
				</div>

				<label for="telephone">Téléphone</label>
				<input id="telephone" name="telephone" type="tel">
				<button id="submit" type="submit">envoyer</button>
				
		</div>
		<div id="old_declaration"></div>
	</form>

	<form id="declaration">
		<div id="declaration">
			<label for="Titre">Titre</label>
			<input id="Titre" type="text" name="Titre" required></input><br>
			<label for="date">date</label>
			<input id="date" type="date" name="date" ></input><br>
			
			<div id="adresse">lieuetat
				<label for="NUMERO">NUMERO</label>
				<input id="NUMERO" type="NUMBER" name="NUMERO" ></input><br>
				<label for="rue">rue</label>
				<input id="rue" type="text" name="rue" ></input><br>
				<label for="ville">ville</label>
				<input id="ville" type="text" name="ville" ></input><br>
				<label for="codepostale">codepostale</label>
				<input id="codepostale" type="NUMBER" name="codepostale" ></input><br>
			</div>
			<div id="vehicule">
				<label for="Type">Type</label>
				<input type="radio" name="T1">véhicule à moteur</input>
				<input type="radio" name="T1">bicyclette</input><br>
				<label for="bgcolor">Couleur de véhicule</label>
				<input id="bgcolor" name="bgcolor" type="color"></input><br>
				<label for="Marque">Marque</label>
				<input id="Marque" type="text" name="Marque" ></input><br>
				<label for="Description">Description</label>
				<input id="Description" type="text" name="Description" ></input><br>
			</div>
			<br>
			<button name="sauvegarder">sauvegarder</button>
		</div>

	</form>

		<div id="droite">
		
	<script src="js/model.js"></script>
</body>
</html>