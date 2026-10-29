
<?php
$projets = [
    [
        "nom" => "Gestion des étudiants",
        "description" => "Application de gestion des étudiants."
    ],
    [
        "nom" => "Gestion des notes",
        "description" => "Application de gestion des notes."
    ],
    [
        "nom" => "Gestion des projets",
        "description" => "Application de suivi des projets."
    ]
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des projets</title>
</head>
<body>
     <nav>
  <a href="index.php">Accueil</a> |
  <a href="etudiants.php">Étudiants</a> |
  <a href="projets.php">Projets</a>
</nav>
    <h1>Liste des projets</h1>

    <?php foreach ($projets as $projet): ?>
        <article>
            <h2><?= htmlspecialchars($projet["nom"]) ?></h2>
            <p><?= htmlspecialchars($projet["description"]) ?></p>
        </article>
    <?php endforeach; ?>
</body>
</html>
