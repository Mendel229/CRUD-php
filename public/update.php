<?
$db = new Client();
ob_start();
?>
<form action="index.php" method="post">
    <label for="nom">Nom:</label>
    <input type="text" name="nom" value="<?= htmlspecialchars($_GET['nom']) ?>">
    <label for="prenoms">Prénoms:</label>
    <input type="text" name="prenoms" value="<?= htmlspecialchars($_GET['prenoms']) ?>">
    <input type="hidden" name="id" value="<?= htmlspecialchars($_GET['id']) ?>">
    <input type="hidden" name="controller" value="update_user">
    <input type="submit" value="Modifier" name="valid">
</form>
<?php
$content = ob_get_clean();
require('./template.php'); ?>