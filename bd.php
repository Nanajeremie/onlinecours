<?php 
$bdd= new PDO("mysql:host=localhost;dbname=slack","root","");
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
