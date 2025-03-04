<?php

//В реальном ларавел проекте зачастую это будут обьекты из бд (но не факт)
namespace bridge\objects;
class Category
{
    public $id = 100;
    public $title = "CategoryTitle";
    public $description = 'CategoryDescription';
}