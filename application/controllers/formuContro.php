<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class FormuContro extends CI_Controller {
	public function mostrar(){
    $nom=$_POST['nombre'];
    $ape=$_POST['apellido'];
    echo "nombre : ".$nom."<br>";
    echo "apellido : " .$ape;
}
}