<?php
    //$data = json_decode( file_get_contents( 'php://input' ), true ); 
    //echo json_encode(array("blablabla"=>$data));
    $enlace = mysqli_connect("", "", "", "");
    if (!$enlace) {
        exit;
    }
        

?>