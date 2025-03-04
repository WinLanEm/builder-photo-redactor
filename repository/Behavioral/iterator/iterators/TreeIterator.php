<?php

namespace iterator\iterators;

use iterator\classes\TreeNode;

require_once __DIR__ . '/../classes/TreeNode.php';

class TreeIterator implements \Iterator
{
    private $stack = [];
    private $current;

    public function __construct(TreeNode $root)
    {
        $this->stack[] = $root;
    }

    public function current(): TreeNode
    {
        return $this->current;
    }

    public function next(): void
    {
        if (empty($this->stack)) {
            $this->current = null;
            return;
        }
        $this->current = array_pop($this->stack);
        $children = $this->current->getChildren();

        for ($i = count($children) - 1; $i >= 0; $i--) {
            $this->stack[] = $children[$i];
        }
    }

    public function key(): int
    {
        return 0;
    }

    public function valid(): bool
    {
        return $this->current !== null;
    }

    public function rewind(): void
    {
        $this->stack = [$this->stack[0]];
        $this->next();
    }


}