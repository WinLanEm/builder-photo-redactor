<?php
// не является частью паттерна, сделано для демонстрации работы предыдущей версии
require_once __DIR__ . '/../interfaces/LibraryInterface.php';
class LibraryOutdated implements LibraryInterface
{
    public function addFile($pathToFile): string
    {
        return $pathToFile . " outdated";
    }

    public function getFile($fileCode): string
    {
        return $fileCode . " outdated";
    }

}