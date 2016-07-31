<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of validator
 *
 * @author caton
 */
class validator {

    public function numbers($numbers1, $numbers2) {

        if(preg_match("/^[-0-9]+$/", $numbers1) & preg_match("/^[-0-9]+$/", $numbers2)){
            return TRUE;
        } else {
            return FALSE;
        }      
    }
}
