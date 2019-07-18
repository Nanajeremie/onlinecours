<?php include'head.php';
    require_once'bd.php';

     $req = $bdd->query('SELECT * FROM cours ORDER BY id ASC LIMIT 8');
?>
<div id="pcourses">
    <span>Our courses</span>
</div>

<h1>Welcome <?php if(isset($_SESSION['fname'])){echo $_SESSION['fname'];}?></h1>
<p id="conseil">Now you can read the courses and do some excercises to improve your level. If you are any questions let us a message. Enjoy the courses.<b><?php if(isset($_SESSION['fname'])){echo $_SESSION['fname'];}?></b>
</p>
<div id="containerCourses">
    <ul>
        <li>
            <a href="courses/First%20Part.pdf"><img src="images/Programming.jpg">
				<h4>Programming</h4>
             <h3>read Now</h3></a>
        </li>
        <li>
            <a href="#"> <img src="images/computerScience.jpg">
            <h4>Computer Science</h4>
             <h3>Read now</h3></a>
        </li>
        <li>
            <a href="courses/Maths/MATHS.PDF"> <img src="images/math1.jpg">
            <h4>Mathematics</h4>
             <h3>Read now</h3></a>
        </li>
        <li>
            <a href="#"> <img src="images/os.jpg">
            <h4>Operating System</h4>
             <h3>Read now</h3></a>
        </li>
        <li>
            <a href="courses/Module1/English%20syntax.pdf"> <img src="images/ang.jpg">
            <h4>English</h4>
             <h3>Read now</h3></a>
        </li>
		<li>
            <a href="#"> <img src="images/McroOfficepng.png">
            <h4>Microsoft Office</h4>
             <h3>Read now</h3></a>
        </li> 
		<li>
            <a href="courses/statistics/STATISTICS.pdf"> <img src="images/statistic.jpg">
            <h4>Statistics</h4>
             <h3>Read now</h3></a>
        </li>
		<li>
            <a href="#"> <img src="images/management.jpg">
            <h4>Management</h4>
             <h3>Read now</h3></a>
        </li>     
    </ul>   
</div>
<?php include'footer.php';?>