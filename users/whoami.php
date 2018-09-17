<?php
session_start();

// echo $_SESSION['auth_characterid'].'<br>';
echo "Name: ".$_SESSION['auth_charactername'].'<br>';
// echo $_SESSION['auth_characterhash'].'<br>';
$someArray = json_decode($_SESSION['auth_userdetails'], true);

echo "Alliance: ".$someArray['alliancename']."<br>";
echo "Corp: ".$someArray['corporationname']."<br>";

echo "Missing collect Assets, skills, ... and save in db";
?>