Consignes :

- Compléter le code existant pour implémenter la supression d'un utilisateur
- Compléter le code existant pour implémenter l'ajot d'un utilisateur ( le nom n'a pas d'importance )
- Bonus : Ecrire une méthode permettant de générer aléatoirement un nom utilisateur et l'utiliser dans la méthode create

- Créer la base de donnée correspond à Users, créer une classe permettant de se connecter à la base de donnée et l'utiliser
dans le Model Utilisateur afin d'utiliser la table dans la base de donnée au lieu d'un tableau.

- En reprenant la structure MVC, créer un controlleur, un modéle et une vue qui permettra d'afficher d'autres données (
je vous laisse libre des données à afficher, les données n'ont pas besoin d'être liées aux utilisateurs )




Théorie :

- Ceci est une petite introducton au MVC en PHP.

- MVC veux dire Model/Vue/Controller

- Le Modele est utilisé pour effectuer les actions ( généralement la selection/insertion/mises à jour des données en
 base de donnée )

- La Vue est utilisée pour générer le html en utilisant les données récoltées depuis le modéle.

- Le Controlleur fait le lien entre le modéle et la vue en executant les méthodes du modéle puis en les rendant disponible
   pour la vue.

- Il existe de nombreuses façons d'implémenter un mvc en PHP, dans cet exemple, j'ai mis en place une solution trés basique,
la page index.php utilise un simple switch pour executer les controlleurs et les méthodes,
vous verrez dans d'autres exercices comment implémenter une solution plus élaborée.

- Dans ce projet, vous trouverez quatres fichiers :

 . un fichier index.php ( qui sera chargé de récuperer les parametres de l'url )
 . un fichier model ( dans le dossier model ) qui va générer des données sans bases de données ( vous verrez par la suite
  plus en détail comment utiliser une base de donnée dans le model )
 . un fichier vue ( dans le dossier vue ) trés simple qui va générer une liste html en utilisant les données du modele
 . un controlleur ( dans le dossier controller ) qui va faire le lien.



