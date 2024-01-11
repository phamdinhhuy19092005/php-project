<?php 
$post_title = 'Huy chơi bóng';
$post_contnet = "anh ta  chơi bóng hay vãi đái";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>truyền dữ liệu html</title>
</head>

</body>
<div id="content">
<h1>PHP</h1>

    <h1 class="post_title">
        <?php echo $post_title ?>
    </h1>
    <div class="post_content">
            <?php echo $post_contnet ?>
    </div>
</div>
</body>
</html>