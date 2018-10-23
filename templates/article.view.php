<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $article['title']; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h2 class="h2 mb-4 pt-4" style="text-align: center;"><?php echo $article['title']; ?></h2>
    <div class="row col-md-8 mb-2 offset-2">
        <p><?php echo $article['content']; ?></p>
    </div>
    <div class="row col-md-8 offset-2">
        <a href="/" class="btn btn-primary">Назад</a>
    </div>
</div>
</body>
</html>