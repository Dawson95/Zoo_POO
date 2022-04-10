<?php 
ob_start(); 
?>

<table class="table text-center">
    <tr class="table-dark">
        <th>Image</th>
        <th>Name</th>
        <th>Age</th>
        <th>Species</th>
        <th>Gender</th>
        <th colspan="2">Actions</th>
    </tr>
    <?php 
    for($i=0; $i < count($animals);$i++) : 
    ?>
    <tr>
        <td class="align-middle"><img src="public/images/<?= $animals[$i]->getImage(); ?>" width="60px;"></td>
        <td class="align-middle"><a href="<?= URL ?>livres/l/<?= $animals[$i]->getId(); ?>"><?= $livres[$i]->getTitre(); ?></a></td>
        <td class="align-middle"><?= $animals[$i]->getNbPages(); ?></td>
        <td class="align-middle"><a href="<?= URL ?>livres/m/<?= $animals[$i]->getId(); ?>" class="btn btn-warning">Modifier</a></td>
        <td class="align-middle">
            <form method="POST" action="<?= URL ?>livres/s/<?= $animals[$i]->getId(); ?>" onSubmit="return confirm('Voulez-vous vraiment supprimer le livre ?');">
                <button class="btn btn-danger" type="submit">Supprimer</button>
            </form>
        </td>
    </tr>
    <?php endfor; ?>
</table>
<a href="<?= URL ?>livres/a" class="btn btn-success d-block">Ajouter</a>

<?php
$content = ob_get_clean();
$titre = "List of all Animals";
require "template.php";
?>