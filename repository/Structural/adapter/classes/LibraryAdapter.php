<?php

namespace adapter\classes;

use adapter\interfaces\LibraryInterface;

require_once 'Library.php';
require_once __DIR__ . '/../interfaces/LibraryInterface.php';

class LibraryAdapter implements LibraryInterface
{
    private $adapterObject;

    public function __construct()
    {
        $this->adapterObject = new Library();
    }

    public function addFile($pathToFile): string
    {
        return $this->adapterObject->anotherMethodAddFile($pathToFile);
    }

    public function getFile($fileCode): string
    {
        return $this->adapterObject->anotherMethodGetFile($fileCode);
    }

    //__call уже не адаптер, но решил добавить чтобы получить доступ к остальным методам
    public function __call(string $name, array $arguments)
    {
        if (method_exists($this->adapterObject, $name)) {
            return call_user_func_array([$this->adapterObject, $name], $arguments);
        } else {
            throw new Exception("Метод {$name} не найден");
        }
    }
}