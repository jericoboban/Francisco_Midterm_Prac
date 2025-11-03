<?php
// --- Define library array ---
$library = [
    "Fiction" => [
        "Fantasy" => ["Harry Potter", "The Hobbit"],
        "Mystery" => ["Sherlock Holmes", "Gone Girl"]
    ],
    "Non-Fiction" => [
        "Science" => ["A Brief History of Time", "The Selfish Gene"],
        "Biography" => ["Steve Jobs", "Becoming"]
    ]
];

// --- Recursive function to display library ---
function displayLibrary($library, $indent = 0) {
    foreach ($library as $key => $value) {
        if (is_array($value)) {
            echo str_repeat("&nbsp;", $indent*4) . "<strong>$key</strong><br>";
            displayLibrary($value, $indent + 1);
        } else {
            echo str_repeat("&nbsp;", $indent*4) . $value . "<br>";
        }
    }
}

// --- Define book info array ---
$bookInfo = [
    "Harry Potter" => ["author"=>"J.K. Rowling","year"=>1997,"genre"=>"Fantasy"],
    "The Hobbit" => ["author"=>"J.R.R. Tolkien","year"=>1937,"genre"=>"Fantasy"],
    "Sherlock Holmes" => ["author"=>"Arthur Conan Doyle","year"=>1892,"genre"=>"Mystery"],
    "Gone Girl" => ["author"=>"Gillian Flynn","year"=>2012,"genre"=>"Mystery"],
    "A Brief History of Time" => ["author"=>"Stephen Hawking","year"=>1988,"genre"=>"Science"],
    "Becoming" => ["author"=>"Michelle Obama","year"=>2018,"genre"=>"Biography"]
];

// --- Function to show book details ---
function showBookDetails($title, $bookInfo) {
    if(isset($bookInfo[$title])){
        echo "Title: $title<br>";
        echo "Author: ".$bookInfo[$title]['author']."<br>";
        echo "Year: ".$bookInfo[$title]['year']."<br>";
        echo "Genre: ".$bookInfo[$title]['genre']."<br>";
    } else {
        echo "Book not found.<br>";
    }
}

// --- Define Binary Search Tree classes ---
class Node {
    public $data; public $left; public $right;
    public function __construct($data){ $this->data=$data; $this->left=null; $this->right=null; }
}

class BinarySearchTree {
    public $root;
    public function __construct(){ $this->root=null; }

    public function insert($data){
        $newNode = new Node($data);
        if($this->root===null) $this->root=$newNode;
        else $this->insertNode($this->root,$newNode);
    }

    private function insertNode($node,$newNode){
        if(strcasecmp($newNode->data,$node->data)<0){
            if($node->left===null) $node->left=$newNode;
            else $this->insertNode($node->left,$newNode);
        } else {
            if($node->right===null) $node->right=$newNode;
            else $this->insertNode($node->right,$newNode);
        }
    }

    public function search($data){ return $this->searchNode($this->root,$data); }

    private function searchNode($node,$data){
        if($node===null) return false;
        if(strcasecmp($data,$node->data)===0) return true;
        elseif(strcasecmp($data,$node->data)<0) return $this->searchNode($node->left,$data);
        else return $this->searchNode($node->right,$data);
    }

    public function inorderTraversal($node){
        if($node!==null){
            $this->inorderTraversal($node->left);
            echo $node->data."<br>";
            $this->inorderTraversal($node->right);
        }
    }
}

// --- Create BST and insert books ---
$bst = new BinarySearchTree();
foreach(array_keys($bookInfo) as $book) $bst->insert($book);

// --- Your original code ---
echo "<h2>Library Categories:</h2>";
displayLibrary($library);

if (isset($_GET['book'])) {
    $title = $_GET['book'];
    echo "<h2>Book Details:</h2>";
    showBookDetails($title, $bookInfo);
}

if (isset($_GET['search'])) {
    $searchTitle = $_GET['search'];
    echo "<h2>Search Result:</h2>";
    echo "Searching for \"$searchTitle\": " . ($bst->search($searchTitle) ? "Found!" : "Not Found.") . "<br>";
}

echo "<h2>All Books Alphabetically:</h2>";
$bst->inorderTraversal($bst->root);
?>
