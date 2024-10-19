<!DOCTYPE html>
<html> 
<body>
<h3>8. Creating indexed array of 5 students and displaying it </h3>

<?php
$students = array ("Tina", "Kian", "Xymer","Fher","Gail");
foreach ($students as $student) {
    echo "$student <br>";
}
?>
<h3>9. Creating associative array for 3 students </h3>
<?php
$students = array ("Paul" => 89, "Anna Marie" => 78, "Vincent" => 85);
//storing information
foreach($students as $name => $grade) {
    echo "$name: $grade: <br>";
}
?>
<h3>10. Creating Multidimensional array </h3>

<?php
// Creating a multidimensional array to store information about 2 books
$books = array(
    array(
        "title" => "Atomic Habits",
        "author" => "James Clear",
        "year_published" => 2018
    ),
    array(
        "title" => "The Power of Now",
        "author" => "Eckhart Tolle",
        "year_published" => 1997
    )
);

// displaying information using foreach loop
foreach ($books as $book) {
    echo "Book Title: " . $book['title'] . "<br>";
    echo "Author: " . $book['author'] . "<br>";
    echo "Year Published: " . $book['year_published'] . "<br><br>";
}
?>
</body>
</html>