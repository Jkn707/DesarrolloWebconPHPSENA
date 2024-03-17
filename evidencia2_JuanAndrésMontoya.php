<!DOCTYPE html>
<html>
    <head>
        <title>Unidad 2 - Ejercicio 4</title>
        <meta http-equiv="Content-Type" 
              content="text/html; charset=ISO-8859-1" />
    </head>


    <body>
        <h3>Directorio telefonico</h3>
        <?php


        
        /*
            Juan Andrés Montoya Galeano. 
            Desarrollo Web em PHP.
            Taller "Uso de arreglos"

        */

        //Directorio telefónico con todos los campos determinados.
        $directorioTelefonico = array(
            array("nombre" => "Luis Martinez", "direccion" => "Cra. 34 No. 19-54", "telefono" => "323 12 00", "fechaNacimiento" => "1985-12-12", "colorFavorito" => "Azul"),
            array("nombre" => "Carlos Perez", "direccion" => "Cra. 34 No. 19-54", "telefono" => "321 11 11", "fechaNacimiento" => "1990-11-01", "colorFavorito" => "Morado"),
            array("nombre" => "Juan Morales", "direccion" => "Cra. 34 No. 19-54", "telefono" => "314 55 02", "fechaNacimiento" => "1976-03-14", "colorFavorito" => "Naranja"),
        );

        //Relación de colores con emociones.
        $tablaEmociones = array(
            "Amarillo" => "Feliz",
            "Azul" => "Triste",
            "Rojo" => "Enojado",
            "Verde" => "Tranquilo",
            "Blanco" => "Neutral",
            "Morado" => "Inspirado",
        );

                
        //Se imprime el directorio telefónico en el formato correspondiente.
        ?>
        <table border="1">
            <tr>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Fecha de nacimiento</th>
                <th>Color favorito</th>
                <th>Significado</th>
            </tr>
            <?php
            foreach ($directorioTelefonico as $registro) {
                echo "<tr>";
                echo "<td>" . $registro["nombre"] . "</td>";
                echo "<td>" . $registro["direccion"] . "</td>";
                echo "<td>" . $registro["telefono"] . "</td>";
                echo "<td>" . $registro["fechaNacimiento"] . "</td>";
                echo "<td>" . $registro["colorFavorito"] . "</td>";

                //Se verifica si el color favorito tiene un significado conocido y se imprime.

                if (isset($tablaEmociones[$registro["colorFavorito"]])) {
                    echo "<td>" . $tablaEmociones[$registro["colorFavorito"]] . "</td>";
                } else {
                    echo "<td>Desconocido</td>";
                }
                echo "</tr>";
            }
            ?>
        </table>
    </body>
</html>
