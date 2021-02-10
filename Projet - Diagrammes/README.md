### Projet php WIM21 2020 : Des  quizz ...

#### Le thème 
L'application web permet à des professeurs inscrits sur le site de créer des quizz (questionnaires à choix 
multiples).

#### Principes généraux, fonctionnalités
- Un quizz comportera un nombre de questions quelconques.
- Chaque question peut avoir jusqu'à 4 réponses (plusieurs  réponses exactes possibles).
- On peut, si besoin, ajouter une image à la question.
- Le quizz peut être en préparation, actif ou expiré.

Quand on active le quizz, l'application généré une clef, que le professeur
peut partager avec ses élèves.

Chaque élève connaissant la clef d'un quizz (actif) peut y répondre, dans 
le temps imparti prévu. Il renseigne son nom et prénom (on fait confiance).


Lorsque l'élève valide ses réponses, il obtient une clef personnelle qui lui permettra d'avoir accès 
à la correction et à son score (pourcentage de bonnes réponses)  une fois le quizz expiré.

De son coté, le professeur peut accèder aux statistiques de ses propres quizz.

## Les attendus

-   Une application fonctionnelle. Toutefois, n'hésitez pas à procéder
    par étape. Il vaut mieux rendre quelque chose d'incomplet qui
    fonctionne que quelque chose de complet qui ne fonctionne pas.
-   L'application devra être codée en utilisant le framework php MVC **version 3**
    [CodeIgniter](https://www.codeigniter.com/).
-   La base de données devra utiliser au moins un trigger.
-   Un rapport (WIKI associé à votre dépot git sur dwarves) précisant
    -   l'url de l'application.
    -   le temps de travail pour la réalisation du projet.
    -   la répartition des tâches dans le groupe.
    -   une section précisant les particularités de votre application.
    -   une section mettant en relation ce que vous avez développé et
        les notions vues dans certains cours, sous la forme d'un
        tableau à 2 entrées.

#### Echéances et Evaluation

Ce projet (**à realiser en binôme**) doit être conduit en 2 étapes :

1.  La phase d'analyse et conception :
    -   Analyse des données : diagramme de cas d'utilisations,
        diagrammes de classes, synopsis et diagrammes de séquences.
    -   Dérivation des diagrammes de classes en schémas de bases de
        données.

2.  La phase de développement :
    -   Création de la base de données,
    -   Insertion de données "tests" dans la base,
    -   Implémentation des différents traitements et règles de gestion
        associées.
    -   Tests
