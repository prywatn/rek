<?php

class ControllerCalculator {
    public function construct() {
            require_once '../validator/validator.php';
            require_once '../model/ModelCalculator.php'; 
        try{
            $validator = new validator();
            $model = new ModelCalculator();
            $numbers1 = trim($_GET['number1']);
            $numbers2 = trim($_GET['mumber2']);
            $rezult = $model->addition($numbers1, $numbers2);
            $rezult = $rezult;
        }  catch (Exception $x) {
            return json_encode($x->getMessage());
        }

    }
}
$c = new ControllerCalculator();
$c->construct();
