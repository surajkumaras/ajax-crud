<?php  
    include_once 'conn.php';
    
//        $json_data = file_get_contents('php://input');
//        $data = json_decode($json_data, true);
//
//        if ($data === null) 
//        {
//            echo json_encode("Invalid JSON data");
//            exit;
//        }
//        
//        $name = $data['name'];
//        $cls = $data['cls'];
//        $email = $data['email'];
//        
//        $sql = "insert into student(name,class,email)values('$name','$cls','$email')";
//        $res = mysqli_query($GLOBALS['conn'],$sql);
//        
//        header('Content-Type: application/json');
//        
//        if($res) 
//        {
//            echo json_encode("Data submitted");
//        } 
//        else 
//        {
//            echo json_encode("Failed to submit: " . mysqli_error($GLOBALS['conn']));
//        }
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') 
    {
        $name = $_POST['name'];
        $cls = $_POST['cls'];
        $email = $_POST['email'];
        
        $sql = "insert into student(name,class,email)values('$name','$cls','$email')";
        $res = mysqli_query($GLOBALS['conn'],$sql);
        
        if($res)
        {
            echo json_encode("Data submited");
        }
        else
        {
            echo json_encode("Failed to submit");
        }
    }
 
