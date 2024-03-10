<!DOCTYPE html>
<html>
<head>
    <title>Saisie de fiche</title>
    <style>
        .form-group {
            display: inline-block;
            margin-right: 20px; /* Ajustez selon vos préférences */
        }
    </style>
</head>

<body>
    <h1>Saisie de frais hors forfait</h1>
    <form action="/visiteur/fiche/saisir" method="POST">

        <label for="id">ID :</label>
        <input type="text" id="id" name="id" required>
        <br>

        <label for="libelle">Libellé :</label>
        <input type="text" id="libelle" name="libelle" required>
        <br>

        <label for="montant">Montant :</label>
        <input type="number" id="montant" name="montant" step="0.01" required>
        <br>

        <button type="submit">Créer</button>
    </form>
</body>
</html>

<?php /**PATH /var/www/html/GSB-frais_etudiants/GSB-Frais/GSB-Frais/resources/views/v-renseignement.blade.php ENDPATH**/ ?>