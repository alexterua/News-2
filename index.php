<?php

require_once __DIR__ . '/autoload.php';
require_once __DIR__ . '/functions.php';

$view = new \App\View();

$news =  \App\Models\Article::showLastThree();

$view->assign('news', $news);
echo $view->render('index.view.php');