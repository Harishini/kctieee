<?php


error_reporting(0);
session_start();

$host = "localhost";
$user = "root";
$password = "";
$db = "kctsb";

$data = mysqli_connect($host, $user, $password, $db);

if($data === false)
{
    die("Connection-error");
}


if(isset($_POST['apply']))
{
    $data_name = $_POST['name'];
    $data_rollno = $_POST['rollno'];
    $data_dept = $_POST['dept'];
    $data_email = $_POST['email'];
    


    $sql = "INSERT INTO register(name,rollno,dept,email) VALUES('$data_name','$data_rollno','$data_dept','$data_email')";

    $result = mysqli_query($data,$sql);
    if($result)
    {
       $_SESSION['message'] =  "Your application has been sent Successfully";
       header("location:index.php");
    }
    else{
        echo "Apply failed";
    }

}

?>