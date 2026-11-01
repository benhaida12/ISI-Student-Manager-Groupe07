# ISI Student Manager

## 1. Présentation du projet
Ce travail est réalisé dans le cadre du TP_3 :
Gestion collaborative des versions avec Git et GitHub.

L'objectif est de participer au développement collaboratif
d'une mini-application PHP en utilisant Git et GitHub.

## 2. Membres du groupe et responsabilités

| Membre | Responsabilité | Fichier |
|---|---|---|
| Étudiant | Responsabilité | Fichier |
| Étudiant A : BEN HAIDA Khadija | Chef de projet et accueil | index.php |
| Étudiant B : Jamil Ilham | Liste des étudiants | etudiants.php |
| Étudiant C : EL Berkaoui Wiam | Liste des projets | projets.php |
| Étudiant D : BOUITANE Sara | CSS et navigation | style.css |

## 3. Environnement de développement
- PHP
- Git
- GitHub
- Visual Studio Code
- SSH
## 4. Description du travail effectué :
### 4.1. Responsabilité de l'étudiant A(BEN HAIDA Khadija)
  #### 4.2.Création d’un dépôt public nommé ISI-Student-Manager-Groupe07 et invitation des autres membres du groupe
  ![ISI-Student-Manager-Groupe07](captures/etudiant-A/affich_param.png)
Rôle de user.name et user.email :
user.name : nom de l’auteur enregistré dans chaque commit, pour savoir qui a fait la modification.
user.email : adresse e-mail de l’auteur enregistrée dans chaque commit, pour l’identifier précisément et relier le commit à son compte GitHub.
  ![ISI-Student-Manager-Groupe07](captures/etudiant-A/create_repo1.png)
  ![ISI-Student-Manager-Groupe07](captures/etudiant-A/invite_groupe.png)

  #### 4.3.Configuration de l’authentification SSH avec une clé Ed25519 pour GitHub
   ![ISI-Student-Manager-Groupe07](captures/etudiant-A/config_ssh_1.png)
   ![ISI-Student-Manager-Groupe07](captures/etudiant-A/config_ssh_2.png)
   ![ISI-Student-Manager-Groupe07](captures/etudiant-A/config_ssh_3.png)
   ![ISI-Student-Manager-Groupe07](captures/etudiant-A/config_ssh_4.png)
  #### 4.4.Clonage du dépôt GitHub et le vérification de la configuration du dépôt cloné
  ![ISI-Student-Manager-Groupe07](captures/etudiant-A/clonage.png)
  ![ISI-Student-Manager-Groupe07](captures/etudiant-A/clonage2.png)
  ##### 4.4.1.Définition des notions clone, origin, main, origin/main et HEAD
clone : commande qui copie un dépôt distant sur ta machine, avec tous les fichiers et l’historique.
origin : nom par défaut du dépôt distant d’où le dépôt a été cloné.
main : nom de la branche principale du projet.
origin/main : copie locale, en lecture seule, de la branche main du dépôt distant, telle qu’elle était à la dernière synchronisation.
HEAD : pointeur qui indique la branche et le commit sur lesquels on se trouve actuellement.
  #### 4.5.Commit Initial
  ![ISI-Student-Manager-Groupe07](captures/etudiant-A/creation_indexphp.png)
  ![ISI-Student-Manager-Groupe07](captures/etudiant-A/commit_initial.png)
  #### 4.6.Création de la branche  feature/accueil
 ![ISI-Student-Manager-Groupe07](captures/etudiant-A/barancheEa.png)
 #### 4.7.Pull Requests et revue de code
 ![ISI-Student-Manager-Groupe07](captures/etudiant-A/pull1.png)
 ![ISI-Student-Manager-Groupe07](captures/etudiant-A/pull2.png)
  La Pull Request est commentée par l’étudiante B, puis fusionnée par lui :
 ![ISI-Student-Manager-Groupe07](captures/etudiant-A/mergeB.png)
Revue de la Pull Request de l’étudiante D, avec résolution du conflit et fusion :
![ISI-Student-Manager-Groupe07](captures/etudiant-A/conflit1.png)
![ISI-Student-Manager-Groupe07](captures/etudiant-A/conflit2.png)
 #### 4.8.Création du fichier configuration.txt
 ![ISI-Student-Manager-Groupe07](captures/etudiant-A/creation_fichier_config.png)
 ![ISI-Student-Manager-Groupe07](captures/etudiant-A/resolution_conflit.png)
 Mise à jour depuis le main :
 ![ISI-Student-Manager-Groupe07](captures/etudiant-A/miseajourmain.png)
  #### 4.9.Affichage de l’historique graphique des commits et des branches
  ![ISI-Student-Manager-Groupe07](captures/etudiant-A/h1.png)
  ![ISI-Student-Manager-Groupe07](captures/etudiant-A/h2.png)
  ![ISI-Student-Manager-Groupe07](captures/etudiant-A/h3.png)
  ![ISI-Student-Manager-Groupe07](captures/etudiant-A/h4.png)
  ![ISI-Student-Manager-Groupe07](captures/etudiant-A/h5.png)
  ![ISI-Student-Manager-Groupe07](captures/etudiant-A/h6.png)
  ![ISI-Student-Manager-Groupe07](captures/etudiant-A/h7.png)
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
![status main](captures/etudiant-B/main4.png)
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
