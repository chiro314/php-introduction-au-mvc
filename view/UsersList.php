<?php

?>

<h1>Liste des Utilisateurs</h1>
<ul>
<?php foreach($UsersList as $user){ ?>
    <li>
        <?php echo $user[0]." - ".$user[1]; ?>
    </li>
<?php } ?>
</ul>