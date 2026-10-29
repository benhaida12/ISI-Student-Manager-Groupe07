
<?php
$etudiants = [
    ["nom" => "Ali", "prenom" => "Ahmed", "filiere" => "ISI"],
    ["nom" => "Sara", "prenom" => "Salma", "filiere" => "ISI"],
    ["nom" => "Yassine", "prenom" => "Omar", "filiere" => "ISI"]
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Liste des étudiants</title>
</head>
<body>
     <nav>
  <a href="index.php">Accueil</a> |
  <a href="etudiants.php">Étudiants</a> |
  <a href="projets.php">Projets</a>
</nav>
    <h1>Liste des étudiants</h1>
    <table border="1">
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Filière</th>
        </tr>
        <?php foreach ($etudiants as $etudiant) { ?>
        <tr>
            <td><?= $etudiant["nom"] ?></td>
            <td><?= $etudiant["prenom"] ?></td>
            <td><?= $etudiant["filiere"] ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
