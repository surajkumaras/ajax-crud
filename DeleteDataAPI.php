<?php
include_once 'conn.php';
if($_SERVER['REQUEST_METHOD']=== 'POST')
{
    $id = $_POST['sid'];
    
    $qry = "delete from student where id = $id";
    $res = mysqli_query($GLOBALS['conn'],$qry);
    
    if($res)
    {
        echo json_encode("Data Deleted");
    }
    else 
    {
        echo json_encode("Data Deletion Failed");
    }
}

