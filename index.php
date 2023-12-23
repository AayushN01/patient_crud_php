<?php
include('Patient.php');
include('includes/template.php');

?>

<section class="p-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>Patient Records</h3>
        <a href="add.php" class="ms-auto btn btn-secondary p-2 my-2" style="float: right;">Add New</a>
      </div>

    </div>
  </div>
<?php 
  session_start();
  if (isset($_GET['success']) && $_GET['success'] == 1) {
    echo '<div class="alert alert-success" role="alert">Record added successfully!</div>';
  }
  if (isset($_GET['update_success']) && $_GET['update_success'] == 1) {
    echo '<div class="alert alert-success" role="alert">Record updated successfully!</div>';
  }
  if (isset($_GET['delete_success']) && $_GET['delete_success'] == 1) {
    echo '<div class="alert alert-success" role="alert">Record deleted successfully!</div>';
  }
?>
  <div class="card p-2">

    <div class="card-body">
      <div class="row">
        <div class="col-md-12">
          <div class="table-responsive my-2">
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th width="5%">SNo.</th>
                  <th width="25%">Name</th>
                  <th width="20%">Email</th>
                  <th width="5%">Gender</th>
                  <th width="15%">Contact No.</th>
                  <th width="10%">Appointment Date/Time</th>
                  <th width="20%">Actions</th>
                </tr>
              </thead>
              <tbody>
              <?php 
              $patients = new Patient();
              $patients = $patients->getAllRecords();
              if(isset($patients) && is_array($patients) && count($patients) > 0)
              {
                foreach($patients as $key =>$patient){ 
                  ?>
                 <tr>
                  <td><?php echo ++$key ?></td>
                  <td><?php echo $patient['first_name'] . ' ' . $patient['middle_name'] . ' ' . $patient['last_name']; ?></td>
                  <td><?php echo $patient['email']; ?></td>
                  <td><?php echo $patient['gender']; ?></td>
                  <td><?php echo $patient['contact_no']; ?></td>
                  <td><?php echo $patient['appointment_datetime']; ?></td>
                  <td>
                    <a href="show.php?id=<?php echo $patient['id'] ?>" class="btn btn-success btn-sm">View Detail</a>
                    <a href="edit.php?id=<?php echo $patient['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="delete.php?id=<?php echo $patient['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                  </td>
                 </tr>
          <?php }
              }else{ ?>
                <tr>
                  <td colspan="6">No Records Found</td>
                </tr>
             <?php  } ?>
              </tbody>

            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  </div>
</section>