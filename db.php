<?php
/**
 * Created by PhpStorm.
 * User: msi-pc
 * Date: 2018/6/7
 * Time: 20:16
 */
function con_pdo($db_name)
{
    $pdo = new \PDO("mysql:host=127.0.0.1;dbname=".$db_name.";",'root','root');
    return $pdo;
}