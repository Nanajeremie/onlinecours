<?php session_start();?>
<!DOCTYPE html>

<html>
    <head>
        <title>OnlineCourses</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet" href="css/head.css" type="text/css">
        <link rel="stylesheet" href="css/footer.css" type="text/css">
        <link rel="stylesheet" href="css/courses.css" type="text/css">
        <link rel="stylesheet" href="css/staff.css" type="text/css">
        <link rel="stylesheet" href="css/team.css" type="text/css">
        <link rel="stylesheet" href="css/enroll.css" type="text/css">
        <link rel="stylesheet" href="css/register.css" type="text/css">
        <link rel="stylesheet" href="css/contact.css" type="text/css">
        <link rel="stylesheet" href="css/about.css" type="text/css">
        <link rel="stylesheet" href="css/login.css" type="text/css">
    </head>
    
    <body>
        <div id="container">
            <img src="images/cover.jpg" id="cover">
            <nav id="link">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="courses.php#pcourses">Our courses</a></li>
                    <li><a href="about.php#pcourses">About us</a></li>
                    <li><a href="contact.php#pcourses">Contact</a></li>
                </ul>
                <div id="login">
                    <span id="log1">Login</span>
                    <a href="enroll.php#pcourses"><span id="log2">Register</span></a>
                </div>
                <aside id="modalle" class="modalle mode1" aria-hidden="true" role="dialog" style="display:none" > 
    <div class="modalwrapper model" >
    <form method="post" action="log.php" id="loginform">
        <h1>Login</h1><img src="icones/cancel_48px.png" id="close1">
        <input id="user" type="text" name="username" placeholder=" username *" required><br><br>
        <input id="pass" type="password" name="pass1" placeholder=" Password" required><br><br>
        <input id="submi" type="submit" name="submit" value="Send">
    </form>
</div>     
        </aside>
                
    <!--<aside id="modal1" class="modal mode" aria-hidden="true" role="dialog" style="display: none" > 
    <div class="modal-wrapper mod" >
    <form method="post" action="link.php" id="enrollForm">
        <h2>Register</h2> <img src="icones/cancel_48px.png" id="close">
        <input id="firstname1" type="text" name="fname" placeholder=" firstname *" required><br><br>
        <input id="username" type="text" name="username" placeholder=" username *" required><br><br>
        <input id="pass1" type="password" name="pass1" placeholder=" Password" required><br><br>
        <input id="pass2" type="password" name="pass2" placeholder="  Confirm Password" required><br><br>
        <input id="lastname" type="text" name="lname" placeholder=" lastname *" required><br><br>
        <input id="birthday" type="date" name="date1" required ><br><br>
        <input id="Email" type="email" name="email" placeholder=" Email" required><br><br>
        <input id="tel" type="tel" name="tel1" placeholder="Phone number *" required><br><br>
        <input id="profession" type="text" name="profession" placeholder="Your Occupation*" required><br><br>
        <select id="country" name="pays" required>
            <option value="Choose your country">Choose your country</option>
            <option value="Afghanistan">Afghanistan</option>
            <option value="Albania">Albania</option>
            <option value="Algeria">Algeria</option>
            <option value="Angola">Angola</option>
            <option value="Argentina">Argentina</option>
            <option value="Armenia">Armenia</option>
            <option value="Australia">Australia</option>
            <option value="Austria">Austria</option>
            <option value="Benin">Benin</option>
            <option value="Belize">Belize</option>
            <option value="Burkina Faso">Burkina Faso</option>
            <option value="Benin">Benin</option>
            <option value="Benin">Benin</option>
            <option value="Benin">Benin</option>
            <option value="Benin">Benin</option>
            <option value="Togo">Togo</option>
            <option value="Ivory Cost">Ivory Cost</option>
            <option value="Burkina Faso">Burkina Faso</option>
            <option value="Burkina Faso">Burkina Faso</option>
            <option value="Burkina Faso">Burkina Faso</option>
            <option value="Burkina Faso">Burkina Faso</option>
            <option value="Burkina Faso">Burkina Faso</option>
            <option value="Burkina Faso">Burkina Faso</option>
        </select><br><br>
        <label>
            Sexe: <select name="sex1">
                    <option value="Sex">Sex</option>
                    <option value="M">M</option>
                    <option value="F">F</option>
                </select>
        </label><br><br>
        <input id="reset1" type="reset" name="reset" value="reset"><br><br>
        <input id="submit1" type="submit" name="submit1" value="Send">
    </form>
</div>
             
            
        </aside>-->
        <script src="js/jquery-3.4.0.min.js" type="text/javascript"></script>
        <script type="text/javascript" >
            var open= document.getElementById('log2');
             var gett=document.getElementById('modal1');
            var open1 = document.getElementById('log1');
            var gett1 = document.getElementById('modalle');
            var close = $('#close');
            var close1 = $('#close1');
            open.addEventListener('click',function(){
                gett.style.display=null;
                $('.modal').removeClass('mode');
                gett.removeAttribute('aria-hidden');
                gett.setAttribute('aria-modal','true');
               
            });
            close.on('click',function(){
                gett.style.display='none';
                gett.setAttributeAttribute('aria-hidden');
                gett.removeAttribute('aria-modal','true');
    
            });
              $('.modal-wrapper').fadeTo();
            
            //login section
            
            open1.addEventListener('click',function(){
                gett1.style.display=null;
                $('.modalle').removeClass('mode1');
                gett1.removeAttribute('aria-hidden');
                gett1.setAttribute('aria-modal','true');
               
            });
            close1.on('click',function(){
                gett1.style.display='none';
                gett1.setAttributeAttribute('aria-hidden');
                gett1.removeAttribute('aria-modal','true');
    
            });
              
              $('.modalwrapper').fadeTo();
          
        </script>
                <a href="index.php"><img src="icones/logo1.png" id="logo" width="600" height="500"></a>
            </nav>
            <strong>Train a New Generation of Leaders is Our Duty</strong>
        </div>  
   