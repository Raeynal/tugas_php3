<?php
   require_once './animal.php';

   class ape extends animal {
    public function yell() {
        return 'auooo';
    }
    public function getlegs() {
        return 2;
    }
   }
   ?>
 