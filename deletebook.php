<?php
include_once 'navbar.php';
include_once 'dbconn.php';
$id = $_GET['id'];

if ($_POST['delete'] = "Delete") {
    $query = "DELETE FROM books WHERE book_id=$id ;";
    $result = mysqli_query($dbc, $query);
}
?>
<div class="container mybg">
    <center>
        <h3> Book information is Deleted from database successfully </h3>

        <a href="editbook.php"> To edit or delete book </a>
    </center>
</div>