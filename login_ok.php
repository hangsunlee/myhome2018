<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018-04-05
 * Time: 오후 3:23
 */

include_once "./db/db.php";
$id=$_POST['id'];
$password=$_POST['password'];
$sql="select * from git WHERE id='$id' AND password='$password'";
echo $sql;
$stmt=$pdo->prepare($sql);
$stmt->execute();
$rows=$stmt->rowCount();
if($rows===0){

echo "<script> alert ('아이디와 비밀번호를 확인하세요');
                 location.href='./index.php'</script>";
}else{
 echo "<script>
 alert('로그인하였습니다.');
location.href='./index.php'</script>";
}
?>