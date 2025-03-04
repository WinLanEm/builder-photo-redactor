<?php

namespace iterator\iterators;

use iterator\classes\TreeNode;

require_once __DIR__ . '/../classes/TreeNode.php';

class LeafIterator implements \Iterator
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
        while (!empty($this->stack)) {
            $node = array_pop($this->stack);
            $children = $node->getChildren();
            if (empty($children)) {
                $this->current = $node;
                return;
            }

            for ($i = count($children) - 1; $i >= 0; $i--) {
                $this->stack[] = $children[$i];
            }
        }
        $this->current = null;
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