<?php

require_once 'AbstractDeleteChain.php';

class DeleteCapitalLetters extends AbstractDeleteChain
{
    protected function delete($message): ?string
    {
        return strtolower($message);
    }

}