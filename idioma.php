<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Elegir Idioma</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <section>
            <table>
                <tr>
                    <?
                        if(isset($_COOKIE['idioma'])){
                            if($_COOKIE['idioma']=='es'){
                                header('Location: spanish.php');
                            }
                            if($_COOKIE['idioma']=='en'){
                                header('Location: english.php');
                            }
                        }else{
                            echo "<td><a href='cookie.php?idioma=es'><img src='argentina.png' alt='bandera de argentina' width='200' height='125'></td></a>";
                            echo "<td><a href='cookie.php?idioma=en'><img src='eeuu.png' alt='bandera de estados unidos' width='200' height='125'></a></td>";
                        }
                    ?>
                </tr>
            </table> 
        </section>
    </body>
</html>