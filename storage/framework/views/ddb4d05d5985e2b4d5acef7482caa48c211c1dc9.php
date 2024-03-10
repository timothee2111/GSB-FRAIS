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
        <?php $__currentLoopData = $fraisForfaitaires; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fraisForfait): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($fraisForfait->libelle); ?> : <?php echo e($fraisForfait->montant); ?> €</li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php /**PATH /var/www/html/GSB-frais_etudiants/GSB-Frais/GSB-Frais/resources/views/v-espace.blade.php ENDPATH**/ ?>