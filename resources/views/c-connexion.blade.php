<!DOCTYPE html>
<html>
<head>
    <title>comptable connexion</title>
</head>
<body>
    <h1>Connexion comptable</h1>
    
    @if(session('error'))
        <p style="color: red;">{{ session('error') }}</p>
    @endif
    
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
