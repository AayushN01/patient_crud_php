<?php 
    include('Patient.php');

    $patientObj = new Patient();
    if(isset($_POST['store'])){
        $patientObj->store($_POST);
    }


?>