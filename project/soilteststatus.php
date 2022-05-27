<?php
include("includes/connection.php");
include("includes/nav_assistant.php");
if (isset($_SESSION["id"]) != session_id()) {

  echo ("<script LANGUAGE='JavaScript'>
        window.alert('Login first');
        window.location.href='emplogin.html';
      </script>");
} else {

?>

  <?php
  if (isset($_POST['rbtn'])) {
    include "includes/connection.php";
    $id = $_POST['rbtn'];
    $sval = $_POST['status'];
    $sql = "UPDATE `tbl_soiltest` SET `status`= '$sval' WHERE Id = $id";
    //echo $sql;

    $result = mysqli_query($con, $sql);
    //echo "hai";
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
      <h3>Request for soil test</h3>
      <table class="table table-bordered css-serial">
        <thead class="">
          <tr>
            <th scope="col">Date Applied</th>
            <th scope="col">Name</th>
            <th scope="col">Survey Number</th>
            <th scope="col">Land Name</th>
            <th scope="col">Land Area</th>
            <th scope="col">Soil Type</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>

          </tr>
        </thead>
        <tbody>

          <?php
          include("includes/connection.php");
          $sql = "SELECT * FROM tbl_soiltest";
          $result = mysqli_query($con, $sql);
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              echo "
              <tr>
              <td scope='row'>" . $row['date'] . "</th>";
              $fetchName = "SELECT * FROM `tb_userreg` WHERE `reg_id`='" . $row['user_id'] . "'";
              $fetchNameResult = mysqli_query($con, $fetchName);
              if (mysqli_num_rows($fetchNameResult) > 0) {
                while ($fetchNameRow = mysqli_fetch_assoc($fetchNameResult)) {

                  echo "<td scope='row'>" . $fetchNameRow['name'] . "</th>";
                }
              }
              echo "
              
              <td scope='row'>" . $row['surveynumber'] . "</th>
              <td scope='row'>" . $row['landname'] . "</th>
              <td scope='row'>" . $row['landarea'] . "</th>
              <td scope='row'>" . $row['soiltype'] . "</th>";
              if ($row['status'] == 1) {
                echo "<td scope='row'>Underprocessing</th>";
              } else if ($row['status'] == 2) {
                echo "<td scope='row'>processed</th>";
              } else if ($row['status'] == 3) {
                echo "<td scope='row'>approved</th>";
              } else if ($row['status'] == 4) {
                echo "<td scope='row'>rejected</th>";
              }
              echo "</th>";
              echo "<td>
                            
                            <form method=post>
                            <select class='custom-select' id='inputGroupSelect01' name='status'>
                                <option selected>Choose...</option>
                                <option value='1'>Underprocessing</option>
                                <option value='2'>processed</option>
                                <option value='3'>approved</option>
                                <option value='4'>rejected</option>
                              </select>
                              <button class='btn btn-success' value='" . $row['Id'] . "' name=rbtn>Update</button>
                            </form>
                            </td>";

              "</tr>";
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