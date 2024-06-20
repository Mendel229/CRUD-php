<?
$db = new Client();
ob_start();
?>
<form action="index.php" method="post">
    <label for="nom">Nom:</label>
    <input type="text" name="nom" id="">
    <label for="prenoms">Prénoms:</label>
    <input type="text" name="prenoms" id="">
    <input type="hidden" name="controller" value="add_user">
    <input type="submit" value="Enregistrer" name="valid">
</form>
<?php
$content = ob_get_clean();
require('./template.php');?>
