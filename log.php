<?php session_start();
require_once'bd.php';
    if(isset($_POST['submit'])){
        $user=$_POST['username'];
        $pass=sha1($_POST['pass1']);
        
        $req=$bdd->prepare('SELECT * FROM register WHERE username=? AND pass1=?');
        $req->execute([$user,$pass]);
        $count1=$req->rowCount();
        
        if($count1>=1){
            $info=$req->fetch();
            
            $_SESSION['username']=$info['username'];
            $_SESSION['fname']=$info['fname'];
            $_SESSION['lname']=$info['fname'];
            header('Location:courses1.php#pcourses');
        }
        
        else{
            
    $_SESSION['error']='Wrong username or password. Create a new acount if you have not one.';
        header('Location:login.php#create');     
}
    }


?>
