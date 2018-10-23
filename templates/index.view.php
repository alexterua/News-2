<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Новости</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1 class="h1 mb-2" style="text-align: center;">Новости</h1>
    <div class="row col-md-12 mb-2">
        <ul class="list-group">
            <?php foreach ($news as $article): ?>
                <li class="list-group-item pb-2">
                    <a href="/article.php?id=<?php echo $article['id']; ?>"><?php echo $article['title']; ?></a>
                    <p><?php echo $article['content']; ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
</body>
</html>