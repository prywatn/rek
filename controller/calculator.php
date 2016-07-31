<?php

class ControllerCalculator {
    public function construct() {
        echo 'ok calculator';
        
        $rezult = json_encode("pl");
        
        return $rezult;
            require_once '../validator/validator.php';
            require_once '../model/ModelCalculator.php'; 
           // require_once '../js/mainajax.js';
           var_dump($_GET);
        try{
            $validator = new validator();
            $model = new ModelCalculator();
            var_dump($_GET);
            $numbers1 = 2;// trim($_GET['number1']);
            $numbers2 = 4;//trim($_GET['mumber2']);
            $rezult = $model->addition($numbers1, $numbers2);
            $rezult = array('number'=>$rezult);
        //    return json_encode($rezult);
        }  catch (Exception $x) {
            return json_encode($x->getMessage());
        }

    }
}
$c = new ControllerCalculator();
$c->construct();