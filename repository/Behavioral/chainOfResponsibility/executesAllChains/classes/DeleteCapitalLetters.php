<?php

namespace chainOfResponsibility\executesAllChains\classes;

require_once 'AbstractDeleteChain.php';

class DeleteCapitalLetters extends AbstractDeleteChain
{
    protected function delete($message): ?string
    {
        return strtolower($message);
    }

}