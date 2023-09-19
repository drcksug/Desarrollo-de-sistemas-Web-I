<!DOCTYPE html>
 <html lang="en">
      <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Captura de datos</title>
         <link rel="stylesheet" href="CSS/Style.css">
      </head>

      <body>
         <div class="dive">
            <h1>Captura de datos personales</h1><br>
            <h2>Ingresa los datos que se te piden</h2><br>
            <center>
                <p>Mi primera encuesta</p><hr>
                <form action="Resultados.php" method="POST">
                    <label for="Name">Nombre: </label>
                    <input type="text" id="Name" name="Name" value="Ingresa tu nombre: "><hr>
                    <label for="Age">Edad: </label>
                    <input type="number" id="Age" name="Age" value="Ingresa tu Edad: "><hr>
                    <label for="City">Ciudad donde vivdes: </label>
                    <input type="text" id="City" name="City" value="Ingresa la Ciudad: "><hr>
                    <label for="Hobby">Pasatiempo: </label>
                    <input type="text" id="Hobby" name="Hobby" value="Ingresa tu Pasatiempo: "><hr><br>
                    <button type="submit">¡Ingresamos datos!</button>
            </center>
            </form>  
         </div>
      </body>
 </html>
