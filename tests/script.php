<?php

require_once __DIR__ . '/../autoload.php';
require_once __DIR__ . '/../functions.php';

$data = \App\Models\Article::findAll();
dd($data);

//$data = \App\Models\User::findById(1);

/*$db = new \App\Db();
$data = $db->query("SELECT * FROM news", [], \App\Models\Article::class);*/


/*$article = new \App\Models\Article();
$article->title = 'Заголовок';
$article->content = 'Контент';
$article->insert();*/