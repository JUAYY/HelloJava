<?php
 
    require_once('dbconfig.php');

    $db = new Database('localhost', 'enrollment','root','');

    if($_SERVER['REQUEST_METHOD'] == "GET"){
        echo json_encode($db->query('SELECT * FROM student.info')); //change the code
    }else if($_SERVER['REQUEST_METHOD'] == 'POST'){
        echo 'This is POST';
    }else{
        http_response_code(405);
    }



?>
