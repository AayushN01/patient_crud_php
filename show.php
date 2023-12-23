<?php 
  include ('includes/template.php');
  include('Patient.php');

  $patient = new Patient();
  
  if(isset($_GET['id']))
  {
    $patientId = $_GET['id'];
    $patient = $patient->getRecordById($patientId);
    if ($patient !== null) { 
      if(isset($patient['middle_name']) && $patient['middle_name'] !== ''){
          $short_middle = strtoupper(substr($patient['middle_name'], 0, 1)) . '.';
      }else{
        $short_middle = ''; 
      }
    ?>

<section class="p-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h3>Patient Detail: <span class="text text-danger"><?php echo $patient['first_name'] . ' ' .$short_middle . ' ' .$patient['last_name']; ?></span></h3>
            <a href="index.php" class="ms-auto btn btn-secondary" style="float: right;">Go Back</a>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="table-responsive my-2">
              <table class="table table-bordered table-hover">
                <tbody>
                    <tr>
                        <th>Full Name</th>
                        <td colspan="3"><?php echo $patient['first_name'] . ' ' .$patient['middle_name'] . ' ' .$patient['last_name']; ?></td>
                    </tr>
                    <tr>
                        <th>Date Of Birth</th>
                        <td><?php echo $patient['dob']; ?></td>
                        <th>Gender</th>
                        <td><?php echo $patient['gender']; ?></td>
                    </tr>
                    <tr>
                        <th>Nationality</th>
                        <td colspan="3"><?php echo $patient['nationality']; ?></td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td><?php echo $patient['address']; ?></td>
                        <th>Email</th>
                        <td><?php echo $patient['email']; ?></td>
                    </tr>
                    <tr>
                        <th>Contact Number</th>
                        <td><?php echo $patient['contact_no'] ?></td>
                        <th>Contact Number (alternate)</th>
                        <td><?php echo $patient['contact_alternate']; ?></td>
                    </tr>
                    <tr>
                        <th>Occupation</th>
                        <td colspan="3"><?php echo $patient['occupation']; ?></td>
                    </tr>
                    <tr>
                        <th>Appointment Date/Time</th>
                        <td colspan="3"><?php echo $patient['appointment_datetime']; ?></td>
                    </tr>
                    <tr>
                        <th>Medical History</th>
                        <td colspan="3"><?php echo $patient['medical_history']; ?></td>
                    </tr>
                    <tr>
                        <th>Created At</th>
                        <td><?php echo $patient['created_at'] ?></td>
                        <th>Updated At</th>
                        <td><?php echo $patient['updated_at']; ?></td>
                    </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php } else {
        echo "Patient not found.";
    }

  }
?>

