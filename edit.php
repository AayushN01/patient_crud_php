<?php 
  include ('includes/template.php');
  include('db.php');

  if(isset($_GET['id']))
  {
    $patientId = $_GET['id'];
    $query = "SELECT * FROM patients WHERE id=$patientId";
    $result = mysqli_query($connection,$query);
    if($result)
    {
        $patient = mysqli_fetch_assoc($result);
        if(isset($patient['middle_name']) && $patient['middle_name'] !== ''){
            $short_middle = strtoupper(substr($patient['middle_name'], 0, 1)) . '.';
        }else{
           $short_middle = ''; 
        }
       
    }
  }
?>
<section class="p-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Edit Patient: <span class="text text-danger"><?php echo $patient['first_name'] . ' ' .@$short_middle . ' ' .$patient['last_name']; ?></span></h3>
                <a href="index.php" class="ms-auto btn btn-secondary p-2 my-2" style="float: right;">Go Back</a>
            </div>
        </div>
        <div class="card p-2">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <form class="row g-3" action="update.php?id=<?php echo $patient['id']; ?>" method="POST">
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">First Name <span class="text text-danger">*</span></label>
                                <input type="text" class="form-control" id="validationCustom01" name="first_name" value="<?php echo $patient['first_name'] ?? '' ?>">
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Middle Name</label>
                                <input type="text" class="form-control" id="validationCustom01" name="middle_name" value="<?php echo $patient['middle_name'] ?? '' ?>">
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Last Name <span class="text text-danger">*</span></label>
                                <input type="text" class="form-control" id="validationCustom01" name="last_name" value="<?php echo $patient['last_name'] ?? '' ?>">
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Date Of Birth<span class="text text-danger">*</span></label>
                                <input type="date" class="form-control" id="validationCustom01" name="dob" value="<?php echo $patient['dob'] ?? '' ?>">
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <label for="validationCustom01" class="form-label">Gender<span class="text text-danger">*</span></label>
                                </div>
                                <div class="form-check form-check-inline mt-2">
                                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male" <?php if($patient['gender'] == 'Male'){ ?> checked <?php } ?>>
                                    <label class="form-check-label" for="inlineRadio1">Male</label>
                                </div>
                                <div class="form-check form-check-inline mt-2">
                                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female" <?php if($patient['gender'] == 'Female'){ ?> checked <?php } ?>>
                                    <label class="form-check-label" for="inlineRadio2">Female</label>
                                </div>
                                <div class="form-check form-check-inline mt-2">
                                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="Other" <?php if($patient['gender'] == 'Other'){ ?> checked <?php } ?>>
                                    <label class="form-check-label" for="inlineRadio3">Other</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Nationality</label>
                                <input type="text" class="form-control" id="validationCustom01" name="nationality" value="<?php echo $patient['nationality'] ?? '' ?>">
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Address</label>
                                <input type="text" class="form-control" id="validationCustom01" name="address" value="<?php echo $patient['address'] ?? '' ?>">
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Contact Number <span class="text text-danger">*</span></label>
                                <input type="tel" class="form-control" id="validationCustom01" name="contact_no" value="<?php echo $patient['contact_no'] ?? '' ?>">
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Contact Number (Alternate)</label>
                                <input type="tel" class="form-control" id="validationCustom01" name="contact_alternate" value="<?php echo $patient['contact_alternate'] ?? '' ?>">
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Email <span class="text text-danger">*</span></label>
                                <input type="email" class="form-control" id="validationCustom01" name="email" value="<?php echo $patient['email'] ?? '' ?>">
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Occupation</label>
                                <input type="text" class="form-control" id="validationCustom01" name="occupation" value="<?php echo $patient['occupation'] ?? '' ?>">
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Appontment Date/Time <span class="text text-danger">*</span></label>
                                <input type="datetime-local" class="form-control" id="validationCustom01" name="appointment_datetime" value="<?php echo $patient['appointment_datetime'] ?? '' ?>">
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustom01" class="form-label">Medical History</label>
                                <textarea name="medical_history" id="validationCustom01" class="form-control"><?php echo $patient['medical_history'] ?? '' ?></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Update Record</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>