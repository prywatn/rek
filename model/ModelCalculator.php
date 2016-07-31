<?php

interface CalculatorInterface{
    
    function addition($augend,$addend);
    function substraction($minuend,$subtrahend);
    function multiplication($multiplier,$multiplicand);
    function division($dividend,$divisor);
    function modulo($dividend,$divisor);
    function expotenation($base,$expotent);
    function root($radicand,$degree=2);
    function logarithm($antilogarithm,$base=10);
}

class ModelCalculator implements CalculatorInterface {
    public function addition($augend,$addend){
            try {
                
                return $augend + $addend;
                
            } catch (Exception $ex) {
                
                return $ex->getMessage();
        } 
            
    }
    
    public function substraction($minuend,$subtrahend){
        try {
            
            return $minuend - $subtrahend;
            
        } catch (Exception $ex) {
            
            return $ex->getMessage();
        }
    }
    public function multiplication($multiplier,$multiplicand){
        try {
            
            return $multiplier * $multiplicand;
            
        } catch (Exception $ex) {
            
            return; $ex->getMessage();
        }
    }
    public function division($dividend,$divisor){
        try {
            
            return $dividend/$divisor;
            
        } catch (Exception $ex) {
            
            return $ex->getMessage();
            
        }
    }
    public function modulo($dividend,$divisor){
        try {
            return $dividend % $divisor;
        } catch (Exception $ex) {
            return $ex->getMessage();
        }
    }
    public function expotenation($base,$expotent){
        try {
            return pow($base,$expotent);
        } catch (Exception $ex) {
            return $ex->getMessage();
        }
    }
    public function root($radicand,$degree=2){
        try{
            return pow($radicand, 1/$degree);
        } catch (Exception $ex) {
            return $ex->getMessage();
        }
    }
    public function logarithm($antilogarithm,$base=10){
    
        try {
            return log($antilogarithm,$base);
        } catch (Exception $ex) {
            return $ex->getMessage();
        }
    }

}
