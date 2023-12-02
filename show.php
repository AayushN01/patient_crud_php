<?php 
  include ('includes/template.php');
?>
    <section class="p-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h3>Patient Detail: <span class="text text-danger">(Patient Name)</span></h3>
            <a href="index.php" class="ms-auto btn btn-secondary" style="float: right;">Go Back</a>
          </div>
        </div>
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
                  <tr>
                    <th>1</th>
                    <td>Aayush Niraula</td>
                    <td>aayushniraula1@gmail.com</td>
                    <td>Male</td>
                    <td>9841228968</td>
                    <td>
                      <a href="show.php" class="btn btn-primary btn-sm" title="View Details"><i class="fa fa-eye"></i></a>
                      <a href="edit.php" class="btn btn-warning btn-sm" title="Edit Details"><i class="fa fa-pen"></i></a>
                      <a href="#" class="btn btn-danger btn-sm" title="Delete"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
