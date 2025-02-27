<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET");
require_once __DIR__ . "/repository/adapter/classes/LibraryAdapter.php";
require_once __DIR__ . "/repository/adapter/classes/LibraryOutdated.php";
//можно сделать еще метод пост для добавления, но я оствлю так
$version = isset($_GET['version'])?$_GET['version']:"";
if($version === 'current'){
    $library = new LibraryAdapter();
}else{
    $library = new LibraryOutdated();
}
echo $library->getFile('123');
//адаптер
//в ларавел есть другая реализация, там можно создавать обьекты от интерфейсов,а не делать как тут