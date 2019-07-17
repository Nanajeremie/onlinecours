<?php include'head.php';
    require_once'bd.php';
    $req = $bdd->query('SELECT * FROM courses ORDER BY id ASC LIMIT 8');
?>
<section>
    <h1>Welcome to High-Tech Generation</h1>

    <div id="welcome">
        <img src="images/pat.jpg">
        <p>
            I am Patrick and I am student at Bit. In short word, Bit is the Temple of knowledge and it is amazing the way you learn easily with strong tools and powerful technologies. With the perfect wireless connection provided, Bit carry you to the ideal universe to work and force excellence. It’s really exciting to be part of its from the courses to the great chance to stand in company of famous teachers motivated to break any barrier to give the essential tools to conquer the world
            Trust in success choose BIT improve the World
            Best of Patrick
        </p>
    </div>
</section>
<section>

    <h1>Our Courses</h1>
    <div id="coursecontener">
    <ul>
        <?php 
         $reponse = $bdd->query('SELECT * FROM courses ORDER BY id DESC LIMIT 9');
        while($an=$req->fetch()){
        ?>
        <li>
            <a href="login.php#create" >
            <img src="images/<?php echo $an['link'];?>">
            <h3><?php echo $an['titre'];?></h3>
            </a>
            <a href="enroll.php#enrollForm" id="lien"><span>Enroll</span></a>
        </li>
        <?php
        }?>
    
    </ul>
</div>
</section>
    <h1>About us</h1>
    <hr style="width:80%; text-align:center;">
    <div id="staff">
        <h1 style="font-familly:agency FB; font-style:italic;">Our staff</h1> 
        <ul>
            <?php
            while($req=$reponse->fetch()){
            ?>
            <li>
               <a href="about.php#susanne"><img src="images/<?php echo $req['link'];?>" title="<?php echo $req['titre'].' ('. $req['profession'].')';?>">
                <h3><?php echo $req['titre'];?></h3></a>    
            </li>
            <?php     
              }
              $reponse->closeCursor();?>
         </ul>
         <h1 style="font-familly:agency FB; font-style:italic;">Our team</h1>
         <div id="ourTeam">
             <strong>High-Tech Generation (HTG)</strong>
             <a href="about.php#owner"><img src="images/team.JPG">
             <p>We are students at Burkina Institute of technology(BIT). We have a lot of skills about programming. We created this website in order to share our knowledge and allow those who have not financial means to learn what they want and realize their dream. You will follow the courses  online in our website gided by some quality teachers. You can ask some questions to our staff and we will do our best to give you back an answer.</p></a>
         </div>
    </div>
    <script src="js/jquery-3.4.0.min.js" type="text/javascript"></script>
<?php include'footer.php';?>