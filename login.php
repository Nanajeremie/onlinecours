<?php include('head.php');?>
<style>
    .modalwrapper1{
    position: relative;
    width: 30%;
    height: 300px;
    margin: 20px 0 120px 30%;
    background-color: aqua;
}
    .modalwrapper1 a{
        position: absolute;
        bottom: -70px;
        text-decoration: none;
        color: blue;
        font-size: 1.4em;
    }
    .modalwrapper1 a:hover{
        text-decoration: underline;
        color: darkblue;
        font-style: italic;
    }
 .modalwrapper1 #loginform1{
    position: absolute;
     top: 0;
    border: 1px solid #7cadff;
    box-shadow: 2px 2px 4px 3px rgba(0,0,0,0.7);
    background-color:white; 
    width: 100%;
    height: 250px;
    padding: 12% 0 0 20px;
}
#user, #pass{
    position: absolute;
    top: 10%;
    width: 90%;
    height: 40px;
}
    #user{
        top:40%;
    }
    #pass{
        top:60%;
    }
#user:hover, #pass:hover, #email1:hover{
    width: 92%;
    box-shadow: 2px 2px 2px 2px rgba(0,0,0,0.5);
    transition: 0.5;
}
#submi{
    position: absolute;
    bottom: 0%;
    width: 30%;
    height: 40px;
    right: 1%;
    border-radius: 20px;
    font-size: 1.4em;
    background-color: greenyellow;
    color: white;
    cursor: pointer;
}
#loginform1 h1{
    width: 100%;
    height: 50px;
    background-color: darkblue;
    color: white;
    position: absolute;
    top: -20px;
    line-height: 30px;
    left: 0;
    text-align: center;
}
</style>

<div class="modalwrapper1" >
    <form method="post" action="log.php" id="loginform1">
        <h1>Login</h1><h2 style="position:absolute; top:15%; text-align:center;color:red"><?php if(isset($_SESSION['error'])){echo $_SESSION['error'];}
            $_SESSION['error']='';
        ?></h2>
        <input id="user" type="text" name="username" placeholder=" username *" value="<?php if(isset($_SESSION['username'])){echo $_SESSION['username'];}$_SESSION['username']='';?>" required><br><br>
        <input id="pass" type="password" name="pass1" placeholder=" Password" required><br><br>
        <input id="submi" type="submit" name="submit" value="Send">
    </form>
    <a href="enroll.php" id="create">Create account</a>
</div>
<?php include('footer.php');?>