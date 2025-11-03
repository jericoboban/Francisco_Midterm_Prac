<?php
// Display library
echo "<h2>Library Categories:</h2>";
displayLibrary($library);

// Show selected book details
if (isset($_GET['book'])) {
    $title = $_GET['book'];
    echo "<h2>Book Details:</h2>";
    showBookDetails($title, $bookInfo);
}

// Search a book alphabetically via GET parameter
if (isset($_GET['search'])) {
    $searchTitle = $_GET['search'];
    echo "<h2>Search Result:</h2>";
    echo "Searching for \"$searchTitle\": " . ($bst->search($searchTitle) ? "Found!" : "Not Found.") . "<br>";
}

// Display all titles alphabetically
echo "<h2>All Books Alphabetically:</h2>";
$bst->inorderTraversal($bst->root);
?>
