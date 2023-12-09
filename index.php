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

  <div class="card p-2">
    <div class="card-head">
      <div class="searchForm p-2">
        <form action="search-result.php">
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Search By Name">
              </div>
            </div>
            <!-- <div class="col-md-3">
              <div class="form-group">
                <input type="date" class="form-control" name="date" placeholder="Search By Date">
              </div>
            </div> -->
            <!-- <div class="col-md-3">
              <div class="form-group">
                <select name="gender" class="form-control" id="gender" aria-placeholder="Search By Gender">
                  <option selected disapled>Search By Gender</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  <option value="Other">Other</option>
                </select>
              </div>
            </div> -->
            <div class="col-md-2">
              <div class="form-group">
                <button type="submit" class="form-control btn btn-primary"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </div>
      </div>

      </form>
    </div>
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