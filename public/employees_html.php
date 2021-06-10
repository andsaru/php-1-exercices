<!DOCTYPE html>
<html lang="en">
<?php require 'partial/head.php'; ?>

<body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/partial/header.php'; ?>

    <?php if(isset($_GET['message'])) :?>
        <p><?= $_GET['message']; ?></p>
    <?php endif; ?>

    <hr/>                 
    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Localidad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php //se recorre y pinta la lista preparada en employeees.php?>
            <?php foreach($people as $person): ?>
                <tr>
                    <td><a href="/employees.php?id=<?= $person['id'] ?>"><?= $person['id'] ?></a></td>
                    <td><?= $person['name'] ?></td>
                    <!-- // concateno al fichero employees.php, un valor que es id y ese valor va a ser el identificador
                    // de ese valor que estoy recorriendo en ese momento que es $person['id'],
                    // así creo un enlace único para cada uno de los usuarios -->
                    <td><a href="/employees.php?email=<?= $person['email'] ?>"><?= $person['email'] ?></a></td>
                    <td><?= $person['city'] ?></td>
                     <!-- Tiene que ser en comillas simples ' json_encode($person); ' no es un atributo-->
                     <td><button class="employees-delete-button" value="Eliminar" data-person='<?= json_encode($person); ?>'>Eliminar</button></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <hr/>
    
    <?php
    // Esta query es para el formulario, para poder cambiar la base de datos
    if (isset($_GET['id'])) {
        $query = 'SELECT * FROM employees WHERE id= :identificador';
        $stm = $dbConnexion->prepare($query);
        $stm->bindParam(':identificador', $_GET['id']);
        $stm->execute();
        $currentPerson = $stm->fetch(PDO::FETCH_ASSOC);
    }elseif (isset($_GET['email'])) {
        $query = 'SELECT * FROM employees WHERE email= :correo';
        $stm = $dbConnexion->prepare($query);
        $stm->bindParam(':correo', $_GET['email']);
        $stm->execute();
        $currentPerson = $stm->fetch(PDO::FETCH_ASSOC);
    }
    ?>

    <!-- multipart form data para cuando añadimos un fichero -->
    <form method="POST" action="/employees_add.php" enctype= "multipart/form-data"> 
        <?php if(isset($currentPerson)): ?>
            <input type="hidden" id="id" name="id" value="<?= $currentPerson['id']; ?>"/>
        <?php endif; ?>
        <label for="name">Nombre</label>
        <input type="text" id="name" name="name" value="<?= $currentPerson['name'] ?>" required/>
    <br/>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="<?= $currentPerson['email'] ?>" required/>
    <br/>
        <label for="age">Edad</label>
        <input type="number" id="age" name="age" value="<?= $currentPerson['age'] ?>" required/>
    <br/>
        <label for="city">Ciudad</label>
        <input type="text" id="city" name="city" value="<?= $currentPerson['city'] ?>"/>
    <br/>
        <label for="archivo">Archivo</label>
        <input type="file" id="archivo" name="archivo" />
    <hr/>
        <input type="submit" value="Enviar"/>
    </form>

    <?php require 'partial/footer.php'; ?>
</body>

</html>