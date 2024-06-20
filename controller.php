<?php
require ('model.php');

/**
 * control de la lecture des données
 */
function readUser(){
    require ('public/user_list.php');
}

/**
 * control de l'ajout des données
 */
function add_user(){
    $db = new Client();
    if (isset($_POST['valid'])) {
        $nom = htmlspecialchars($_POST['nom']);
        $prenoms = htmlspecialchars($_POST['prenoms']);
        if (empty($nom) && empty($prenoms)) {
            echo ('erreur');
        } else{
            $table = "users";
            $fields = "nom, prenoms";
            $value = "?, ?";
            $data = array($nom, $prenoms);
            $db -> addUser($table, $fields, $value, $data);
            header('location:index.php?controller=readUser');
        }
    }
    require('public/add.php');
}

/**
 * control de la suppression des données
 */
function delUser(){
    $db = new Client();
    if (!empty($_GET['id'])) {
        $table = "users";
        $condition = "id = ?";
        $data = array(htmlspecialchars($_GET['id']));
        $db -> delUser($table, $condition, $data);
        header('location:index.php?controller=readUser');
    } else {
        echo ('erreur');
    }
}

/**
 * control de la mise à jour des données
 */
function update_user(){
    $db = new Client();
    if (isset($_POST['valid'])) {
        $nom = htmlspecialchars($_POST['nom']);
        $prenoms = htmlspecialchars($_POST['prenoms']);
        $id = htmlspecialchars($_POST['id']);
        if (empty($nom) && empty($prenoms)) {
            echo ('erreur');
        } else {
            $table = "users";
            $fields = "nom = ?, prenoms = ?";
            $condition = "id = ?";
            $data = array($nom, $prenoms, $id);
            $db -> updateUser($table, $fields, $condition, $data);
            header('location:index.php?controller=readUser');
        }
    }
    require('public/update.php');
}
?>