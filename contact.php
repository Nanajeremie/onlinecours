<?php include'head.php';
require_once'bd.php';

$reponse=$bdd->query("SELECT * FROM contact ORDER BY id DESC");

if(isset($_POST['submit'])){
    $name1=$_POST['fname'];
    $name2=$_POST['lname'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $text=$_POST['text'];
    
    $req=$bdd->prepare("INSERT INTO contact SET fname=?, lname=?,email=?,subject=?, comment=?");
    $req->execute([$name1,$name2,$email,$subject,$text]);
    
    $back= $name2.'We received your message. We will do our best to give you an answer very soon.';
}
?>


<div id="pcourses">
    <span>Contact us</span>
</div>
<h2><?php if(isset($back)){echo $back;}?></h2>
<div id="contact-container">
    <div id="infos-cont" >
        <h2>Send Message</h2>
        <form method="post" action="#submit" id="form-cont">
            <input type="text" name="fname" placeholder="Your First-name" id="fname"><br><br>
            <input type="text" name="lname" placeholder="Your Last-name" id="lname"><br><br>
            <input type="email" name="email" placeholder="Your email" id="email"><br><br>
            <input type="text" name="subject" placeholder="Your subject" id="subject"><br><br>
            <textarea id="textarea" placeholder="Your Message" name="text"></textarea><br><br>
            <input type="reset" id="reset" value="Cancel">
            <input type="submit" name="submit" value="Send Message" id="submit">
            </form>
    </div>
    <div id="infos1-cont">
        <h2>Contact information</h2><br>
        <div id="contenerContact">
            <span><img src="icones/gmail_48px.png">Email: neyadolores94@gmail.com</span><br><br>
            <span><img src="icones/iphone_40px.png">Tel: 00226 7282 1548</span><br><br>
            <span><img src="icones/mailbox_with_letter_64px.png">BP: 322 Koudougou Burkina Faso</span>
      </div>
       <h2 id="commentti">The lastest comments:</h2>
        <div id="comment">
             
             <?php 
            while($re=$reponse->fetch()){
            ?>
            
            <h3><?php echo $re['fname'].' '.$re['lname'];?>:</h3>
            <p><?php echo $re['comment'];?></p><hr>
            <?php
            }?>
            </div>
        
    </div>
    
</div>
<?php include'footer.php';?>