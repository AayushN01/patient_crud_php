<?php
include('includes/template.php');
?>
<section class="p-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Add New Patient</h3>
                <a href="index.php" class="ms-auto btn btn-secondary p-2 my-2" style="float: right;">Go Back</a>
            </div>
        </div>
        <div class="card p-2">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <form class="row g-3" action="store.php" method="POST">
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">First Name <span class="text text-danger">*</span></label>
                                <input type="text" class="form-control" id="validationCustom01" name="first_name" required>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Middle Nname</label>
                                <input type="text" class="form-control" id="validationCustom01" name="middle_name">
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Last Name <span class="text text-danger">*</span></label>
                                <input type="text" class="form-control" id="validationCustom01" name="last_name" required>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Date Of Birth<span class="text text-danger">*</span></label>
                                <input type="date" class="form-control" id="validationCustom01" name="dob">
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <label for="validationCustom01" class="form-label">Gender<span class="text text-danger">*</span></label>
                                </div>
                                <div class="form-check form-check-inline mt-2">
                                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male" required>
                                    <label class="form-check-label" for="inlineRadio1">Male</label>
                                </div>
                                <div class="form-check form-check-inline mt-2">
                                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female" required>
                                    <label class="form-check-label" for="inlineRadio2">Female</label>
                                </div>
                                <div class="form-check form-check-inline mt-2">
                                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="Other" required>
                                    <label class="form-check-label" for="inlineRadio3">Other</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Nationality</label>
                                <input type="text" class="form-control" id="validationCustom01" name="nationality">
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Address</label>
                                <input type="text" class="form-control" id="validationCustom01" name="address">
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Contact Number <span class="text text-danger">*</span></label>
                                <input type="tel" class="form-control" id="validationCustom01" name="contact_no">
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Contact Number (Alternate)</label>
                                <input type="tel" class="form-control" id="validationCustom01" name="contact_alternate">
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Email <span class="text text-danger">*</span></label>
                                <input type="email" class="form-control" id="validationCustom01" name="email">
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Occupation</label>
                                <input type="text" class="form-control" id="validationCustom01" name="occupation">
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustom01" class="form-label">Medical History</label>
                                <textarea name="medical_history" id="validationCustom01" class="form-control"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Add Record</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
