
<!DOCTYPE html>
<html xmlns:margin-left="http://www.w3.org/1999/xhtml">
<head>



    <title></title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

</head>
<body>
<div class="tab-pane fade show" align="right" id="logout" role="tabpanel" aria-labelledby="home-tab">
    <a href="logout.php"><button type="button" style="padding:10px;  width:200px; margin-top:100%; margin-left:400%; margin:10px auto;" class="btn btn-outline-primary" name="logout" value="Log Out">Log Out</button></a>


</div>

<div class="container">
    <div class="col-lg-12">
        <br><br>
        <h1 class="text-warning text-center" > Table Data </h1>
        <br>
        <table  id="tabledata" class=" table table-striped table-hover table-bordered">

            <tr class="bg-dark text-white text-center">

                <th> Id </th>
                <th> Username </th>
                <th> Password </th>
                <th>Email Id </th>
                <th> Delete </th>



            </tr >

            <?php

            include 'connection.php';
            $q = "select * from user ";

            $query = mysqli_query($con,$q);

            while($res = mysqli_fetch_array($query)){
                ?>
                <tr class="text-center">
                    <td> <?php echo $res['User_id'];  ?> </td>
                    <td> <?php echo $res['User_name'];  ?> </td>
                    <td> <?php echo $res['Password'];  ?> </td>
                    <td> <?php echo $res['Email'];  ?> </td>
                    <td> <button class="btn-danger btn"> <a href="delete.php?id=<?php echo $res['User_id']; ?>" class="text-white"> Delete </a>  </button> </td>


                </tr>

                <?php
            }
            ?>

        </table>

    </div>

<script type="text/javascript">

    $(document).ready(function(){
        $('#tabledata').DataTable();
    })

</script>

</body>
</html>