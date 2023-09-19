<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>¡Resultados de datos!</title>
        <link rel="stylesheet" href="CSS/Style.css">
    </head>
    
    <body>
        <div class="dive2">
            <h1>Resultados</h1>
            <center>
                <img src="GodJob.jpg" alt="Good Job" width="300">
                <h2>¡Bien Hecho!</h2><br>
                <?php
                    $name = $_POST['Name'];
                    $age = $_POST['Age'];
                    $city = $_POST['City'];
                    $hobby = $_POST['Hobby'];

                    echo '<p><b>Nombre:</b> '.$name.'</p>';
                    echo '<p><b>Edad:</b> '.$age.'</p>';
                    echo '<p><b>Ciudad:</b> '.$city.'</p>';
                    echo '<p><b>Pasa tiempo:</b> '.$hobby.'</p>';
                ?>
                <div id="popUpOverlay"></div>
                <div id="popUpBox">
                    <div id="Box">
                        <i class="fas fa-question-circle fa-5x"></i>
                        <h1>¿Volver a Ingresar datos?</h1><br>
                        <div id="closeModal"></div>
                    </div>
                </div>
                    <button onclick="Alert.render('Te ves muy bien hoy')" class="btn">¡Volver a ingresar!</button>
                    <script src="JS/app.js"></script>
            </center>
        </div>
    </body>
</html>
