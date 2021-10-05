<!DOCTYPE html>
<htmllang="es">
<head>
<metacharset="UTF-8">
<metahttp-equiv="X-UA-Compatible"content="IE=edge">
<metaname="viewport"content="width=device-width, initial-scale=1.0">
<title>Horario clase</title>
<style>
    table, tr, td {
            border: 1px solid black;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            border-collapse: collapse;
        }
</style>
</head>
<body>
<h2>Horario de la semana</h2>
<?php

//Introducción

$dia = date("w");
$hora = date("H:i:s");
$fecha = date("d/m/Y");
$horacompleta = date("H:i");

echo "La fecha de hoy es: ". $fecha. "<br>";
echo "La hora actual es: ". $hora;

switch ($dia) {

    #Lunes

    case '1':
        echo "
        <table>
            <caption>Horario Lunes</caption>
            <tr>
                <td>Implantación de aplicaciones web</td>
            </tr>
            <tr>
                <td>Implantación de aplicaciones web</td>
            </tr>
            <tr>
                <td>Implantación de aplicaciones web</td>
            </tr>
            <tr>
                <td>Recreo</td>
            </tr>
            <tr>
                <td>Servicios de red e Internet</td>
            </tr>
            <tr>
                <td>Servicios de red e Internet</td>
            </tr>
            <tr>
                <td>Servicios de red e Internet</td>
            </tr>
        </table>
        ";
        echo"<br>";

        if (('08:15'>=$horacompleta) | ($horacompleta<'11:15')){
            echo"Estamos en: Implantación de aplicaciones web";
        }
        elseif (('11:15'>=$horacompleta) | ($horacompleta<'11:45')) {
            echo"Estamos en: Recreo";
        }
        elseif (('11:45'>=$horacompleta) | ($horacompleta<'14:45')) {
            echo"Estamos en: Servicios de red e Internet";
        }
        else {
            echo"Estamos en casa";
        }
        echo"<br>";
        echo"<br>";

        break;

        #Martes

        case '2':
            echo "
            <table>
                <caption>Horario martes</caption>
                <tr>
                    <td>Adminsitración de sistemas operativos</td>
                </tr>
                <tr>
                    <td>Adminsitración de sistemas operativos</td>
                </tr>
                <tr>
                    <td>Adminsitración de sistemas operativos</td>
                </tr>
                <tr>
                    <td>Recreo</td>
                </tr>
                <tr>
                    <td>Seguridad y alta disponibilidad</td>
                </tr>
                <tr>
                    <td>Empresa e iniciativa emprendedora</td>
                </tr>
                <tr>
                    <td>Empresa e iniciativa emprendedora</td>
                </tr>
            </table>
            ";
            echo"<br>";
            
            if (('08:15'>=$horacompleta) | ($horacompleta<'11:15')){
                echo"Estamos en: Adminsitración de sistemas operativos";
            }
            elseif (('11:15'>=$horacompleta) | ($horacompleta<'11:45')) {
                echo"Estamos en: Recreo";
            }
            elseif (('11:45'>=$horacompleta) | ($horacompleta<'12:45')) {
                echo"Estamos en: Seguridad y alta disponibilidad";
            }
            elseif (('12:45'>=$horacompleta) | ($horacompleta<'14:45')) {
                echo"Estamos en: Empresa e iniciativa emprendedora";
            } 
            else {
                echo"Estamos en casa";
            }
            echo"<br>";
            echo"<br>";
            
            break;

            #Miercoles

            case '3':
                echo "
                <table>
                    <caption>Horario miercoles</caption>
                    <tr>
                        <td>Adminsitración de sistemas operativos</td>
                    </tr>
                    <tr>
                        <td>Adminsitración de sistemas operativos</td>
                    </tr>
                    <tr>
                        <td>Adminsitración de sistemas operativos</td>
                    </tr>
                    <tr>
                        <td>Recreo</td>
                    </tr>
                    <tr>
                        <td>Servicios de red e Internet</td>
                    </tr>
                    <tr>
                        <td>Servicios de red e Internet</td>
                    </tr>
                    <tr>
                        <td>Servicios de red e Internet</td>
                    </tr>
                </table>
                ";
                echo"<br>";

                if (('08:15'>=$horacompleta) | ($horacompleta<'11:15')){
                    echo"Estamos en: Adminsitración de sistemas operativos";
                }
                elseif (('11:15'>=$horacompleta) | ($horacompleta<'11:45')) {
                    echo"Estamos en: Recreo";
                }
                elseif (('11:45'>=$horacompleta) | ($horacompleta<'14:45')) {
                    echo"Estamos en: Servicios de red e Internet";
                }
                else {
                    echo"Estamos en: Estamos en casa";
                }
                echo"<br>";
                echo"<br>";

                break;

                #Jueves

                case '4':
                    echo "
                    <table>
                        <caption>Horario jeves</caption>
                        <tr>
                            <td>Administración de sistemas gestores de bases de datos</td>
                        </tr>
                        <tr>
                            <td>Administración de sistemas gestores de bases de datos</td>
                        </tr>
                        <tr>
                            <td>Administración de sistemas gestores de bases de datos</td>
                        </tr>
                        <tr>
                            <td>Recreo</td>
                        </tr>
                        <tr>
                            <td>Seguridad y alta disponibilidad</td>
                        </tr>
                        <tr>
                            <td>Inglés</td>
                        </tr>
                        <tr>
                            <td>Inglés</td>
                        </tr>
                    </table>
                    ";
                    echo"<br>";

                    if (('08:15'>=$horacompleta) | ($horacompleta<'11:15')){
                        echo"Estamos en: Administración de sistemas gestores de bases de datos";
                    }
                    elseif (('11:15'>=$horacompleta) | ($horacompleta<'11:45')) {
                        echo"Estamos en: Recreo";
                    }
                    elseif (('11:45'>=$horacompleta) | ($horacompleta<'12:45')) {
                        echo"Estamos en: Seguridad y alta disponibilidad";
                    }
                    elseif (('12:45'>=$horacompleta) | ($horacompleta<'14:45')) {
                        echo"Estamos en: Inglés";
                    } 
                    else {
                        echo"Estamos en casa";
                    }
                    echo"<br>";
                    echo"<br>";

                    break;

                    #viernes
            
                    case '5':
                        echo "
                        <table>
                            <caption>Horario viernes</caption>
                            <tr>
                                <td>Inglés</td>
                            </tr>
                            <tr>
                                <td>Seguridad y alta disponibilidad</td>
                            </tr>
                            <tr>
                                <td>Seguridad y alta disponibilidad</td>
                            </tr>
                            <tr>
                                <td>Recreo</td>
                            </tr>
                            <tr>
                                <td>Implantación de aplicaciones web</td>
                            </tr>
                            <tr>
                                <td>Empresa e iniciativa emprendedora</td>
                            </tr>
                            <tr>
                                <td>Empresa e iniciativa emprendedora</td>
                            </tr>
                        </table>
                        ";
                        echo"<br>";

                        if (('08:15'>=$horacompleta) | ($horacompleta<'09:15')){
                            echo"Estamos en: Inglés";
                        }
                        elseif (('09:15'>=$horacompleta) | ($horacompleta<'11:45')) {
                            echo"Estamos en: Recreo";
                        }
                        elseif (('11:15'>=$horacompleta) | ($horacompleta<'11:45')) {
                            echo"Estamos en: Recreo";
                        }
                        elseif (('11:45'>=$horacompleta) | ($horacompleta<'12:45')) {
                            echo"Estamos en: Implantación de aplicaciones web";
                        }
                        elseif (('12:45'>=$horacompleta) | ($horacompleta<'14:45')) {
                            echo"Estamos en: Empresa e iniciativa emprendedora";
                        } 
                        else {
                            echo"Estamos en casa";
                        }
                        echo"<br>";
                        echo"<br>";

                        break;

                    case '6':
                        echo"Es sabado a la calle";
                        echo"<br>";
                        echo"<br>";
                        break;
    default:
        echo"hoy es domingo a misa";
        echo"<br>";
        echo"<br>";
        break;
}


?>
<a href="inicio.html">Inicio</a>
</body>
</html>
