<?php
require 'db.php';
$stmt=$c->query("SELECT id,username,photo FROM profiles ORDER BY id ASC LIMIT 1");
$row=$stmt->fetch(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Upload File</title>
<style>
body{font-family:Arial;background:#eef0f4;padding:30px}
.box{max-width:450px;margin:auto;background:white;padding:22px;border-radius:12px;box-shadow:0 4px 16px rgba(0,0,0,.1)}
input[type=file]{padding:10px;margin-top:10px}
.btn{margin-top:15px;padding:10px 16px;border:none;background:#2563eb;color:white;border-radius:8px;cursor:pointer}
.pic{margin-top:15px}
img{max-width:150px;border-radius:8px}
</style>
</head>
<body>
<div class="box">
<form action="upload_process.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?=htmlspecialchars($row['id'])?>">
<input type="file" name="photo" required>
<button class="btn" type="submit">Upload</button>
</form>
<div class="pic">
<?php if($row['photo']): ?>
<img src="uploads/<?=htmlspecialchars($row['photo'])?>">
<?php endif; ?>
</div>
</div>
</body>
</html>
