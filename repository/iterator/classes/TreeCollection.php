<?php

require_once __DIR__ . '/TreeNode.php';
require_once __DIR__ . '/../iterators/BottomUpIterator.php';
require_once __DIR__ . '/../iterators/LeafIterator.php';
require_once __DIR__ . '/../iterators/TreeIterator.php';

class TreeCollection implements \IteratorAggregate
{
    private $root;

    public function __construct(TreeNode $root)
    {
        $this->root = $root;
    }

    public function getIterator():\Iterator
    {
        return new TreeIterator($this->root);
    }
    public function getLeafIterator():\Iterator
    {
        return new LeafIterator($this->root);
    }
    public function getBottomUpIterator():\Iterator
    {
        return new bottomUpIterator($this->root);
    }

}