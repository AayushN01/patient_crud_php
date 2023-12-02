<?php
include('db.php');
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

    <div class="card p-2">
      <div class="card-body">
        <div class="row">
          <div class="col-md-12">
            <div class="table-responsive my-2">
              <table class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th width="5%">SNo.</th>
                    <th width="30%">Name</th>
                    <th width="30%">Email</th>
                    <th width="5%">Gender</th>
                    <th width="15%">Contact No.</th>
                    <th width="15%">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    
                    $query = "SELECT * FROM patients ORDER BY created_at DESC";
                    $result = mysqli_query($connection, $query);
                    if(mysqli_num_rows($result) > 0)
                    {
                      $patients = mysqli_fetch_all($result, MYSQLI_ASSOC);
                      
                      foreach($patients as $key => $patient)
                      { ?>
                        <tr>
                          <th><?php echo ++$key; ?></th>
                          <td><?php echo $patient['first_name'] . ' ' .$patient['middle_name'] . ' ' .$patient['last_name']; ?></td>
                          <td><?php echo $patient['email'] ?></td>
                          <td><?php echo $patient['gender'] ?></td>
                          <td><?php echo $patient['contact_no'] ?></td>
                          <td>
                            <a href="show.php?id=<?php echo $patient['id']; ?>" class="btn btn-primary btn-sm" title="View Details"><i class="fa fa-eye"></i></a>
                            <a href="edit.php?id=<?php echo $patient['id']; ?>" class="btn btn-warning btn-sm" title="Edit Details"><i class="fa fa-pen"></i></a>
                            <a href="delete.php?id=<?php echo $patient['id']; ?>" class="btn btn-danger btn-sm" title="Delete"><i class="fa fa-trash"></i></a>
                          </td>
                        </tr>
                      <?php } 
                    }
                  ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>
