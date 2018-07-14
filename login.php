<?php
/**
 * Created by PhpStorm.
 * User: Daria
 * Date: 13.07.2018
 * Time: 17:22
 */

    $login = $_POST['login'];
    $password = md5($_POST['password']);


    function login($login, $password)
    {

        $link = mysqli_connect("localhost", "root", "qwerty", "pyShop");
        $sql = mysqli_query($link, "SELECT * FROM users WHERE user_login = '$login' AND user_pass = '$password';");
        $row = mysqli_fetch_all($sql, MYSQLI_ASSOC);
        mysqli_close($link);
        if (empty($row)) {

            echo "Введены неверные данные!";
        } else {
            foreach ($row as $key => $user) {
                setcookie('user_id', $user['id']);
                header("Location: notes.php");
            }


        }

    }

    login($login, $password);

