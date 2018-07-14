<?php
/**
 * Created by PhpStorm.
 * User: Daria
 * Date: 14.07.2018
 * Time: 16:28
 */

require_once 'allNotes.php';
$id = $_COOKIE['user_id'];

switch ( $_POST['action'] )
{
    case 'asc':
        showAllNotes($id);
        break;
    case 'desc':
        sortedNotes($id);
        break;

}

