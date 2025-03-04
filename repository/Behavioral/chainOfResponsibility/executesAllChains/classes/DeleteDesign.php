<?php

namespace chainOfResponsibility\executesAllChains\classes;

require_once 'AbstractDeleteChain.php';

class DeleteDesign extends AbstractDeleteChain
{
    private $forbiddenDesign = ['!', ',', '.', '?'];

    protected function delete($message): ?string
    {
        return str_replace($this->forbiddenDesign, "", $message);
    }

}