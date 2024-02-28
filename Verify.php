<?php
session_start();
if(isset($_SESSION['id'])){
        header("location:index.php");
        die();

}
$login=$_POST['login'];
$pwd=$_POST['pwd'];
$conn=new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
$sql="SELECT * FROM user where login='$login' and password=sha1('$pwd')"; 
$result=$conn->query($sql);
if($result->rowCount()==1){
    $data=$result->fetch(PDO::FETCH_ASSOC);
    $_SESSION['username']=$data['login'];
    $_SESSION['role']=$data['role'];
    $_SESSION['user_id']=$data['id'];
    $_SESSION['id']=session_id();
    header("location:index.php");
        die();
}else{
    $_SESSION['error']="error";
    header("location:index.php");
        die();
}
$conn=null;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Verify<form</title>
</head>
<body>

    <?php
    $login =$_POST['login'];
    $pwd =$_POST['pwd'];
    if ($login=="admin" && $pwd=="ad1234")
    {
        $_SESSION["username"]="admin";
        $_SESSION["role"]="a";
        $_SESSION["id"]="session_id"();
        header("location:index.php");
        die();
        //echo"ยินดีต้อนรับคุณ ADMIN<br>";
    }
    elseif($login=="member" && $pwd=="mem1234")
    {
        $_SESSION["username"]="member";
        $_SESSION["role"]="m";
        $_SESSION["id"]="session_id"(); 
        header("location:index.php");
        die();
        //echo"ยินดีต้อนรับคุณ MEMBER<br>";
    }
    else 
    {
        $_SESSION['error']='error';
    header("location:login.php");
    die();
        //echo"ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง <br>";
    }
    //echo "<a href=index.php>กลับไปหน้าหลัก</a> <br>";
    ?>
   
    
</body>
</html>