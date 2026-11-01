# ISI Student Manager

## 1. Présentation du projet
Ce travail est réalisé dans le cadre du TP_3 :
Gestion collaborative des versions avec Git et GitHub.

L'objectif est de participer au développement collaboratif
d'une mini-application PHP en utilisant Git et GitHub.

## 2. Membres du groupe et responsabilités

| Membre | Responsabilité | Fichier |
|---|---|---|
| Étudiant A | Chef de projet et accueil | index.php |
| Jamil Ilham| Liste des étudiants | etudiants.php |
| EL Berkaoui Wiam | Liste des projets | projets.php |
| Étudiant D | CSS et navigation | style.css |

## 3. Environnement de développement
- PHP
- Git
- GitHub
- Visual Studio Code
- SSH
### 2. Responsabilité de l'étudiant B(Ilham Jamil)
- Membre : Jamil Ilham
- Fonction : Développeur de la page des etudiant
- Fichier principal : etudiants.php
- Branche personnelle : feature/etudiants
### Configuration de Git
Vérification de l'installation etConfiguration du nom et l'adresse e-mail :
![configGit](captures/etudiant-B/configName.png)
### Configuration SSH
préparation d’authentification SSH en générant une paire de clés Ed25519, puis en ajoutant la clé publique au compte GitHub
![configSSH](captures/etudiant-B/ssh.png)
### Clonage du dépôt commun
![clonnage depot commun](captures/etudiant-B/clonnage.png)
### Vérification du statut de main
![status main](captures/etudiant-B/main.png)
origin désigne le dépôt distant ; main est la branche principale ; origin/main représente la branche distante suivie localement ; HEAD indique la position courante dans Git.
### Création de branche etudiants
![branche etudiants](captures/etudiant-B/branchEtu5.png)
Cette branche permet de développer les fonctionnalités sans modifier directement main.
### Développement de etudiants.php
le fichier etudiants.php contient un tableau PHP de trois étudiants et une boucle qui affiche leurs informations dans un tableau HTML : nom, prénom et filière.
![etudiants.php](captures/etudiant-B/etuPhp6.png)
###  Ajout et commit
![commit](captures/etudiant-B/commitEtu8.png)
### Push de etudiant.php vers GitHub
Publication de la branche :
![push etudiants](captures/etudiant-B/push.png)
### Pull Request et revue de code
Création d'une Pull Request sur GitHub :
- Branche source : feature/etudiants
- Branche destination : main
- Titre : Ajout de la liste des etudiants
La Pull Request est examinée Wiam EL Berkaoui avant sa fusion dans main.
![pull request](captures/etudiant-B/pullRest88.png)
Revue de code
-J ai participé à la revue de code de la Pull Request de chef de projet.
![Revue de code](captures/etudiant-B/revueCode.png)
### gestion de conflit
deux branches ont modifié la même ligne du fichier configuration.txt :j'ai proposé « Version : 2.0 - Etudiant B » et wiam EL Berkaoui « Version : 3.0 - Etudiant C »
![conflit](captures/etudiant-B/conflit9.png)
le conflit apparaît lorsque Git ne peut pas fusionner automatiquement deux modifications concurrentes de la même partie d’un fichier. Il faut choisir une version cohérente, puis valider la résolution.
Le conflit a été résolu en conservant une version commune :Version : 3.0 - Version collaborative
![resoulution conflit](captures/etudiant-B/commitResolution2.png)
### historique graphique et affichae final
J’ai vérifié l’historique des commits et des branches, puis l’affichage final de la page des étudiants.
![graphique](captures/etudiant-B/historiqueFinale.png)
![afichage finale](captures/etudiant-B/afficageFinal.png)


### 3. Responsabilité de l'étudiant C(EL Berkaoui Wiam)

- Membre : Étudiant C
- Fonction : Développeur de la page des projets
- Fichier principal : projets.php
- Branche personnelle : feature/projets

### 3. Configuration de Git

Vérification de l'installation :
![Liste des projets](captures/etudiant-C/git1.png)

Configuration et Vérification  du nom et l'adresse e-mail :
![Liste des projets](captures/etudiant-C/git2.png)

### 4. Configuration SSH
*Génération d'une clé SSH Ed25519 
*Affichage de la clé publique 
*La clé publique est ajoutée au compte GitHub.
-->Test de connexion :
![Liste des projets](captures/etudiant-C/git3.png)
### 5. Clonage du dépôt commun

*Clonage du dépôt GitHub 
*Accès au dossier 
*Vérification du dépôt distant 
*Vérification des branches 
*Vérification de l'état 
![Liste des projets](captures/etudiant-C/git4.png)

### 6. Mise à jour de main

Récupération du commit initial de l'étudiant A :
![Liste des projets](captures/etudiant-C/git5.png)

### 7. Création de la branche personnelle

Création et Vérification de la branche active :
![Liste des projets](captures/etudiant-C/git6.png)

### 8. Développement de projets.php

Création du fichier projets.php.

Le fichier permet d'afficher une liste de projets
avec du code PHP simple et HTML.

le contenu :
![Liste des projets](captures/etudiant-C/git7.png)

### 9. Test de la page PHP

Accès à la page :
http://localhost:8000/projets.php
![Liste des projets](captures/etudiant-C/git8.png)
### 10. Ajout et commit

Ajout du fichier 
Création du commit 
Vérification de l'historique :
![Liste des projets](captures/etudiant-C/git9.png)
### 11. Push vers GitHub

Publication de la branche :
![Liste des projets](captures/etudiant-C/git10.png)

### 12. Pull Request
Création d'une Pull Request sur GitHub :
- Branche source : feature/projets
- Branche destination : main
- Titre : Ajout de la liste des projets
La Pull Request est examinée par un autre membre
avant sa fusion dans main.
![Liste des projets](captures/etudiant-C/git11.png)

### 13. Revue de code
J ai participé à la revue de code
de la Pull Request de l'étudiant B.
Un commentaire technique pertinent est ajouté
pour vérifier la qualité et la lisibilité du code.
![Liste des projets](captures/etudiant-C/git12.png)

### 14. Exercice de résolution des conflits
Création du fichier configuration.txt par l'étudiant A
avec la version initiale :
-->Version : 1.0
L'étudiant C crée une branche à partir de main
et modifie la version :
-->Version : 3.0 - Etudiant C
Publication de la branche et création d'une Pull Request.
Après la revue, la Pull Request est fusionnée dans main.
L'étudiant B récupère ensuite origin/main
et rencontre un conflit avec sa propre modification.
La version collaborative finale est :
![Liste des projets](captures/etudiant-C/git13.png)
### 15. Vérification finale
Mise à jour de main :
![Liste des projets](captures/etudiant-C/git14.png)

Affichage de l'historique graphique :
![Liste des projets](captures/etudiant-C/git15.png)

### 16. Conclusion

Ce travail m'a permis de pratiquer la gestion
collaborative des versions avec Git et GitHub.

J'ai réalisé le développement de la page des projets
avec PHP, la création d'une branche personnelle,
les commits, le push, les Pull Requests,
la revue de code et la participation
à un exercice de résolution des conflits.
### Résultats obtenus

À la fin de ce TP, nous avons réussi à mettre en place un environnement de développement collaboratif avec Git et GitHub.
Les principaux résultats obtenus sont :
Développement d'une mini-application PHP composée de trois pages principales : accueil, liste des étudiants et liste des projets.
Répartition du travail entre les membres du groupe, chacun disposant de sa propre branche.
Gestion des modifications à travers les commits et les commandes push et pull.
Création et validation des Pull Requests avant leur fusion dans la branche principale main.
Participation à la revue de code afin de vérifier les modifications proposées par les autres membres.
Simulation et résolution d'un conflit Git entre deux branches.
Vérification de l'historique des commits et du fonctionnement final de l'application.
Le résultat final est une application fonctionnelle permettant d'afficher les étudiants et les projets, développée dans un environnement collaboratif avec Git et GitHub.