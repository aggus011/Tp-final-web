<?php 
class HomeSuperModel{
    private $database;

    public function __construct($database){
        $this->database = $database;
    }
}