<?php
// Define the library structure
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

// Recursive function to display the library
function displayLibrary($library, $indent = 0) {
    foreach ($library as $key => $value) {
        // Print indentation
        echo str_repeat("&nbsp;&nbsp;&nbsp;", $indent);

        // If the value is an array, it's a category
        if (is_array($value)) {
            echo "<strong>$key</strong><br>";
            // Recurse deeper into the structure
            displayLibrary($value, $indent + 1);
        } else {
            // Otherwise, it's a book title
            echo "$value<br>";
        }
    }
}

// Display the library
displayLibrary($library);
?>
