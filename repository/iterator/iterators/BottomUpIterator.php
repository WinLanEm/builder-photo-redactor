<?php

require_once __DIR__ . '/../classes/TreeNode.php';

class BottomUpIterator implements \Iterator
{
    private $nodes = [];
    private $position = 0;

    public function __construct(TreeNode $root) {
        $this->buildNodes($root);
    }

    private function buildNodes(TreeNode $node): void {
        foreach ($node->getChildren() as $child) {
            $this->buildNodes($child);
        }
        $this->nodes[] = $node;
    }

    public function current(): TreeNode {
        return $this->nodes[$this->position];
    }

    public function next(): void {
        $this->position++;
    }

    public function key(): int {
        return $this->position;
    }

    public function valid(): bool {
        return isset($this->nodes[$this->position]);
    }

    public function rewind(): void {
        $this->position = 0;
    }
}