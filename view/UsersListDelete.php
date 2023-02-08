<?php

?>

<h1>Liste des Utilisateurs pouvant être supprimés</h1>
<ul>
<?php for($i=0;$i<count($UsersList);$i++){ ?>
    <li>
    <a href="index.php?controller=utilisateurs&action=UsersDeleteIndex&index=<?php echo $i ?>">Delete </a><?php echo $UsersList[$i][0]." - ".$UsersList[$i][1]; ?>
    </li>
<?php } ?>
</ul>