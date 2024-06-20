<?php
class Client {
    /**
     * Fonction principale de la classe pour la connexion à la base de données
     */
    private function server($host, $name, $user, $pass) {
        try {
            $db = new \PDO('mysql:host=' . $host . ';dbname=' . $name . ';charset=utf8;port=3307', '' . $user . '', '' . $pass . '');
            return $db;
        } catch (\Exception $e) {
            die("<p>Serveur</p>");
        }
    }

    //CRUD

    /**
     * Insersion d'informations (C => CREATE)
     */
    public function addUser($table, $fields, $valeur, $data) {
        $db = $this->server("localhost", "utilisateurs", "root", "");
        $sql =  $db -> prepare('INSERT INTO '. $table .'('. $fields .') VALUE (' . $valeur .')');
        return $sql -> execute($data);
    }

    /**
     * Lecture d'informations (R => READ)
     */
    public function readUser($table, $fields) {
        $db = $this->server("localhost", "utilisateurs", "root", "");
        $sql = $db -> query('SELECT '. $fields .'FROM '. $table .'');
        return $sql;
    }

    /**
     * Mise à jour d'informations (U => INSERT)
     */
    public function updateUser($table, $field, $condition, $data){
        $db = $this->server("localhost", "utilisateurs", "root", "");
        $req = $db->prepare('UPDATE ' . $table . ' SET ' . $field . ' WHERE ' . $condition . '');
        $req -> execute($data);
    }

    /**
     * Suppression de données (D => DELETE)
     */
    public function delUser($table, $condition, $data){
        $db = $this->server("localhost", "utilisateurs", "root", "");
        $req = $db->prepare('DELETE FROM ' . $table . ' WHERE ' . $condition . '');
        $req -> execute($data);
    }
}
?>