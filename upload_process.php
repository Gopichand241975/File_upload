<?php
require 'db.php';
$id=isset($_POST['id'])?(int)$_POST['id']:0;
if(!isset($_FILES['photo'])||$id<=0) exit('ERR');

$f=$_FILES['photo'];
$nm=$f['name'];
$tmp=$f['tmp_name'];
$sz=$f['size'];

$ext=strtolower(pathinfo($nm,PATHINFO_EXTENSION));
$allowed=['jpg','jpeg','png','gif'];

if(!in_array($ext,$allowed)) exit('TYPE_ERR');
if($sz>2*1024*1024) exit('SIZE_ERR');

$new=uniqid().".".$ext;
$dir="uploads/".$new;
move_uploaded_file($tmp,$dir);

$u=$c->prepare("UPDATE profiles SET photo=? WHERE id=?");
$u->execute([$new,$id]);

header("Location: upload_form.php");
exit;
