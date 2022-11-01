<?php
 class Database {
    private $pdo;

     public function __construct($host, $dbname, $username, $password){
        //$con = new PDO('mysql:host='.$host.';' 'dbname='.$dbname.';', $username, $password);
        $conn = new PDO("mysql:host=localhost;dbname=enroollment", $username, $password);

        $con->setAttribute(PDO::ATTER_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo = $con;
    }

    public function query($show){
        $stmt = $this->pdo->prepare($show);
        $stmt->execute();

        if($show){
            $data = $emit->fetchAll();
            return = $data;
        }
    }
 }








?>