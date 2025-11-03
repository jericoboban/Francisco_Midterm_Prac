 1. Recursive Genre Display
Displays a nested associative array of movie genres and titles using a **recursive function**.

📂 Data Structure
php
$movies = [
    "Action" => ["Havoc", "John Wick"],
    "Superhero" => ["Iron Man", "Spider-Man: No Way Home"],
    "Adventure" => ["Jurassic Park", "Pirates of the Caribbean"]
    ],
    "Drama" => ["Night Always Comes", "Dead Poets Society"],
    "Crime" => ["The Godfather", "The Irishman"],
    "Romance" => ["Titanic", "The Notebook"]
    ]
];

🗃️ 2. Hash Table Data Retrieval
Uses a PHP associative array to act as a hash table for quick movie data lookup.

php
📂 Data Structure
$movieDatabase = [
    "Iron Man" => ["Director" => "Jon Favreau", "Released" => 2008, "Genre" => "Superhero Action"],
    "The Godfather" => ["Director" => "Francis Ford Coppola", "Released" => 1972, "Genre" => "Crime Drama"],
    "Titanic" => ["Director" => "James Cameron", "Released" => 1997, "Genre" => "Romantic Drama"]
];


🌳 3. Binary Search Tree (BST) Operations
Implements a binary search tree to store movie titles alphabetically and allows searching through the dataset.

📂 Classes
Node
Represents a single tree node with:
$data
$left
$right

BinarySearchTree
Supports:
Insertion
In-order traversal (alphabetical output)
Search

⚙️ Usage Example
$bst = new BinarySearchTree();
$movieTitles = ["Iron Man", "Jurassic Park", "Pirates of the Caribbean", "Spider-Man: No Way Home", "The Godfather", "The Irishman", "The Notebook", "Titanic"];

foreach ($movieTitles as $title) {
    $bst->insert($title);
}
$bst->inorderTraversal($bst->root);








