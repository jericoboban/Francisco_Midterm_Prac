<?php
// Create a hash table (associative array) for book information
$bookInfo = [
    "Harry Potter" => [
        "author" => "J.K. Rowling",
        "year" => 1997,
        "genre" => "Fantasy"
    ],
    "The Hobbit" => [
        "author" => "J.R.R. Tolkien",
        "year" => 1937,
        "genre" => "Fantasy"
    ],
];

// Function to get and display book details
function getBookInfo($title, $bookInfo) {
    if (array_key_exists($title, $bookInfo)) {
        $details = $bookInfo[$title];
        echo "Title: $title<br>";
        echo "Author: " . $details["author"] . "<br>";
        echo "Year: " . $details["year"] . "<br>";
        echo "Genre: " . $details["genre"] . "<br>";
    } else {
        echo "Book not found.<br>";
    }
}

// Example usage
getBookInfo("Harry Potter", $bookInfo);
echo "<br>";
getBookInfo("The Hobbit", $bookInfo);
echo "<br>";
getBookInfo("Unknown Book", $bookInfo);
?>
