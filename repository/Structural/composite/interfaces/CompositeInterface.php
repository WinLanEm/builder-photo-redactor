<?php

namespace composite\interfaces;

interface CompositeInterface extends CompositeItemInterface
{
    public function setChildItem(CompositeItemInterface $item);
}