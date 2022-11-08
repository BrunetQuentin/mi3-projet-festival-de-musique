# LP-MI3-PHP - Projet 2 - Festival de Musique

L'objectif de ce (mini-)projet est de reprendre le code et les données fournies pour coder un site dynamique en PHP affichant la programmation du Vercors Musique Festival 2022 et permettant de laisse un message sur le livre d'or.

Vous aurez besoin d'héberger vous-même une base, de préférence **PostgreSQL**, contenant les données fournies et je vous invite à le faire sur [AlwaysData.com](https://www.alwaysdata.com/fr/) *(Une BDD hébergée permet aux personnes d'un groupe de partager une même BDD)*.

Le résultat attendu est visible à l'adresse : [Vercors Music Festival 2022 (Résultat Attendu)](https://carl-vincent.fr/LP-MI3-PHP/Festival-de-Musique-RESULTAT-ATTENDU/index.php)

## Objectifs généraux :
- Coder les différentes pages PHP pour qu'elles fonctionnent comme attendu :
  - Page Accueil (`index.php`) qui contient le Livre d'or
  - Script `ajout-message-livre-or.php` qui doit s'occuper d'enregistrer un nouveau message dans le Livre d'or et ensuite rediriger sur la page d'accueil
  - Page Liste des artistes (`liste-artistes.php`)
  - Page Programmation par jour (`prog-par-jour.php`)
  - *Réservé aux LP-AW / BONUS pour les LP-SIGD : Page Fiche artiste (`fiche-artiste.php`) qui doit être accessible quand on clique sur un artiste de la page **Liste des artistes** ou **Programmation par jour**, et qui doit afficher les détails de l'artiste sélectionné (ou alors renvoyer sur la page `404.html` si jamais l'ID passé au script n'est pas correct)*
- Produire du **code de qualité** en respectant les mêmes règles que le précédent projet
- Protéger votre code de possibles **injections SQL** et **injections XSS**