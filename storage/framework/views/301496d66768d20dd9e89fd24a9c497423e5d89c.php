<!DOCTYPE html>
<html>
<head>
    <title>visiteur connexion</title>
</head>
<body>
    <h1>Connexion visiteur</h1>
    
    <?php if(session('error')): ?>
        <p style="color: red;"><?php echo e(session('error')); ?></p>
    <?php endif; ?>
    
    <form action="espace" method="GET">
        <label for="login">Nom d'utilisateur :</label>
        <input type="text" id="login" name="login" required> <br><br>
        
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required> <br><br>
        
        <input type="submit" value="Se connecter">
    </form>
    
    <form action="/">
			<input type="submit" value="retour">
	</form>
    
</body>
</html>
<?php /**PATH /var/www/html/GSB-frais_etudiants/GSB-Frais/GSB-Frais/resources/views/v-connexion.blade.php ENDPATH**/ ?>