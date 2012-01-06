<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Primzahl
 *
 * @author christ
 */
class Primzahl {
    public function isPrimzahl($zahl) {
        #durch zwei Teilbar
        for($x = 2; $x < $zahl; $x++){
            if($zahl % $x == 0){
                return false;
            }
        }
        #kleiner gleich 1
        if($zahl <= 1){
            return false;
        }
        return true;
    }
    
    public function echoHoechstePrimzahl($max) {
        $letzteZahl = -1;
        for($zahl = 1; $zahl < $max; $zahl++){
            if($this->isPrimzahl($zahl)){
                echo "\n" . $zahl;
                $letzteZahl = $zahl;
            }
        }
        return $letzteZahl;
    }
}

?>
