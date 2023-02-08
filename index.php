<?php
//http://localhost/exo\J14-EXO-MVC\Exercice_PHP_Introduction_mvc-master-v2/index.php

?>

<body>
<ul>
    <li>
        <a href="index.php?controller=utilisateurs&action=UsersList">Lister les utilisateurs</a>
    </li>
    <li>
        <a href="index.php?controller=utilisateurs&action=UserDelete">Supprimer un utilisateur puis les lister</a>
    </li>
    <li>
        <a href="index.php?controller=utilisateurs&action=UserCreate">Ajouter un utilisateur puis les lister</a>
    </li>
</ul>
</body>

<?php


// On récupere le parametre utilisateur appelé controller
if (isset($_REQUEST['controller']) and isset($_REQUEST['action'])){ //cma
    $controller = $_REQUEST['controller'];
    $action = $_REQUEST['action'];

    require "connexionbdd.php";

    switch($controller)
    {
        case"utilisateurs":

            require "model/Utilisateurs.php";
            require "controller/UtilisateursController.php";

            $ctrl = new UtilisateursController();

            switch($action)
            {
                case"UsersList":
                    $ctrl->UsersList();
                break;

                case"UserDelete":
                    // Implémentation à faire ici
                    $ctrl->UserDelete(); //cma : afficher "delete"
                break;

                case"UsersDeleteIndex": //cma
                    $ctrl->UserDeleteIndex($_REQUEST['index']);
                break;

                case"UserCreate":
                    // Implémentation à faire ici
                    include "view/UserCreate.php";

                    break;

                default:
                    //Par défaut , je souhaite lister mes utilisteurs
                    $ctrl->UsersList();
                break;
            }
            break;
    }
}

if(isset($_POST['firstname'])){
    require "connexionbdd.php";
    require "model/Utilisateurs.php";
    require "controller/UtilisateursController.php";
    $ctrl = new UtilisateursController();
    $ctrl->UserCreate();
}
/*
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



*/









