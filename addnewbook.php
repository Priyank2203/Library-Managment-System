 <?php
    include_once 'navbar.php';
    include_once 'dbconn.php';


    session_start();

    // var_dump($_SESSION);
    // var_dump($_COOKIE);

    if (isset($_SESSION['loggedin'])) {

    ?>

     <head>

         <style>
             .display_table {
                 width: 100vw;
                 height: 100vh;
                 display: flex;
                 flex-direction: column;
                 justify-content: center;
                 text-align: center;
             }

             .center_div {
                 width: 90vw;
                 height: 80vh;
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
     <div class="container mybg">
         <center class=>
             <h2>Enter New Book Details</h2>
         </center>
         <!--Once the form is submitted, all the form data is forwarded to InsertBooks.php -->
         <form action="InsertBooks.php" method="post">

             <table border="2" align="center" cellpadding="5" cellspacing="5">
                 <tr>
                     <td> Enter ID :</td>
                     <td> <input type="text" name="id" size="48"> </td>
                 </tr>
                 <tr>
                     <td> Enter Title :</td>
                     <td> <input type="text" name="title" size="48"> </td>
                 </tr>
                 <tr>
                     <td> Enter Author :</td>
                     <td> <input type="text" name="author" size="48"> </td>
                 </tr>
                 <tr>
                     <td> Enter Publishdate :</td>
                     <td> <input placeholder=" like :2030-01-01 02:54:00" type="text" name="date" size="48"> </td>
                 </tr>
                 <tr>
                     <td> Enter Rate: </td>
                     <td> <input type="text" name="rate" size="48"> </td>
                 </tr>
                 <tr>
                     <td> Enter category: </td>
                     <td> <input type="text" name="category" size="48"> </td>
                 </tr>
                 <tr>
                     <td> Enter Book descreption: </td>
                     <td> <input type="text" name="descreption" size="48"> </td>
                 </tr>
                 <tr>
                     <td> Enter Book URL: </td>
                     <td> <input type="text" name="URL" size="48"> </td>
                 </tr>
                 <tr>

                     <td colspan="2">
                         <input class="btn btn-outline-primary" type="submit" value="ADD Book" name="newbook">
                         <input class="btn btn-outline-danger" type="reset" value="Reset">
                     </td>
                 </tr>
             </table>
         </form>
     </div>
 <?php


    } else {
        header('Location: login.php');
        //This is not the first page to viwe today
        //Checks if the user has the correct role to access this page
    }
