<?php
/**
 * Created by PhpStorm.
 * User: Daria
 * Date: 13.07.2018
 * Time: 18:01
 */

$title = $_POST['title'];
$body = $_POST['note_text'];
$date = date("Y-m-d H:i:s");
$id = $_COOKIE['user_id'];

$link = mysqli_connect ( "localhost" , "root" , "qwerty" , "pyShop" );

$sql = mysqli_query($link, "INSERT INTO notes (user_id, note_title, note_body, creation_date) VALUES ('$id', '$title', '$body', '$date')" );
header('Location: notes.php');
mysqli_close ( $link );

