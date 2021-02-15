<?php

$titre = 'Se connecter | Mon super blog';
include 'layout/header.php';?>

<h1 class="mb-4">Se connecter</h1>

<form action="login-handler.php" method="post">
	<div class="form-group">
		<label for="pseudo">Pseudo</label>
		<input type="text" class="form-control" name="pseudo" id="pseudo" aria-describedby="pseudo-help" placeholder="Pseudo" required autofocus>
		<small id="pseudo-help" class="form-text text-muted">Votre pseudonyme utilisateur</small>
	</div>


	<div class="form-group">
		<label for="password">Mot de passe</label>
		<input type="password" class="form-control" name="password" id="password" aria-describedby="password-help" placeholder="Mot de passe" required minlength="6"></textarea>
		<small id="password-help" class="form-text text-muted">Votre mot de passe. Doit contenir au moins 6 caractères.</small>
	</div>

	<div class="form-check">
		<label class="form-check-label">
		<input type="checkbox" class="form-check-input" name="rester-connecte" id="rester-connecte" value="true">Rester connecté
		</label>
	
	</div>


	<button type="submit" class="btn btn-primary">Se connecter</button>
</form>





<?php include 'layout/footer.php';