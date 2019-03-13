<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require 'config.php';

class Conexion{
    protected $conexion_db;
    
    public function Conexion() {
        $this->conexion_db=new mysqli($host, $username, $passwd, $dbname, $port, $socket)
        
    }
}