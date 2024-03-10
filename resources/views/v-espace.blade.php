<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace Visiteur</title>
</head>
<body>
    <h1>Espace Visiteur</h1>
    
    <!-- Affichage des frais forfaitaires -->
    <h2>Frais Forfaitaires</h2>
    <ul>
        @foreach ($fraisForfaitaires as $fraisForfait)
            <li>{{ $fraisForfait->libelle }} : {{ $fraisForfait->montant }} €</li>
        @endforeach
    </ul>

    <!-- Formulaires pour saisir une fiche et se déconnecter -->
    <form action="/visiteur/fiche/renseignement" method="GET">
        <button type="submit">Saisir une fiche</button>
    </form>
    
    <form action="/visiteur/espace" method="POST">
        <button type="submit">Se déconnecter</button>
    </form>
</body>
</html>
