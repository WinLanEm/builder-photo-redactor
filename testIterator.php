<?php

use iterator\classes\TreeCollection;
use iterator\classes\TreeNode;

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET");
require_once __DIR__ . '/repository/Behavioral/iterator/classes/TreeNode.php';
require_once __DIR__ . '/repository/Behavioral/iterator/classes/TreeCollection.php';

$root = new TreeNode("Root");
$node1 = new TreeNode('Node 1');
$node2 = new TreeNode('Node 2');
$node3 = new TreeNode('Node 3');
$leaf1 = new TreeNode("Leaf 1");
$leaf2 = new TreeNode("Leaf 2");
$leaf3 = new TreeNode("Leaf 3");

$root->addChild($node1);
$root->addChild($node2);
$node1->addChild($leaf1);
$node1->addChild($leaf2);
$node2->addChild($node3);
$node3->addChild($leaf3);

$collection = new TreeCollection($root);

// Обход всего дерева
echo "Обход всего дерева:\n";
foreach ($collection as $node) {
    echo $node->getValue() . "\n";
}

// Обход только листьев
echo "\nОбход только листьев:\n";
foreach ($collection->getLeafIterator() as $node) {
    echo $node->getValue() . "\n";
}

// Обход снизу вверх
echo "\nОбход снизу вверх:\n";
foreach ($collection->getBottomUpIterator() as $node) {
    echo $node->getValue() . "\n";
}
//Коллекцию можно составлять по разному, можно компоновщиком, можно и так