
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<center>

    <?php
    include ("config.php");
    ?>


    <?php
    //------------------delete xristi----------------------------
    if ((isset($_GET['AdminID'])) ) {

        $AdminID = $_GET['AdminID'];
        mysqli_autocommit($link, false);
         $sql = "delete FROM admin
									WHERE
						AdminID = '$AdminID'";
        $result = mysqli_query($link, $sql) or die(header("Location: error.php?msg=dat_er"));
        if ($result) {
            mysqli_commit($link);
            echo "<font color=\"#3300FF\"><strong><br>Η διαγραφή του χρήστη ολοκληρώθηκε με επιτυχία!!!<br></strong>";
        } else {
            mysqli_rollback($link);
        }
    }
    ?>



    <?php
    $sql = "select
                             AdminID,
                             Firstname,
                             Lastname,
                             Email

            from admin ";
    $result = mysqli_query($link, $sql) or die(header("Location: error.php?msg=dat_er"));
    ?>
    <br>
    <table class="view">
      <div class="container">
        <table class="table table-bordered">
          <br><br>          <br><br>
          <br><br>
          <br><br>

        <tr>
          <th>AdminID</th>
          <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_array($result)) {
            ?>

            <tr class="alt">
              <td><?php echo $row['AdminID']; ?></td>
              <td><?php echo $row['Firstname']; ?></td>
              <td><?php echo $row['Lastname']; ?></td>
              <td><?php echo $row['Email']; ?></td>


                <td valign="center" align="center">
                    <form name="updateform" method="post" action="delete_admin_5.php">
                <!--        <input type="hidden" name="status" value="delete"> -->
                        <input type="hidden" name="AdminID" value="<?php echo $row['AdminID']; ?>"></td>
                        <td>
<a href="delete_admin_5.php?StudentID=<?php echo  $row['AdminID'];?>" onClick="return confirm('Είσαι σίγουρος ότι θες να διαγράψεις τον χρήστη;')" >Delete</a>
                        </td>

            </tr>
            <?php
        }
        ?>
    </table>
</center>
</html>
