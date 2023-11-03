<?php
include_once 'conn.php';
$sql = "select * from student";
$res = mysqli_query($GLOBALS['conn'],$sql);
if($res)
{
    while($r = mysqli_fetch_array($res))
    {
        $data[] = $r;
    }
    
    $json_data = json_encode($data);
    
    echo $json_data;
}
            
            
            

