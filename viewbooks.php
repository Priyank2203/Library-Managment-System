<?php
include_once 'navbar.php';
include_once 'dbconn.php';

$sql = 'SELECT * FROM books;';

$res = $dbc->query($sql);
$books = mysqli_fetch_all($res);
?>

<html>

<head>

    <style>
        .display_table {
            width: 100vw;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
        }

        .center_div {
            width: 90vw;
            height: 100%;
            background-image: url('images/2.jpg');
            background-repeat: no-repeat;
            background-size: 100%;
            padding: 20px 0 0 0;
            box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.03);
            border-radius: 10px;
            margin-left: 30px;
        }



        table {
            border-collapse: collapse;
            background-color: black;
            box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.03);
            border-radius: 10px;
            border-collapse: collapse;
            table-layout: fixed;
            opacity: 0.7;
            color: #F7CC1A;
            font-weight: bold;
            margin: auto;
        }

        th,
        td {
            border: 1px solid #f2f2f2;
            padding: 8px 30px;
            text-align: center;
            opacity: 0.9;
            color: #b0f3f1c4;
        }

        th {
            text-transform: uppercase;
            font-weight: 500;
            color: #ffcfdfc4;
        }

        td {
            font-size: 13px;
        }
    </style>
</head>

<body>


    <div class="container">
        <div class="main_div mybg">

            <div class="display_table">
                <h1>Our books </h1>
                <div class="center_div">
                    <div class="table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th>Book_id</th>
                                    <th>Title</th>
                                    <th>Author</th>


                                    <th>view book</th>


                                </tr>
                            </thead>
                            <tbody>
                    </div>
                    <?php
                    include 'dbconn.php';

                    $numofrows = mysqli_num_rows($res);

                    for ($i = 0; $i < $numofrows; $i++) {
                    ?>
                        <tr>
                            <td><?php echo $books[$i][0]; ?></td>
                            <td><?php echo $books[$i][1]; ?></td>
                            <td><?php echo $books[$i][2]; ?></td>


                            <td><a href="viewsinglebook.php?id=<?php echo $books[$i][0]; ?>">view</a></td>

                        </tr>
                    <?php
                    }
                    ?>


                    </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>

</body>

</html>