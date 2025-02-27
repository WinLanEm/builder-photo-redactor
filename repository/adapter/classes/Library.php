<?php

require_once __DIR__ . '/../interfaces/NewLibraryInterface.php';
class Library implements NewLibraryInterface
{
    public function anotherMethodAddFile($pathToFile): string
    {
        return $pathToFile;
    }

    public function anotherMethodGetFile($fileCode): string
    {
        return $fileCode;
    }
}