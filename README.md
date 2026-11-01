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
| Étudiant B | Liste des étudiants | etudiants.php |
| Étudiant C | Liste des projets | projets.php |
| Étudiant D | CSS et navigation | style.css |

## 3. Environnement de développement
- PHP
- Git
- GitHub
- Visual Studio Code
- SSH

### 2. Responsabilité de l'étudiant C

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
L'étudiant C participe à la revue de code
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