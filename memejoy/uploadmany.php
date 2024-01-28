<?php?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="uploadingmany.php" method="post" enctype="multipart/form-data">
    <input type="file" name="memeFiles[]" accept="image/*" multiple required>
    <input type="text" name="memeTitle" placeholder="Title" required>
    <input type="text" name="memeCategory" placeholder="Category" required>

    <input type="submit" value="Upload">
</form>

</body>
</html>