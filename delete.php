<?php
session_start();
<<<<<<< HEAD
if(isset ($_SESSION['id']) && $_SESSION['role']=='a'){
if(isset ($_SESSION['id'])){
    $id = $_GET['id'];
    $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
    $sql = "DELETE FROM post WHERE id = $id";
=======
if(isset($_SESSION['id']) && $_SESSION['role']=='a'){
    $id=$_GET['id'];
    $conn=new PDO("mysql:host=localhost;dbname=webboard;
    charset=utf8","root","");
    $sql="DELETE FROM post WHERE id=$id";
    $conn->exec($sql);
    $sql="DELETE FROM comment WHERE post_id=$id";
    $conn->exec($sql);
    $conn=NULL;
    header("location:index.php");
    die();
    
   
}else{
    header("location:index.php");
    die();
}

?>
>>>>>>> 445714bc707019aa06fd31ca8f4768d5b91f3f05
