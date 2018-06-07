<?php
/**
 * Created by PhpStorm.
 * User: msi-pc
 * Date: 2018/6/5
 * Time: 16:21
 */
header("content-type:text/html;charset=utf8");
require "db.php";
$title=$_POST["title"];
$author=$_POST["author"];
$message=$_POST["message"];
$time=time();

$sql="insert into messageboard(title,author,message,c_time) values('$title','$author','$message','$time')";

if(con_pdo('test')->exec($sql)){
    echo "<script>alert('留言成功');window.location.href='show.php'</script>";
}
else {
    echo "<script>alert('留言失败');window.location.href='index.html'</script>";
}
?>
?>