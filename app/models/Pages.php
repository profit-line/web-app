<?php
namespace App\models;
use Libraries\Database\Database;

class Pages{

    private $db;
    public function __construct(){

        $this->db = new Database();

    } 

}