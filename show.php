<?php
/**
 * Created by PhpStorm.
 * User: msi-pc
 * Date: 2018/6/5
 * Time: 16:43
 */
header("content-type:text/html;charset=utf8");
require "db.php";

$sql="select * from messageboard";

$arr = con_pdo('test')->query($sql)->fetchAll();
foreach ($arr as $key => $value) {
    $data[$key]['title'] = $arr[$key]['title'];
    $data[$key]['author'] = $arr[$key]['author'];
    $data[$key]['message'] = $arr[$key]['message'];
    $data[$key]['c_time'] = $arr[$key]['c_time'];
}

?>
<!DOCTYPE HTML>
<HTML>
<Head>
    <meta  http-equiv="CONTENT-TYPE" ; content="text/html"  ; charset="UTF-8">
    <title>留言板</title>
</Head>
<Body>
<div>
    <?php foreach($data as $value) {?>
    <table align="center" border="1px,solid">

        <tr>
            <td>标题</td>
            <td><?php echo $value['title']; ?></td>
        </tr>
        <tr>
            <td>作者</td>
            <td><?php echo $value['author']; ?></td>
        </tr>
        <tr>
            <td>内容</td>
            <td><?php echo $value['message']; ?></td>
        </tr>
        <tr>
            <td>时间</td>
            <td><?php echo @date('Y-m-d H:i:s',$value['c_time']);?></td>
        </tr>
    </table>
</div>
<?php } ?>
</Body>
</HTML>