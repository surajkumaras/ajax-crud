<?php

include_once 'conn.php';

if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $id = $_POST['id'];
    
    $sql = "select * from student where id = $id";
    $res = mysqli_query($GLOBALS['conn'],$sql);
    
    if($res)
    {
        $row =  mysqli_fetch_assoc($res);
       $data[] = $row;
       echo json_encode($data);
    }
    else 
    {
        echo "Error to fetch Student Details";
    }
}

