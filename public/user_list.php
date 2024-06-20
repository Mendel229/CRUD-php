<?php
ob_start();
$db = new Client();
?>
<p><a href="index.php?controller=add_user">Insérer des données</a></p>
<table border="1">
    <caption>Liste des Utilisateurs</caption>
    <tr>
        <td colspan="2">Action</td>
        <td>Nom</td>
        <td>Prénoms</td>
    </tr>
    <?php
    $table = "users";
    $fields = "*";
    $req = $db->readUser($table, $fields);
    if ($req->rowCount() >= 1) {
        while ($dt = $req->fetch()) {
            $ligne .= '<tr>
            <td><a href="index.php?controller=delUser&id='.$dt['id']. '">&cross;</a></td>
            <td><a href="index.php?controller=update_user&id=' . $dt['id'] . '&nom=' . $dt['nom'] . '&prenoms=' . $dt['prenoms'] . '">modifier</a></td>
            <td>' . $dt['nom'] . '</td><td>' . $dt['prenoms'] . '</td>
            </tr>';
        }
    } else {
        $ligne .= '<tr>
        <td>Aucun enregistrement</td>
        </tr>';
    }
    echo $ligne;
    ?>
</table>
<?php
$content = ob_get_clean();
require('./template.php');
?>