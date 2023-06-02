<?php

class Camper extends Conectar{

public function get_camper(){

try {
    $conectar = parent::Conexion();
    parent::set_name();
    $stm = $conectar->prepare("SELECT * FROM campers");
    $stm -> execute();
    return $stm->fetchAll(PDO::FETCH_ASSOC);
} catch (Exeption $e) {
    return $e -> getMessage();
}

}

public function get_camper_id($id){
try {
    $conectar = parent::Conexion();
    parent::set_name();
    $stm = $conectar->prepare("SELECT * FROM campers WHERE id =?");
    $stm -> bindValue(1,$id);
    $stm -> execute();
    return $stm->fetchAll(PDO::FETCH_ASSOC);
}  catch (Exeption $e) {
    return $e -> getMessage();
}

}

}

?>