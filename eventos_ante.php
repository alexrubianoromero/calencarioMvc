<?php
// die('llego aeventos '); 
// echo '<pre>';
// print_r($_REQUEST);
// echo '</pre>';


// die();
// $_GET[''];



header('Content-Type: application/json');

// $pdo = new PDO('mysql:host=localhost;dbname=sistema','root', 'peluche2016');

// $pdo = new PDO('mysql:host=127.0.0.1;dbname=ctwtvsxj_base_calendario','ctwtvsxj_admin', 'ElMejorProgramador***');





// $servidor = "127.0.0.1";

// $usuario = "root";

// $clave  = "peluche2016";

// $nombrebase = "sistema";



$servidor = "localhost";

$usuario = "ctwtvsxj_admin";

$clave  = "ElMejorProgramador***";

$nombrebase = "ctwtvsxj_base_calendario";



$conexion =mysql_connect($servidor,$usuario,$clave);

$la_base =mysql_select_db($nombrebase,$conexion);

$sql = "SELECT * FROM eventos";
$consulta = mysql_query($sql,$conexion); 
$resultado = table_assoc($consulta);
// echo '<pre>';
// print_r($resultado);
// echo '</pre>';
// die();





$accion = (isset($_GET['accion']))?$_GET['accion']:'Leer';

switch($accion){

    case 'agregar':
    //     echo '<pre>';
    // print_r($_REQUEST);
    // echo '</pre>';
    // die();

        // echo 'llego hasta aca '; 

        // echo json_encode('llego hasta aca ');

        //instruccion de agregado

        // echo 'instruccionh agregar';

        // $sentenciaSQL = $pdo->prepare("INSERT INTO 

        //     eventos (title,descripcion,color,textColor,start,end)

        //     VALUES(:title,:descripcion,:color,:textColor,:start,:end)");

        //     $respuesta = $sentenciaSQL->execute(array(

        //         "title"=>$_POST['title'],

        //         "descripcion"=>$_POST['descripcion'],

        //         "color"=>$_POST['color'],

        //         "textColor"=>$_POST['txtColor'],

        //         "start"=>$_POST['start'],

        //         "end"=>$_POST['end']

        //     ));



            $sql = "INSERT INTO eventos (title,descripcion,color,textColor,start,end) 
            VALUES('".$_POST['title']."'
            ,'".$_POST['descripcion']."'
            ,'".$_POST['color']."'
            ,'".$_POST['txtColor']."'
            ,'".$_POST['start']."'
            ,'".$_POST['end']."')";
            $consulta = mysql_query($sql,$conexion); 
            
            // echo json_encode($consulta);
            echo json_encode($sql);

            // echo json_encode($respuesta);

            break;

            case 'eliminar':

                // echo 'instruccionh eliminar';

                if(isset($_POST['id'])){

                    // $sentenciaSQL = $pdo->prepare("DELETE FROM  eventos WHERE  id = :id");

                    // $respuesta= $sentenciaSQL->execute(array("id"=>$_POST['id']));

                    $sql = "DELETE FROM  eventos WHERE  id = '".$_POST['id']."' ";

                }   $consulta = mysql_query($sql,$conexion);

                echo json_encode($consulta);

            break;

            case 'modificar':

                    // echo 'instruccionh modificar';

                    // $sentenciaSQL = $pdo->prepare("UPDATE eventos SET 

                    //     title=:title,

                    //     descripcion=:descripcion,

                    //     color=:color,

                    //     textColor=:textColor,

                    //     start=:start,

                    //     end=:end

                    //     WHERE id=:id

                    //     ");



            // $respuesta = $sentenciaSQL->execute(array(

            //     "title"=>$_POST['title'],

            //     "descripcion"=>$_POST['descripcion'],

            //     "color"=>$_POST['color'],

            //     "textColor"=>$_POST['txtColor'],

            //     "start"=>$_POST['start'],

            //     "end"=>$_POST['end'],

            //     "id"=>$_POST['id']



            // ));



            $sql = "UPDATE eventos SET  
                title = '".$_POST['title']."'
                ,descripcion = '".$_POST['descripcion']."'
                ,color = '".$_POST['color']."'
                ,start = '".$_POST['start']."'
                ,end = '".$_POST['end']."'
                WHERE id = '".$_POST['id']."'";
            $consulta = mysql_query($sql,$conexion);    
            echo json_encode($consulta);
    break;

    

    default:
            // die('entro a esta opcion 123');
            // $sentenciaSQL = $pdo->prepare("SELECT * FROM eventos");
            // $sentenciaSQL->execute();
            // $resultado = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
            $sql = "SELECT * FROM eventos";
            $consulta = mysql_query($sql,$conexion); 
            $resultado = table_assoc($consulta);
            echo json_encode($resultado);
        break;
}

  

function table_assoc($datos)

{

    $arreglo_assoc='';

        $i=0;	

        while($row = mysql_fetch_assoc($datos)){		

            $arreglo_assoc[$i] = $row;

            $i++;

        }

    return $arreglo_assoc;

}



?>