<?php
/**
 * Created by PhpStorm.
 * User: sstienface
 * Date: 31/01/2019
 * Time: 15:28
 */

class Utilisateurs {

    private $userLists;

    /**
     *
     */
    public function __construct()
    {
        $this->userLists = array("Brian","Sebastien","Michel", "Robert", "Bertrand");
    }

    /**
     * @return array
     */
    public function getAll()
    {
        return $this->userLists;
    }

    // Vous pouvez spécifier des valeurs par défaut aux parametres de méthodes, si $index n'est pas défini, il vaudra 0.
    public function getOne($index = 0)
    {
        return $this->userLists[$index];
    }

    public function create()
    {
        // Votre code ici
    }

    /**
     * @param $index
     */
    public function delete($index)
    {
        if($this->checkLength($index))
        {
            unset($this->userLists[$index]);
            return true;
        }
        else
        {
            return false;
        }
    }

    /**
     * @param $index
     * @return bool
     */
    private function checkLength($index)
    {
        if($index < count($this->userLists) )
        {
            return true;
        }
        else
        {
            return false;
        }
    }



} 