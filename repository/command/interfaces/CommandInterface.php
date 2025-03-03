<?php

interface CommandInterface
{
    public function execute():void;
    public function undo():void;
}