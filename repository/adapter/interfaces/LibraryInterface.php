<?php

interface LibraryInterface
{
    public function addFile($pathToFile):string;
    public function getFile($fileCode):string;
}
//Условный интерфейс библиотеки используемой ранее