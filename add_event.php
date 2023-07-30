<?php
session_start();
error_reporting(0);

if(!isset($_SESSION['username']))
{
    header("location:login.php");
}

else if($_SESSION['usertype']!='admin')
{
    header("location:login.php");
}


$host = "localhost";
$user = "root";
$password = "";
$db = "kctsb";

$data = mysqli_connect($host, $user, $password, $db);

if(isset($_POST['add_event']))
{

 $t_description = $_POST['description'];
 $file = $_FILES['image'];
 $dst = "./event_image/".$file;
 $dst_db = "image/".$file;
 move_uploaded_file($_FILES['image']['tmp_name'],$dst);
}

$sql = "INSERT INTO teacher(event_pic,event_title) VALUES('$dst_db','$t_description') ";
$result = mysqli_query($data,$sql);

if($result)
    {
        echo "<script type='text/javascript'>
        alert('Data added successfully...');
        </script";
    }
    else
    {
        echo "Data upload failed..";
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
   <style>

    label{
            display: inline-block;
            text-align: right;
            width: 100px;
            padding-top: 10px;
            padding-bottom: 10px;
        }

    .div_deg{
        background-color:skyblue;
        width: 400px;
        padding-top: 70px;
        padding-bottom: 70px;



    }
   </style>



</head>
<body>


<div class="content">
    
<center>
<h1 style="text-align: center;"> Add Events</h1>
<br> <br>
<div class="div_deg">
    <form action="#" method="POST" enctype="multipart/form-data">
        <div>
        <label>Image</label>
            <input type="file" name="image" required>
        </div>
        <br>
        <div>
            <label>Event Title</label>
            <textarea name="description"></textarea>
            
        </div>
        <br>
        <br>
        <div>
            <input class="btn btn-primary" type="submit" name="add_event" value="Add Event">
        </div>
    </form>
</div> 
    </center> 
</div>

</body>
</html>