<?php
//require "connexionbdd.php";

class Utilisateurs {

    private $userLists;

    /**
     *
     */
    public function __construct()
    {
        //$this->userLists = array("Brian","Sebastien","Michel", "Robert", "Bertrand");
        
        global $conn;
        $sql = "SELECT id, firstname FROM user";
        $result = $conn->query($sql);
        $i=0;
        while($row = $result-> fetch_assoc()){
            $this->userLists[$i][0] = $row['id'];
            $this->userLists[$i][1] = $row['firstname'];
            $i++;
        }
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

    public function create($firstname)
    {
        // Votre code ici
        //maj de la base :
        global $conn;
        $stmt = $conn->prepare("INSERT INTO user (firstname) VALUES (?)");
        $stmt -> bind_param("s", $firstname); 
        $stmt ->execute();
        $stmt -> close();
        //récupérer l'id auto :
        $sql = "SELECT id FROM user WHERE firstname = '$firstname'";  
        $result = $conn->query($sql);
        $tabId = [];
        $i = 0;
        while($row = $result-> fetch_assoc()) {
            $tabId[$i] = $row['id'];
            $i++;
        }
        $id = max($tabId);
        //maj de l'objet :       
        array_push($this->userLists , [$id, $firstname]);
    }

    /**
     * @param $index
     */
    public function delete($index)
    {
        if($this->checkLength($index))
        {   //maj base :
            global $conn;
            $sql = "DELETE from user WHERE id = ".strval($this->userLists[$index][0]);
            $conn->query($sql);
            //maj objet (sans relancer __construct : est-ce possible ?)
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