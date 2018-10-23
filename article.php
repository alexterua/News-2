<?php

require_once __DIR__ . '/autoload.php';
require_once __DIR__ . '/functions.php';

$view = new \App\View();

$article = (array)(\App\Models\Article::findById($_GET['id']))[0];

$view->assign('article', $article);
echo $view->render('article.view.php');