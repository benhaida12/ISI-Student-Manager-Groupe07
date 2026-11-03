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
  
  ![ISI-Student-Manager-Groupe07](captures/etudiant-A/afich_parm.png)
  
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

 ![ISI-Student-Manager-Groupe07](captures/etudiant-A/affichage_a.png)
 
  #### 4.9.Affichage de l’historique graphique des commits et des branches
  ![ISI-Student-Manager-Groupe07](captures/etudiant-A/h1.png)
  ![ISI-Student-Manager-Groupe07](captures/etudiant-A/h2.png)
  ![ISI-Student-Manager-Groupe07](captures/etudiant-A/h3.png)
  ![ISI-Student-Manager-Groupe07](captures/etudiant-A/h4.png)
  ![ISI-Student-Manager-Groupe07](captures/etudiant-A/h6.png)
  ![ISI-Student-Manager-Groupe07](captures/etudiant-A/h7.png)

## 5. Travail réalisé par l'étudiant B — Jamil Ilham
**Responsabilité :** Développement de la page des étudiants.

**Fichier principal :** `etudiants.php`

**Branche personnelle :** `feature/etudiants`

### 5.1. Configuration de Git
**Membre :** Jamil Ilham
Vérification de l'installation etConfiguration du nom et l'adresse e-mail :

![configGit](captures/etudiant-B/configName.png)
### 5.2. Configuration SSH
préparation d’authentification SSH en générant une paire de clés Ed25519, puis en ajoutant la clé publique au compte GitHub
![configSSH](captures/etudiant-B/ssh.png)
### 5.3. Clonage du dépôt commun
![clonnage depot commun](captures/etudiant-B/clonnage.png)
### 5.4. Vérification du statut de main

![status main](captures/etudiant-B/main4.png)


origin désigne le dépôt distant ;
 main est la branche principale ; 
 origin/main représente la branche distante suivie localement ;
  HEAD indique la position courante dans Git.

### 5.5. Création de branche etudiants

![branche etudiants](captures/etudiant-B/branchEtu5.png)

Cette branche permet de développer les fonctionnalités sans modifier directement main.
### 5.6. Développement de etudiants.php
le fichier etudiants.php contient un tableau PHP de trois étudiants et une boucle qui affiche leurs 
informations dans un tableau HTML : nom, prénom et filière.

![etudiants.php](captures/etudiant-B/etuPhp6.png)

###  5.7. Ajout et commit
![commit](captures/etudiant-B/commitEtu8.png)
### 5.8. Push de etudiant.php vers GitHub
Publication de la branche :
![push etudiants](captures/etudiant-B/push.png)
### 5.9. Pull Request et revue de code
Création d'une Pull Request sur GitHub :
- Branche source : feature/etudiants
- Branche destination : main
- Titre : Ajout de la liste des etudiants
La Pull Request est examinée Wiam EL Berkaoui avant sa fusion dans main.
![pull request](captures/etudiant-B/pullRest88.png)
Revue de code
-J ai participé à la revue de code de la Pull Request de chef de projet.
![Revue de code](captures/etudiant-B/revueCode.png)
### 5.10. gestion de conflit
deux branches ont modifié la même ligne du fichier configuration.txt :
j'ai proposé « Version : 2.0 - Etudiant B » et wiam EL Berkaoui « Version : 3.0 - Etudiant C »

![conflit](captures/etudiant-B/conflit9.png)

le conflit apparaît lorsque Git ne peut pas fusionner automatiquement deux modifications concurrentes 
de la même partie d’un fichier. Il faut choisir une version cohérente, puis valider la résolution.
Le conflit a été résolu en conservant une version commune :Version : 3.0 - Version collaborative

![resoulution conflit](captures/etudiant-B/commitResolution2.png)

### 5.11. historique graphique et affichae final
J’ai vérifié l’historique des commits et des branches, puis l’affichage final de la page des étudiants.
![graphique](captures/etudiant-B/historiqueFinale.png)

![afichage finale](captures/etudiant-B/afficageFinal.png)


### 6 Responsabilité de l'étudiant C(EL Berkaoui Wiam)
**Responsabilité :** Développement de la page des projets.

**Fichier principal :** `projets.php`

**Branche personnelle :** `feature/projets`
### 6.1. Configuration de Git

Vérification de l'installation :
![Liste des projets](captures/etudiant-C/git1.png)

Configuration et Vérification  du nom et l'adresse e-mail :
![Liste des projets](captures/etudiant-C/git2.png)

### 6.2. Configuration SSH
*Génération d'une clé SSH Ed25519 

*Affichage de la clé publique 

*La clé publique est ajoutée au compte GitHub.

-->Test de connexion :

![Liste des projets](captures/etudiant-C/git3.png)
### 6.3. Clonage du dépôt commun

*Clonage du dépôt GitHub 

*Accès au dossier 

*Vérification du dépôt distant 

*Vérification des branches 

*Vérification de l'état 

![Liste des projets](captures/etudiant-C/git4.png)

### 6.4. Mise à jour de main

Récupération du commit initial de l'étudiant A :

![Liste des projets](captures/etudiant-C/git5.png)

### 6.5. Création de la branche personnelle

Création et Vérification de la branche active :

![Liste des projets](captures/etudiant-C/git6.png)

### 6.6. Développement de projets.php

Création du fichier projets.php.

Le fichier permet d'afficher une liste de projets avec du code PHP simple et HTML.

le contenu :

![Liste des projets](captures/etudiant-C/git7.png)

### 6.7. Test de la page PHP

Accès à la page :
http://localhost:8000/projets.php

![Liste des projets](captures/etudiant-C/git8.png)

### 6.8. Ajout et commit

Ajout du fichier

Création du commit 

Vérification de l'historique :

![Liste des projets](captures/etudiant-C/git9.png)

### 6.9. Push vers GitHub

Publication de la branche :

![Liste des projets](captures/etudiant-C/git10.png)

### 6.10. Pull Request
Création d'une Pull Request sur GitHub :
- Branche source : feature/projets
- Branche destination : main
- Titre : Ajout de la liste des projets
La Pull Request est examinée par un autre membre avant sa fusion dans main.

![Liste des projets](captures/etudiant-C/git11.png)

### 6.11. Revue de code
J ai participé à la revue de code de la Pull Request de l'étudiant B. 
Un commentaire technique pertinent est ajouté pour vérifier la qualité et la lisibilité du code.

![Liste des projets](captures/etudiant-C/git12.png)

### 6.12. Exercice de résolution des conflits
Création du fichier configuration.txt par l'étudiant A avec la version initiale :
-->Version : 1.0
L'étudiant C crée une branche à partir de main et modifie la version :
-->Version : 3.0 - Etudiant C
Publication de la branche et création d'une Pull Request.
Après la revue, la Pull Request est fusionnée dans main.
L'étudiant B récupère ensuite origin/main et rencontre un conflit avec sa propre modification.
La version collaborative finale est :

![Liste des projets](captures/etudiant-C/git13.png)

### 6.13. Vérification finale
Mise à jour de main :

![Liste des projets](captures/etudiant-C/git14.png)

Affichage de l'historique graphique :

![Liste des projets](captures/etudiant-C/git15.png)

## 7. Travail réalisé par l'étudiant D — Bouitane Sara
**Responsabilité :** Mise en forme CSS et navigation

**Fichier principal :** `style.php`

**Branche personnelle :** `feature/style`


### 7.1. Configuration de Git
**Membre :** Bouitane Sara
Vérification de l'installation etConfiguration du nom et l'adresse e-mail :

![configGit](captures/etudiant-D/configName.png)
### 7.2. Configuration SSH
préparation d’authentification SSH en générant une paire de clés Ed25519, puis en ajoutant la clé publique au compte GitHub

![configSSH](captures/etudiant-D/ssh.png)
### 7.3. Clonage du dépôt commun
![clonnage depot commun](captures/etudiant-D/clonnage.png)
### 7.4. Vérification du statut de main

![status main](captures/etudiant-D/main.png)


origin désigne le dépôt distant ;
 main est la branche principale ; 
 origin/main représente la branche distante suivie localement ;
  HEAD indique la position courante dans Git.

### 7.5. Création de branche style

![branche style](captures/etudiant-D/branche.png)

Cette branche permet de ajouter les styles pour tous les pages .php.
### 7.6. Réalisation de style.css
le fichier style.css contient le style CSS de trois fichiers.
![style.css](captures/etudiant-D/CreeSt.png)
![style.css](captures/etudiant-D/style.png)

###  7.7. Ajout et commit Push de style.css vers GitHub
![commit](captures/etudiant-D/add.png)
![push etudiants](captures/etudiant-D/MR.png)
![push](captures/etudiant-D/PU.png)
### 7.8. Pull Request et revue de code
Création d'une Pull Request sur GitHub :
- Branche source : feature/style
- Branche destination : main
La Pull Request est examinée etudiant A avant sa fusion dans main.

![pull request](captures/etudiant-D/pull.png)
![pull request](captures/etudiant-D/PU.png)

Revue de code
-J ai participé à la revue de code de la Pull Request de etudiant c.
![Revue de code](captures/etudiant-D/CMM.png)
### 7.9. gestion de conflit
deux branches ont modifié la même ligne du fichier configuration.txt :
j'ai proposé « Version : 4.0 - Etudiant D » 
![conflit](captures/etudiant-D/C1.png)
![conflitA](captures/etudiant-D/C2.png)
![conflitB](captures/etudiant-D/C3.png)

le conflit apparaît lorsque Git ne peut pas fusionner automatiquement.
de la même partie d’un fichier. Il faut choisir une version cohérente, puis valider la résolution.
Le conflit a été résolu en conservant une version commune :Version : 3.0 - Version collaborative

![resoulution conflit](captures/etudiant-D/CR.png)

### 7.10. historique graphique 
J'ai vérifié l’historique des commits et des branches.
  ![ISI-Student-Manager-Groupe07](captures/etudiant-D/G1.png)
  ![ISI-Student-Manager-Groupe07](captures/etudiant-D/G2.png)
  ![ISI-Student-Manager-Groupe07](captures/etudiant-D/G3.png)
  ![ISI-Student-Manager-Groupe07](captures/etudiant-D/G4.png)
  ![ISI-Student-Manager-Groupe07](captures/etudiant-D/G5.png)



