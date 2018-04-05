<?php
include_once "./db/db.php";
$id=$_POST["id"];
$password=$_POST["password"];
$name=$_POST["name"];
$home=$_POST["home"];
$git_url=$_POST["git_url"];
$sql="insert into git (id,password,name,home,git_url) VALUES ('$id','$password','$name','$home','$git_url')";
$stm=$pdo->prepare($sql);
$stm->execute();
echo "<script>location.href='git_list.php'</script>";
?>