<?php
// Define the Node class
class Node {
    public $data;
    public $left;
    public $right;

    public function __construct($data) {
        $this->data = $data;
        $this->left = null;
        $this->right = null;
    }
}

// Define the Binary Search Tree class
class BinarySearchTree {
    public $root;

    public function __construct() {
        $this->root = null;
    }

    // Insert a new node into the BST
    public function insert($data) {
        $newNode = new Node($data);

        if ($this->root === null) {
            $this->root = $newNode;
        } else {
            $this->insertNode($this->root, $newNode);
        }
    }

    // Search for a book title in the BST
    public function search($data) {
        return $this->searchNode($this->root, $data);
    }

    // Inorder traversal (alphabetical order)
    public function inorderTraversal($node) {
        if ($node !== null) {
            $this->inorderTraversal($node->left);
            echo $node->data . "<br>";
            $this->inorderTraversal($node->right);
        }
    }
}

// --- Example Usage ---

$bst = new BinarySearchTree();

// Insert book titles
$books = [
    "Harry Potter",
    "The Hobbit",
    "Sherlock Holmes",
    "Gone Girl",
    "A Brief History of Time",
    "Becoming"
];

foreach ($books as $book) {
    $bst->insert($book);
}

// Display books alphabetically
echo "<strong>Inorder Traversal (Alphabetical):</strong><br>";
$bst->inorderTraversal($bst->root);
echo "<br>";

// Search for specific titles
$search1 = "The Hobbit";
$search2 = "Inferno";

echo "Searching for \"$search1\": " . ($bst->search($search1) ? "Found!" : "Not Found.") . "<br>";
echo "Searching for \"$search2\": " . ($bst->search($search2) ? "Found!" : "Not Found.") . "<br>";
?>
