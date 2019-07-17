<?php
session_start();


   
 require_once'bd.php';

if(isset($_POST['submit1'])){
    
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $user=$_POST['username'];
    $pass1=$_POST['pass1'];
    $pass2=$_POST['pass2'];
    $email=$_POST['email'];
    $occupation=$_POST['profession'];
    $date=$_POST['date1'];
    $tel=$_POST['tel1'];
    $country=$_POST['pays'];
    $sexe=$_POST['sex1'];
    
    if($pass1!=$pass2){
        
        $_SESSION['erreu']='Your passwords are differents. Please write the same password';
        header('Location:enroll.php#enrollForm');
    }
    
   
      else{ $quser = $bdd->prepare("SELECT * FROM register WHERE username=?");
             $quser->execute(array($user));
              $test = $quser->rowCount();
        if($test>=1){
            
            $_SESSION['erreu']='This username is already used. please change another one.';
            header('Location:enroll.php#enrollForm');
           
        }
       else{
       $repon=$bdd->prepare("INSERT INTO register SET fname=?, lname=?, username=?, pass1=?, pass2=?, email=?,occupation=?, date=?,number=?,sex=?,country=?");
       $pass1 = sha1($_POST['pass1']);
       $pass2 = sha1($_POST['pass2']);
       $repon->execute([$fname,$lname,$user,$pass1,$pass2,$email,$occupation,$date,$tel,$sexe,$country]);
           
           $_SESSION['username']=$_POST['username'];
           $_SESSION['email']=$_POST['email'];
           $_SESSION['fname']=$_POST['fname'];
           $_SESSION['lname']=$_POST['lname'];
           $_SESSION['profession']=$_POST['profession'];
           $_SESSION['country']=$_POST['pays'];
           $_SESSION['date']=$_POST['date1'];
           $_SESSION['tel']=$_POST['tel1'];
           $_SESSION['sex']=$_POST['sex1'];
       header('Location:login.php#create');
   }
 }
}


?>
