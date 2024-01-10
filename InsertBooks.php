<?php
include_once 'navbar.php';
include("dbconn.php");
// var_dump($_POST['newbook']);
if (isset($_POST['newbook'])) {
    $id = $_POST["id"];
    $title = $_POST["title"];
    $author = $_POST["author"];
    $date = $_POST["date"];
    $rate = $_POST["rate"];
    $category = $_POST["category"];
    $descreption = $_POST["descreption"];
    $URL = $_POST["URL"];


    if ($author != "" && $title != "") {
        $query = "insert into books(book_id,title,author,publish_date,rate,category,book_desc,book_url) 
        values('$id','$title','$author','$date','$rate','$category','$descreption','$URL')";
        $result = mysqli_query($dbc, $query);
    } else {
?>
        <script>
            alert('Fill all the details');
            window.history.back();
        </script>
<?php
    }
}
?>
<div class="container mybg">
    <center>
        <h3> Book information is Added successfully </h3>

        <a href="editbook.php"> To edit or delete book </a>
    </center>
</div>