
<?php


ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);


require_once ("../config/Conectar.php");
require_once ("../models/Camper.php");


    $camper = new Camper();
    $body = json_decode(file_get_contents("php://input"), true);

    switch ($_GET["op"]) {
        case 'GetAll':
            $datos = $camper -> get_camper();
            echo json_encode($datos);
        break;

        case "GetId";

        $datos = $camper->get_camper_id($body["id"]);
        echo json_encode($datos);
         
        break;
        
    }



?>