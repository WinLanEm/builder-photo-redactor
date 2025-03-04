<?php

namespace iterator\classes;
class TreeNode
{
    private $value;
    private $childeren = [];

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function addChild(TreeNode $child): void
    {
        $this->childeren[] = $child;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function getChildren(): array
    {
        return $this->childeren;
    }
}