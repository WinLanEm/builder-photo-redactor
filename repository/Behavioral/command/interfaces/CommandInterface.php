<?php

namespace command\interfaces;
interface CommandInterface
{
    public function execute(): void;

    public function undo(): void;
}