<?php
include_once 'navbar.php';
include_once 'dbconn.php';
// var_dump($_POST['username']);

if (isset($_POST['login'])) {

    $userName = $_POST['username'];
    $password = $_POST['password'];

    if ($userName != "" && $password != "") {
        $sql = "SELECT user_name FROM admins WHERE user_name = '{$userName}' AND user_password ='{$password}' ";
        $checkUserId = mysqli_query($dbc, $sql) or die('error');
        var_dump($checkUserId);
        if (mysqli_num_rows($checkUserId) > 0) {
            session_start();
            $_SESSION["loggedin"] = $userName;
            header("location: addnewbook.php");
            exit();
        } else {
?>
            <script>
                alert('UserName & password not matched!');
                window.history.back();
            </script>
        <?php
        }
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
<style>
    a {
        text-decoration: none;
    }

    #container {
        margin: 0px auto;
        max-width: 400px;
        padding: 20px;
    }

    .form-wrap {
        padding: 5px 25px;
        color: #333;
    }

    .form-wrap h1,
    .form-wrap p {
        text-align: center;
    }

    .form-wrap .form-group {
        margin-top: 15px;
    }

    .form-wrap .form-group label {
        display: block;
        color: #000000;
    }

    .form-wrap .form-group input {
        width: 100%;
        padding: 5px;
        border: #ddd 1px solid;
        border-radius: 5px;
    }

    .form-wrap .btn {
        display: block;
        width: 100%;
        padding: 10px;
        margin-top: 20px;
        background: #111111;
        color: #fff;
        cursor: pointer;
    }

    .form-wrap .btn:hover {
        background: #ffcfdfc4;
    }

    .form-wrap .bottom-text {
        font-size: 13px;
        margin-top: 20px;
    }
</style>

<div class="container mybg">
    <div id="container">
        <div class="form-wrap" id="bg">
            <h1>Admin login </h1>

            <form method="POST" action="login.php">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" />
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" />
                </div>


                <input type="submit" class="btn" name="login" value="login"></input>
                <p class="bottom-text">
                    please don't try to login if you ara not an admin
                    <a href="#">bye</a>
                </p>
            </form>
        </div>
    </div>
</div>

</body>