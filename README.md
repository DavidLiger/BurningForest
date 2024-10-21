# Simulation de Feu de Forêt

Ce projet simule la propagation d'un feu de forêt sur une grille de taille configurable. Chaque cellule de la grille peut être en feu, en cendre ou vide. 
La simulation s'exécute étape par étape, avec une propagation automatique du feu aux cellules adjacentes.

## Fichiers Principaux
- `burningForest.html` : Fichier HTML principal avec le JavaScript pour la simulation.
- `config.php` : Fichier PHP qui stocke la configuration de la grille et des feux initiaux.
- `README.md` : Documentation du projet.

## Comment lancer la simulation

1. Placez votre projet dans un dossier
2. Ouvrez un terminal (ou cmd sous Windows) et accédez à ce dossier :
    cd C:/Users/DavidArsene/Documents/DAVID/Emploi/Test_CIRIL_Group
3. Lancez le serveur PHP intégré :
    php -S localhost:8000
4. Accédez à votre application depuis un navigateur en allant à l'adresse suivante :
    http://localhost:8000/burningForest.html
5. Cliquez sur le bouton "Lancer la simulation" pour commencer la simulation.
6. Regardez le feu se propager à travers la grille.

## Fonctionnalités
- Grille dynamique configurable via `config.php`.
- Simulation étape par étape de la propagation du feu.
