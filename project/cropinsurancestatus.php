<?php
include("includes/connection.php");
include("includes/nav1.php");
if (isset($_SESSION["id"]) != session_id()) {

    echo ("<script LANGUAGE='JavaScript'>
        window.alert('Login first');
        window.location.href='login.php';
      </script>");
} else {

?>

    <?php
    if (isset($_POST['rbtn'])) {
        include "includes/connection.php";
        $id = $_POST['rbtn'];
        $sval = $_POST['status'];
        $sql = "UPDATE `tbl_cropinsurance` SET `astatus`= '$sval' WHERE `crop_id` = $id";
        $result = mysqli_query($con, $sql);
    }
    ?>

    <html>

    <head>
        <title>Officer Home</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    </head>

    <body>
        <div class="ml-5 mt-5">
            <h3 class="text-center">CROP INSURANCE REQUEST</h3><br><br>
            <table class="table table-bordered css-serial">
                <thead class="">
                    <tr>

                        <th scope="col">Name</th>
                        <th scope="col">Date Applied</th>
                        <th scope="col">Survey Number</th>
                        <th scope="col">Crop Name</th>
                        <th scope="col">Seeds Quantity (in grmas)</th>
                        <th scope="col">Crop age (in Months)</th>

                        <th scope="col">Account Number</th>
                        <th scope="col">IFSC Code</th>
                        <th scope="col">Status</th>
                        <th scope="col">Status</th>

                    </tr>
                </thead>
                <tbody>

                    <?php
                    include("includes/connection.php");
                    $sql = "SELECT `crop_id`,`user_id`,`surveynumber`,`crop_name`,`seeds`,`ageforinsurance`,`imageProof`,`accountnumber`,`ifsccode`,`astatus`,`date` FROM tbl_cropinsurance";
                    $result = mysqli_query($con, $sql);
                    $rows = mysqli_num_rows($result);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {

                            $fetchName = "SELECT * FROM `tb_userreg` WHERE `reg_id`='" . $row['user_id'] . "'";
                            $fetchNameResult = mysqli_query($con, $fetchName);
                            if (mysqli_num_rows($fetchNameResult) > 0) {
                                while ($fetchNameRow = mysqli_fetch_assoc($fetchNameResult)) {
                                    echo "<td scope='row'>" . $fetchNameRow['name'] . "</th>";
                                }
                            }
                            echo "
                            <td scope='row'>" . $row['date'] . "</th>
                            <td scope='row'>" . $row['surveynumber'] . "</th>
                            <td scope='row'>" . $row['crop_name'] . "</th>
                            <td scope='row'>" . $row['seeds'] . "</th>
                            <td scope='row'>" . $row['ageforinsurance'] . "</th>
                            
                            <td scope='row'>" . $row['accountnumber'] . "</th>
                            <td scope='row'>" . $row['ifsccode'] . "</th>
                            
                            <td scope='row'>";
                            if ($row['astatus'] == 1) {
                                echo "<p class='card-text'>Processed</p>";
                            } else if ($row['astatus'] == 2) {
                                echo "<p class='card-text text-secondary'>Approved</p>";
                            } else if ($row['astatus'] == 3) {
                                echo "<p class='card-text text-secondary'>Rejected</p>";
                            } else {
                                null;
                            }
                            echo "</th>";
                            echo "<td>
                          
                          <form method='post' action='#'>
                          <select class='custom-select' id='inputGroupSelect01' name='status'>
                              <option selected>Choose...</option>
                              <option value='1'>Processed</option>
                              <option value='2'>Approved</option>
                              <option value='3'>Rejected</option>
                            </select>
                            <button class='btn btn-success' value='" . $row['crop_id'] . "' name=rbtn>Update</button>
                          </form>
                          </td></tr>";
                        }
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </body>

<?php
}
?>


    </html>