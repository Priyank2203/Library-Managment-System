<?php
include_once 'dbconn.php';
include_once 'navbar.php';

$id = $_POST["id"];
$title = $_POST["title"];
$author = $_POST["author"];
$date = $_POST["date"];
$rate = $_POST["rate"];
$category = $_POST["category"];
$descreption = $_POST["descreption"];
$URL = $_POST["URL"];






if ($author != "" && $title != "") {

    $query = " UPDATE `books`
        SET
        
        `title` = '$title',
        `author` = '$author',
        `publish_date` = '$date',
        `rate` ='$rate',
        `category` = '$category',
        `book_desc` = '$descreption',
        `book_url` ='$URL'
        WHERE `book_id` =$id;";
    $result = mysqli_query($dbc, $query);
}
?>
<center class="mybg">
    <h3> Book information is Edited in database successfully </h3>

    <a href="editbook.php"> To edit or delete book </a>
</center>
</div>