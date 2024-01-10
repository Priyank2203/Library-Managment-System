<?php
include_once 'navbar.php';
include_once 'dbconn.php';

$id = $_GET['id'];

$sql = "SELECT * FROM books Where book_id='$id';";

$res = $dbc->query($sql);
$books = mysqli_fetch_all($res);

?>

<center>
    <div class="container mybg">
        <div class="card" style="width: 18rem;">
            <img src="<?php echo $books[0][7]; ?> " class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $books[0][1]; ?></h5>
                <p class="card-text"><?php echo $books[0][6]; ?></p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Author : <?php echo $books[0][2]; ?> </li>
                <li class="list-group-item">Publish date : <?php echo $books[0][3]; ?></li>
                <li class="list-group-item">Rate : <?php echo $books[0][4]; ?>%</li>
                <li class="list-group-item">Category : <?php echo $books[0][5]; ?></li>

            </ul>
            <div class="card-body">
                <a href="#" class="card-link">buy book</a>
                <a href="#" class="card-link">borrow book</a>
            </div>
        </div>
    </div>