<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>asadsd

    </h1> <img src="<?=base_url();?>assests/imagenes/unla.png" alt="">
    


    
    <form action="<?=base_url();?>FormuContro/mostrar"method="POST">
        <p>nombre</p> <input name="nombre" type="text">
        <p>apellido</p><input name ="apellido" type="text">
        <button type="submit">enviar</button>
   </form>
</body>
</html>