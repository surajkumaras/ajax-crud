<?php
include_once 'conn.php';
if($_SERVER['REQUEST_METHOD']=== 'POST')
{
    $name = $_POST['name'];
    $cls = $_POST['cls'];
    $email = $_POST['email'];
    $id = $_POST['sid'];
    $qry = "UPDATE student SET name = '$name', class = '$cls', email = '$email' WHERE id = $id";
    $res = mysqli_query($GLOBALS['conn'],$qry);
    
    if($res)
    {
        echo json_encode("Data Updated");
    }
    else 
    {
        echo json_encode("Failed to update");
    }
}

