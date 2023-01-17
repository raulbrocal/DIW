<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respuestas</title>
</head>
<body>
    <div class="contenedor">
        Nombre: <?php echo $_POST['user_name']?>
        Id: <?php echo $_POST['user_id']?>
        Genero: <?php echo $_POST['user_genre']?>
        Edad: <?php echo $_POST['user_age']?>
        Observaciones: <div class="obs"><?php echo $_POST['user_obs']?></div>
        Localidad: <?php echo $_POST['user_loc']?>
        Calidad del desayuno: <?php echo $_POST['preg1']?>
        Calidad de la comida: <?php echo $_POST['preg2']?>
        Calidad de la cena: <?php echo $_POST['preg3']?>
    </div>
</body>
</html>