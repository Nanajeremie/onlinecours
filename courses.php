<?php include'head.php';
    require_once'bd.php';
      
$req = $bdd->query('SELECT * FROM cours ORDER BY id ASC LIMIT 8');
?>
<div id="pcourses">
    <span>Our courses</span>
</div>

<h1>Welcome in our courses</h1>
<p id="conseil">We Think you will enjoy the courses. Before starting, you must register yourself in the website <a href="register.php"><i>register</i></a>. After that you have to make a choice amoung the courses below. If you want any certification, you must enroll yourself before. <a href="enroll.php"><i>Enroll now</i></a>
</p>
<div id="containerCourses">
    <ul>
        <li>
            <a href="dbenroll.php"><img src="images/Programming.jpg">
				<h4>Programming</h4>
             <h3>Learn now</h3></a>
        </li>
        <li>
            <a href="dbenroll.php"> <img src="images/computerScience.jpg">
            <h4>Computer Science</h4>
             <h3>Learn now</h3></a>
        </li>
        <li>
            <a href="dbenroll.php"> <img src="images/math1.jpg">
            <h4>Mathematics</h4>
             <h3>Learn now</h3></a>
        </li>
        <li>
            <a href="dbenroll.php"> <img src="images/os.jpg">
            <h4>Operating System</h4>
             <h3>Learn now</h3></a>
        </li>
        <li>
            <a href="dbenroll.php"> <img src="images/ang.jpg">
            <h4>English</h4>
             <h3>Learn now</h3></a>
        </li>
		<li>
            <a href="dbenroll.php"> <img src="images/McroOfficepng.png">
            <h4>Microsoft Office</h4>
             <h3>Learn now</h3></a>
        </li> 
		<li>
            <a href="dbenroll.php"> <img src="images/statistic.jpg">
            <h4>Statistics</h4>
             <h3>Learn now</h3></a>
        </li>
		<li>
            <a href="dbenroll.php"> <img src="images/management.jpg">
            <h4>Management</h4>
             <h3>Learn now</h3></a>
        </li>     
    </ul>   
</div>
<?php include'footer.php';?>