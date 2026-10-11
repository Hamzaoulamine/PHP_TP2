# PHP_TP2
# TP 02 - Programmation Web 2 (2026/2027)

**Nom :** OULAMINE  
**Prénom :** Hamza  
**Groupe :** G4  
**Titre :** TP 02 - PHP, Variables, Formulaires et Git  

## Description
Ce dépôt contient les solutions des 10 exercices de programmation PHP du TP 02.

## Réponses aux questions théoriques

### Exercice 2 : Différence entre `$note` et `$Note` et noms de variables valides
- **Différence :** PHP est sensible à la casse (case-sensitive) pour les noms de variables. `$note` et `$Note` sont deux variables distinctes en mémoire.
- **Noms de variables valides :**
  - Valides : `$a`, `$_a`, `$a_a`, `$AAA`, `$a1`
  - Invalides : `$a!` (caractère spécial interdit), `$1a` (ne peut pas commencer par un chiffre).

### Exercice 4 : Différence d'affichage pour `false` entre `echo` et `var_dump()`
- **Avec `echo` :** La valeur booléenne `false` est convertie en chaîne vide `""`, donc rien ne s'affiche à l'écran.
- **Avec `var_dump()` :** Affiche le type exact et la valeur brute : `bool(false)`.

### Exercice 5 : Résultats des tests de moyennes
- `-1` : Note invalide
- `9` : Non validé
- `10` : Passable
- `12` : Assez bien
- `14` : Bien
- `16` : Très bien
- `21` : Note invalide

### Exercice 10 : Différence entre GET et POST dans l'URL
- **Méthode GET (`ex10_get.php`) :** Les données saisies sont envoyées sous forme de paramètres visibles dans l'URL (ex: `ex10_get.php?nom=Oulamine&prenom=Hamza&groupe=G4`).
- **Méthode POST (`ex10_post.php`) :** Les données sont envoyées dans le corps de la requête HTTP, l'URL reste propre et ne montre aucune donnée.

## Structure du projet
- `index.php` : Page d'accueil avec les liens vers tous les exercices.
- `ex01.php` à `ex09.php` : Exercices de 1 à 9.
- `ex10_get.html` / `ex10_get.php` : Formulaire GET et son traitement.
- `ex10_post.html` / `ex10_post.php` : Formulaire POST et son traitement.
