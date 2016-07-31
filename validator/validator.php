<?php

class validator {

    public function numbers($numbers1, $numbers2) {

        if(preg_match("/^[-0-9]+$/", $numbers1) & preg_match("/^[-0-9]+$/", $numbers2)){
            return TRUE;
        } else {
            return FALSE;
        }      
    }
}
