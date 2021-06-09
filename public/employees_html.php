<!DOCTYPE html>
<html lang="en">
<?php require 'partial/head.php'; ?>

<body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/partial/header.php'; ?>
    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Localidad</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($people as $person): ?>
                <tr>
                    <td><a href="/employees.php?id=<?= $person['id'] ?>"><?= $person['id'] ?></a></td>
                    <td><?= $person['name'] ?></td>
                    <!-- // concateno al fichero employees.php, un valor que es id y ese valor va a ser el identificador
                    // de ese valor que estoy recorriendo en ese momento que es $person['id'],
                    // así creo un enlace único para cada uno de los usuarios -->
                    <td><a href="/employees.php?email=<?= $person['email'] ?>"><?= $person['email'] ?></a></td>
                    <td><?= $person['city'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php require 'partial/footer.php'; ?>
</body>

</html>