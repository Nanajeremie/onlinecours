<?php 
include'head.php';  
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
        
        $erreu='Your passwords are differents. Please write the same password';
    }
    
   
      else{ $quser = $bdd->prepare("SELECT * FROM register WHERE username=?");
             $quser->execute(array($user));
              $test = $quser->rowCount();
        if($test>=1){
            
            $erreu='This username is already used. please change another one.';
           
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
<div id="pcourses">
    <span>Enroll</span>
</div>
<h1>Welcome to Enroll page</h1>
<h2 style="color:red;text-align:center" ><?php if(isset($erreu)){echo $erreu;}?></h2>

<p>Full up this formular to access our online courses</p>
<div id="enrollContener">
    <form method="post" action="#" id="enrollForm">
        <h2>Full up the formular please!</h2>
        <input id="firstname" type="text" name="fname" value="<?php if(isset($_POST['fname'])){echo $_POST['fname'];}?>" placeholder=" firstname"><br><br>
        <input id="lastname" type="text" name="lname" placeholder=" lastname"><br><br>
        <input id="username" type="text" name="username" placeholder=" username *" required><br><br>
        <input id="pass1" type="password" name="pass1" placeholder=" Password" required><br><br>
        <input id="pass2" type="password" name="pass2" placeholder=" Confirm Password" required><br><br>
        <input id="birthday" type="date" name="date1"  ><br><br>
        <input id="Email" type="email" name="email" placeholder=" Email"><br><br>
        <input id="tel" type="tel" name="tel1" placeholder="Phone number"><br><br>
        <input id="profession" type="text" name="profession" placeholder="Your Occupation"><br><br>
        <select id="country" name="pays">
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
            Sexe:<select name="sex1">
                <option value="sexe">Sexe</option>
                <option value="M">M</option>
                <option value="F">F</option>
            </select>
        </label><br><br>
        <input id="reset1" type="reset" name="reset" value="reset"><br><br>
        <input id="submit1" type="submit" name="submit1" value="Send">
    </form>
</div>
<?php  include'footer.php';?>