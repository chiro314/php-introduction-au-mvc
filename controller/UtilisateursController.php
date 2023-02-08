<?php


class UtilisateursController {

    private $model;

    /**
     * @set model from model/Utilisateurs.php
     */
    public function __construct()
    {
        $this->model = new Utilisateurs();
    }

    /**
     * @display users using view/UsersList.php
     */
    public function UsersList()
    {
        $UsersList = $this->model->getAll();
        include "view/UsersList.php";
    }

    /**
     *
     */
    public function UserCreate()
    {
        // Votre code ici
        $this->model->create($_POST["firstname"]);
        $UsersList = $this->model->getAll();
        include "view/UsersList.php";
    }

    /**
     *
     */
    public function UserDelete()
    {
        // Votre code ici
        $UsersList = $this->model->getAll();
        include "view/UsersListDelete.php";
    }

    public function UserDeleteIndex($index) //cma
    {
        $UsersList = $this->model->delete($index);
        
        $this->UsersList();
    }




} 