<?php
/**
 * Created by PhpStorm.
 * User: Daria
 * Date: 14.07.2018
 * Time: 16:23
 */

function showAllNotes($id){
    $link = mysqli_connect ( "localhost" , "root" , "qwerty" , "pyShop" );

    $res = mysqli_query($link, "SELECT note_title, note_body, creation_date FROM notes WHERE user_id = '$id' ORDER BY `notes`.`creation_date` ASC ;" );
    $row = mysqli_fetch_all($res, MYSQLI_ASSOC);


    foreach ($row as $key => $notesItem) {
        //             var_dump($notesItem);
        $creationTime = $notesItem['creation_date'];
        //             var_dump($creationTime);
        $datetime1 = strtotime($creationTime);
        $datetime2 = strtotime(date("Y-m-d H:i:s"));

        $secs = $datetime2 - $datetime1;
        $mins = floor($secs / 60);
        $hours = floor($mins / 60);
        $days = floor($secs / 86400);
        $month = floor($days / 30);

        $resultTime = $secs;
        $string='';
        //             1 21 секунду 2 22 3 23 4  секунды 5 6 7 8 9 10 11 ... 20 секунд
        if($resultTime > 1 && $resultTime < 5){
            $string = 'секунды';
        }elseif ($resultTime == 1) {
            $string = 'секунду';
        } else {
            $string = 'секунд';
        }
        if($resultTime>=2592000){
            $resultTime = $month;

            if($resultTime > 1 && $resultTime < 5){
                $string = 'месяца';
            }elseif ($resultTime == 1) {
                $string = 'месяц';
            } else {
                $string = 'месяцев';
            }

        }elseif ($resultTime>=86400 && $resultTime<2592000)  {
            $resultTime = $days;


            if($resultTime > 1 && $resultTime < 5){
                $string = 'дня';
            }elseif ($resultTime == 1) {
                $string = 'день';
            } else {
                $string = 'дней';
            }

        }elseif ($resultTime>= 3600 && $resultTime < 86400){
            $resultTime = $hours;

            if($resultTime > 1 && $resultTime < 5){
                $string = 'часа';
            }elseif ($resultTime == 1) {
                $string = 'час';
            } else {
                $string = 'часов';
            }

        }elseif ($resultTime>=60 && $resultTime<3600) {
            $resultTime = $mins;

            if($resultTime> 1 && $resultTime < 5){
                $string = 'минуты';
            }elseif ($resultTime == 1) {
                $string = 'минуту';
            } else {
                $string = 'минут';
            }
        } ;



        $result = " <section class='note'> 
                                
                                <h2>".$notesItem["note_title"]."</h2>
                                <span class='creationTime'>".$notesItem["creation_date"]."</span>
                                <p>".$notesItem["note_body"]."</p>
                                <span>Создана: ".$resultTime." ".$string." назад</span>
                             </section>
                        ";
        echo $result;
    }
}

function sortedNotes($id){
    $link = mysqli_connect ( "localhost" , "root" , "qwerty" , "pyShop" );

    $res = mysqli_query($link, "SELECT note_title, note_body, creation_date FROM notes WHERE user_id = '$id' ORDER BY `notes`.`creation_date` DESC ;" );
    $row = mysqli_fetch_all($res, MYSQLI_ASSOC);


    foreach ($row as $key => $notesItem) {
        //             var_dump($notesItem);
        $creationTime = $notesItem['creation_date'];
        //             var_dump($creationTime);
        $datetime1 = strtotime($creationTime);
        $datetime2 = strtotime(date("Y-m-d H:i:s"));

        $secs = $datetime2 - $datetime1;
        $mins = floor($secs / 60);
        $hours = floor($mins / 60);
        $days = floor($secs / 86400);
        $month = floor($days / 30);

        $resultTime = $secs;
        $string='';
        //             1 21 секунду 2 22 3 23 4  секунды 5 6 7 8 9 10 11 ... 20 секунд
        if($resultTime > 1 && $resultTime < 5){
            $string = 'секунды';
        }elseif ($resultTime == 1) {
            $string = 'секунду';
        } else {
            $string = 'секунд';
        }
        if($resultTime>=2592000){
            $resultTime = $month;

            if($resultTime > 1 && $resultTime < 5){
                $string = 'месяца';
            }elseif ($resultTime == 1) {
                $string = 'месяц';
            } else {
                $string = 'месяцев';
            }

        }elseif ($resultTime>=86400 && $resultTime<2592000)  {
            $resultTime = $days;


            if($resultTime > 1 && $resultTime < 5){
                $string = 'дня';
            }elseif ($resultTime == 1) {
                $string = 'день';
            } else {
                $string = 'дней';
            }

        }elseif ($resultTime>= 3600 && $resultTime < 86400){
            $resultTime = $hours;

            if($resultTime > 1 && $resultTime < 5){
                $string = 'часа';
            }elseif ($resultTime == 1) {
                $string = 'час';
            } else {
                $string = 'часов';
            }

        }elseif ($resultTime>=60 && $resultTime<3600) {
            $resultTime = $mins;

            if($resultTime > 1 && $resultTime < 5){
                $string = 'минуты';
            }elseif ($resultTime == 1) {
                $string = 'минуту';
            } else {
                $string = 'минут';
            }
        } ;


        $result =  " <section class='note'> 
                                    
                                    <h2>".$notesItem["note_title"]."</h2>
                                    <span class='creationTime'>".$notesItem["creation_date"]."</span>
                                    <p>".$notesItem["note_body"]."</p>
                                    <span>Создана: ".$resultTime." ".$string." назад</span>
                                 </section>
                            ";
        echo $result;
    }
}