<?php
include('connection.php');
            $User_id=$_GET['id'];
            $query="DELETE FROM `User` WHERE User_id='$User_id'";
            $data=mysqli_query($con,$query);
            if($data){
echo"
<script>
            alert('Deleted Successfully');
                    window.open('profile.php','_self');
                    </script>";
                    ?>
                    <?php
        } else {
          
        echo"  <script>
            alert('Not Deleted');
                    window.open('profile.php','_self');

</script>";

}
 ?>
