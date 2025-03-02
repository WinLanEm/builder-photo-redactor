<?php

require_once 'AbstractDeleteChain.php';

class DeleteNumbers extends AbstractDeleteChain
{
    private $numbers = ['1','2','5','9'];
    protected function delete($message): ?string
    {
        return str_replace($this->numbers,"",$message);
    }

}